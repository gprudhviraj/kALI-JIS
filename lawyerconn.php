<?php

	$db=new mysqli("localhost","root","","kali");
    if($db->connect_error)
    {
        die("connerction failed");
    }
    echo "connection success";

		$lid=$_POST['lawyerid'];
		$lname=$_POST['lname'];
		$lpwd=$_POST['pwd'];
		$lcpwd=$_POST['cpwd'];
		$lawyertype=$_POST['lawyertype'];

if($lpwd==$lcpwd)
{
        $x="INSERT into lawyer values('$lid','$lname','$lpwd','$lawyertype');";
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