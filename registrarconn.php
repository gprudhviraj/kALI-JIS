<?php
	$db=new mysqli("localhost","root","","kali");
    if($db->connect_error)
    {
        die("connerction failed");
    }
    echo "connection success";
    
		$courtname=$_POST['courtname'];
		$registrarname=$_POST['registrarname'];
		$username=$_POST['username'];
		$pwd=$_POST['pwd'];
 $x="update court set rname='$registrarname', rusername='$username' ,pwd='$pwd' where coname='$courtname'";
         if($db->query($x)===TRUE)
        {
            echo "inserted successfully";
             header("location:admin.html");
        }
        else
        {
            echo "error" . $db->error;
        }
        
        
?>