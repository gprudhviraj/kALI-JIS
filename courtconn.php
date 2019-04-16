<?php
$db=new mysqli("localhost","root","","kali");
    if($db->connect_error)
    {
        die("connerction failed");
    }
    echo "connection success";

		$courtname=$_POST['coname'];
		$Regname=$_POST['rname'];
		$username=$_POST['rusername'];
		$pwd=$_POST['pwd'];
		$cpwd=$_POST['cpwd'];
		$fromtime=$_POST['fromt'];
		$totime=$_POST['tot'];
		$city=$_POST['city'];
		$district=$_POST['district'];
		$state=$_POST['state'];
		$pincode=$_POST['pin'];
        
        if($pwd==$cpwd)
        {
        $x="INSERT into court(coname,rname,rusername,pwd,fromt,tot,city,district,state,pin)  values('$courtname','$Regname','$username','$pwd','$fromtime','$totime','$city','$district','$state','$pincode');";
       
               if($db->query($x)===TRUE)
              {
                    echo "inserted successfully";  
                     header("location:admin.html");
              }
               else
               {
                    echo("error :".mysqli_error($db));
                    }
        }
        else
        echo"password not matching";
     
		
?>