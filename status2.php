<?php
$con=mysqli_connect("localhost","root","","kali");
      if(!$con)
      {
          die("connection failed".mysqli_connect_error());
      }
    
    if(isset($_POST['submit']))
    {
    $cin=$_POST['cin'];
    $a=$_POST['status'];
    $sql2="update cases set status='$a' where cid='$cin'";
    mysqli_query($con,$sql2);
 $sql1=" select * from cases where cid='$cin'";
  $result1=mysqli_query($con,$sql1);
     
     while( $row1=$result1->fetch_assoc())
     {
         $cid=$row1['cid'];
         $date=$row1['heardate'];
         $dname=$row1['dname'];
         $addr=$row1['addr'];
         
         if($a=='completed')
         { 
        echo "<form method='post'>";
        echo "<input type='hidden' name='cid' value='$cid'>";
        echo "<input type='hidden' name='hdate' value='$date'>";
        echo "<center>Enter complete date:<input type='date' name='cdate' ></center><br>";
        echo "<center>Enter judge name:<input type='text' name='judge'></center><br>";
        echo "<center>Enter summary:<input type='text' name='summary'></center><br>";
        echo"<center><input type ='submit' name='submit1'><br></center>";
        echo "</form>";
            
             
         }
         if($a=='pending')
         {
         echo  "<form method='post'>";
        echo "<input type='hidden' name='cid' value='$cid'>";
        echo "<input type='hidden' name='hdate' value='$date'>";
        echo "<input type='hidden' name='dname' value='$dname'>";
        echo "<input type='hidden' name='addr' value='$addr'>";
        echo "<center>Lawyer Name:<input type='text' name='lname' ></center><br>";
        echo "<center>judge:"."<input type='text' name='judge'></center><br>";
        echo "<center>crimedetails:"."<input type='text' name='crime'></center><br>";
        echo"<center><input type ='submit' name='submit2'></center>";
        echo "</form>";
    }
         if($a=='cancelled')
         {
             echo  "<form method='post'>";
             echo "<input type='hidden' name='cid' value='$cid'>";
        echo "<center>next hearing date:"."<input type='date' name='ndate'></center><br>";
        echo "<center>reason for cancel:"."<input type='text' name='reason'></center><br>";
        echo"<center><input type ='submit' name='submit3'></center>";
        echo "</form>";
         }
    }
    }
 if(isset($_POST['submit1']))
 {
     $cid=$_POST['cid'];
     $hdate=$_POST['hdate'];
     $cdate=$_POST['cdate'];
     $judge=$_POST['judge'];
     $summ=$_POST['summary'];
     $sql1=" select * from judge where jname='$judge';";
  $result1=mysqli_query($con,$sql1);
     
     while(mysqli_num_rows($result1) > 0)
     {
       $sql2="insert into completecase(cid,hdate,cdate,judge,summary) values('$cid','$hdate','$cdate','$judge','$summ');";
       mysqli_query($con,$sql2);
         break;
        
     }
 }
 if(isset($_POST['submit2']))
 {
     $cid=$_POST['cid'];
     $hdate=$_POST['hdate'];
     $dname=$_POST['dname'];
     $addr=$_POST['addr'];
     $lname=$_POST['lname'];
     $judge=$_POST['judge'];
     $crime=$_POST['crime'];
     $sql1=" select * from judge where jname='$judge'";
  $result1=mysqli_query($con,$sql1);
     
     while( $row1=$result1->fetch_assoc())
     {
     $sql2=" select * from lawyer where lname='$lname'";
  $result2=mysqli_query($con,$sql1);
     
     while( $row2=$result2->fetch_assoc())
     {
       $sql3="insert into pendingcase(cid,hdate,dname,addr,lname,judge,crime) values('$cid','$hdate','$dname','$addr','$lname','$judge','$crime') ";
       if((mysqli_query($con,$sql3))===true)
       {
           echo "<script>alert('status updated succesfully')</script>";
       }
     }
 }
 }
 if(isset($_POST['submit3']))
 {
     $ndate=$_POST['ndate'];
     $reason=$_POST['reason'];
    $cid=$_POST['cid']; 
       $sql3="insert into cancelcase(ndate,reason,cid) values('$ndate','$reason','$cid') ";
       if((mysqli_query($con,$sql3))===true)
       {
       echo "<script>alert('status updated succesfully')</script>";
}
}
?>