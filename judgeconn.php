<?php

	$db=new mysqli("localhost","root","","kali");
    if($db->connect_error)
    {
        die("connerction failed");
    }
    echo "connection success";

		$jid=$_POST['judgeid'];
		$jname=$_POST['jname'];
		$jpwd=$_POST['pwd'];
		$jcpwd=$_POST['cpwd'];
		$judgetype=$_POST['judgetype'];

if($jpwd==$jcpwd)
{
        $x="INSERT into judge values('$jid','$jname','$jpwd','$judgetype');";
		if($db->query($x)===TRUE)
        {
            echo "inserted successfully";
        }
        else
        {
            echo "error";
        }
 }
        else
        {
            echo "password did not match";
        }
?>