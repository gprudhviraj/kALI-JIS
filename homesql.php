<?php
      $con=mysqli_connect("localhost","root","","kali");
      if(!$con){
          die("connection failed".mysqli_connect_error());
      }
      $user=$_POST['user'];
      $pass=$_POST['password'];
      $radio=$_POST['type'];
      echo $user;
      echo $pass;
      echo $radio;
 
      if($radio==1)
     {
         $sql="select jpwd from judge where jid='$user';";
         $result=mysqli_query($con,$sql);
         $row=mysqli_fetch_array($result);
         if($row['jpwd']==$pass)
         {
             header("location:status.html");
         }
         else{
             echo '<script>alert("invalid username or password")</script>';
         }
     }
     if($radio==2)
     {
       $sql="select lpwd from lawyer where lid='$user';";
         $result=mysqli_query($con,$sql);
         $row=mysqli_fetch_array($result);
         if($row['lpwd']==$pass)
         {
             header("location:pay.php");
         }
         else{
             echo  ' <script>alert("invalid username or password")</script>';
                      }
      }
     if($radio==3)
     {
     $sql="select pwd from court where rusername='$user';";
         $result=mysqli_query($con,$sql);
         $row=mysqli_fetch_array($result);
         if($row['pwd']==$pass)
         {
             header("location:regfun.html");
         }
         else{
             echo ' <script>alert("invalid username or password")</script>';
         }
         
     }
     if($radio==4)
     {
         if($user=="kali"){
         if($pass=="1234"){
             header("location:admin.html");
         }
         else{
             echo  '<script>alert("invalid password")</script>';
         }
         }
         else{
             echo  '<script>alert("invalid username")</script>';
         }
     }


?>