<?php
	 $db=new mysqli("localhost","root","","kali");
    if($db->connect_error)
    {
        die("connerction failed");
    }
 
    
	    $cin=$_POST['cin'];
		$dependentname=$_POST['dname'];
		$dependentadd=$_POST['addr'];
		$crimetype=$_POST['ctype'];
		$crimedate=$_POST['datecc'];
		$committedloc=$_POST['wherec'];
		$copname=$_POST['cop'];
		$arrestdate=$_POST['arrestdate'];
		$hearingdate=$_POST['heardate'];
		$hearingtime=$_POST['heartime'];
		$expecteddate=$_POST['expectc'];
   
		$x="INSERT into cases(cin,dname,addr,ctype,datecc,wherec,cop,arrestdate,heardate,heartime,expectc) values('$cin','$dependentname','$dependentadd','$crimetype','$crimedate','$committedloc','$copname','$arrestdate','$hearingdate','$hearingtime','$expecteddate')";
		if($db->query($x)===TRUE)
        {

          
              echo "<script>alert('inserted succesfully')</script>";
              header("refresh:0;url=regfun.html");
        }
        else
        {
            echo "error" . $db->error;
        }

?>