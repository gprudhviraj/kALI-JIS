<!DOCTYPE html>
<html>
<head>
	<title>Add a Judge</title>
	<link rel="stylesheet" type="text/css" href="css/court.css">
    <style>
    body {
    /*background: url(judge.jpg);
    background-size: 100% 100%;
    }
    </style>
</head>
<body>
	<form action="judgeconn.php" method="post">
		<fieldset>
		<legend>judges details</legend>
		<div class="inputrow">
			<div class="field">Judge id:</div>
			<div class="inp"><input type="text" name="judgeid"></div>
			<div></div>
            </div>
		<div class="inputrow">
			<div class="field">Judge Name:</div>
			<div class="inp"><input type="text" name="jname"></div>
			
		<div></div>
		</div>
		<div class="inputrow">
			<div class="field">Password:</div>
			<div class="inp"><input type="password" name="pwd"></div>
			<div></div>
		</div>
		<div class="inputrow">
			<div class="field">Confirm Password:</div>
			<div class="inp"><input type="password" name="cpwd"></div>
			<div></div>
		</div>
		
	</fieldset>
	<div class="inputrow">
			<div class="field">Judge type:</div>
			<div class="inp">
				<select name="judgetype">
					<option>civil</option>
					<option>municipal</option>
                    <option>megistrate</option>
                    <option>administatrive</option>

				</select>
			</div>
	<input type="submit" name="submit" value="submit">
	<input type="password" name="pwd"  required placeholder="password"><br><br>

        </div>
	</form>
</body>
</html>