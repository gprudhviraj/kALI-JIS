<?php
$con=mysqli_connect("localhost","root","","kali");
      if(!$con){
          die("connection failed".mysqli_connect_error());
      }
    
    $cin=$_POST['cin'];
  $sql1=" select status from cases where cid='$cin'";
  $result1=mysqli_query($con,$sql1);
         $row1=mysqli_fetch_array($result1);
         $a=$row1['status'];
         if($a=='registered')
         {
             echo "case Registered just now";
             header("location:regfun.html");
             
          }
         if($a=='completed')
         {
          $sql2="select * from completecase where cid='$cin'";
          $result1=mysqli_query($con,$sql2);
     echo "<table><tr>";
    echo "<th>cid</th>";
    echo "<th>hdate</th>";
    echo "<th>cdate</th>";
    echo  "<th>judge</th>";
    echo  "<th>summary</th></tr>";
     while( $row1=$result1->fetch_assoc())
     {
           echo "<tr><td>".$row1['cid']."</td>";
           echo "<td>".$row1['hdate']."</td>";
          echo "<td>".$row1['cdate']."</td>";
          echo "<td>".$row1['judge']."</td>";
          echo "<td>".$row1['summary']."</td></tr>";
     }
     echo "</table>";
     }
       if($a=='pending')
         {
          $sql2="select * from pendingcase where cid='$cin'";
          $result1=mysqli_query($con,$sql2);
          
     echo "<table><tr>";
    echo "<th>cid</th>";
    echo "<th>hdate</th>";
    echo "<th>dname</th>";
    echo "<th>addr</th>";
    echo "<th>lname</th>";
    echo  "<th>judge</th>";
    echo  "<th>crime</th></tr>";
     while( $row1=$result1->fetch_assoc())
         {
            echo "<tr><td>".$row1['cid']."</td>";
           echo "<td>".$row1['hdate']."</td>";
          echo "<td>".$row1['dname']."</td>";
          echo "<td>".$row1['addr']."</td>";
          echo "<td>".$row1['lname']."</td>";
             echo "<td>".$row1['judge']."</td>";
          echo "<td>".$row1['crime']."</td></tr>";
           }
           echo "</table>";
              }
         if($a=='cancelled')
         {  
         $sql2="select * from cancelcase where cid='$cin'";
          $result1=mysqli_query($con,$sql2);
     
     echo "<table><tr>";
    echo "<th>cid</th>";
    echo "<th>hdate</th>";
    echo "<th>cdate</th><tr>";
     while( $row1=$result1->fetch_assoc())
         {
         echo "<tr><td>".$row1['ndate']."</td>";
           echo "<td>".$row1['reason']."</td>";
          echo "<td>".$row1['cid']."</td></tr>";
       }
       echo "</table>";
  }
?>