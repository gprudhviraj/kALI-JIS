<!DOCTYPE html>
<html>
<head>
	<title>Add a court</title>
	<link rel="stylesheet" type="text/css" href="css/court.css">
    <style>
    body {
    /*background: url(download.jpg);*/
    background-size: 100% 100%;
    }
    </style>
</head>
<body>
    <h1>Court Details</h1>
    <div style="height:90%;width:100%;overflow:auto">
	<form action="courtconn.php" method="post">
		
		<!--fieldset>
		<legend>court details</legend-->
		<div class="inputrow">
			<!--div class="field">Court Name:</div-->
			<div class="inp"><center><input type="text" name="coname" required placeholder="Court name"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">Registrar Name:</div-->
			<div class="inp"><center><input type="text" name="rname" required placeholder="Registar name"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">User Name:</div-->
			<div class="inp"><center><input type="text" name="rusername" required placeholder="User name"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">Password:</div-->
            <div class="inp"><center><input type="password" name="pwd"  required placeholder="Password"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">Confirm Password:</div-->
			<div class="inp"><center><input type="text" name="cpwd" required placeholder="Confirm Password"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">working hours:</div-->
			<div class="inp"><center><input type="text" name="fromt" required placeholder="Working hours from"></center></div>
            </div>
        <div class="inputrow">
            <div class="inp"><center><input type="text" name="tot" required placeholder="Working hours to"></center></div>
		</div>
	<!--/fieldset-->
	<!--fieldset>
		<legend>address</legend-->
		<div class="inputrow">
			<!--div class="field">City:</div-->
			<div class="inp"><center><input type="text" name="city" required placeholder="City"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">District:</div-->
			<div class="inp"><center><input type="text" name="district" required placeholder="District"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">State:</div-->
			<div class="inp"><center><input type="text" name="state" required placeholder="State"></center></div>
		</div>
		<div class="inputrow">
			<!--div class="field">pincode</div-->
			<div class="inp"><center><input type="number" name="pin" required placeholder="Pincode"></center></div>
		</div>
	<!--/fieldset-->
	<input type="submit" name="submit" value="submit">
	</form>
        </div>
    
</body>
</html>