<html>
<body>
    <form method="post" action="changejud1.php">
    <input type="text" name="user" placeholder="enter id of judge ">
    <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
      $db=mysqli_connect("localhost","root","","kali");
	  if (isset($_POST['submit'])) {
    
              $user=$_POST['user'];
              $sql="delete from judge where jid=$user";
              if(mysqli_query($db,$sql)===true){
                  echo "removed succesfully";
              }
        }
?>