<html>
<body>
    <form method="post" action="changelaw.php">
    <input type="text" name="user" placeholder="enter id of lawyer ">
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
      $db=mysqli_connect("localhost","root","","kali");
	  if (isset($_POST['submit'])) {
    
              $user=$_POST['user'];
              $sql="delete from lawyer where lid=$user";
              if(mysqli_query($db,$sql)===true){
                  echo "<script>alert('removed succesfully')</script>";
              }
        }
?>