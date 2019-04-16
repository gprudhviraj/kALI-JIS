<!DOCTYPE html>
<html>
<head>
	<title>Add a Lawyer</title>
	<link rel="stylesheet" type="text/css" href="css/court.css">
</head>
<body>
	<form action="lawyerconn.php" method="post">
		<fieldset>
		<legend>lawyer details</legend>
		<div class="inputrow">
			<div class="field">Lawyer id:</div>
			<div class="inp"><input type="text" name="lawyerid"></div>
            </div>
		<div class="inputrow">
			<div class="field">Lawyer Name:</div>
			<div class="inp"><input type="text" name="lname"></div>
		</div>
		<div class="inputrow">
			<div class="field">Password:</div>
			<div class="inp"><input type="password" name="pwd"></div>
		</div>
		<div class="inputrow">
			<div class="field">Confirm Password:</div>
			<div class="inp"><input type="password" name="cpwd"></div>
		</div>
		
	</fieldset>
	<div class="inputrow">
			<div class="field">Lawyer type:</div>
			<div class="inp">
				<select name="lawyertype">
					<option>criminal</option>
                    	<option>civil</option>
                        <option>employment</option>
                    	<option>immigration</option>
                        <option>estate</option>
                    	<option>corporate</option>
				</select>
			</div>
	<input type="submit" name="submit" value="submit">
        </div>
	</form>
</body>
</html>