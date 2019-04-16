<!DOCTYPE html>
<html>
<head>
	<title>New Case</title>
	<link rel="stylesheet" type="text/css" href="css/newcase.css">
    <style>
    body {
        /*background-image: url(941.jpg);*/
    background: url(cf.jpg);
    background-size: 100% 100%;
    }
    </style>
    <script>
    function preventBack() {window.history.forward() ; }
    setTimeout("preventBack()", 0) ;
    window.onunload=function() {null};
    </script>
</head>
<body>
    <h1 style="color:white">FILING A CASE</h1>
	<form action="newcaseconn.php" method="post">
		<div class="inputrow">
			<div class="field">CIN:</div>
			<div class="inp"><input type="text" name="cin"></div>			
		</div>
        <div class="inputrow">
			<div class="field">Name of dependent:</div>
			<div class="inp"><input type="text" name="dname"></div>			
		</div>
		<div class="inputrow">
			<div class="field">Address:</div>
			<div class="inp"><input type="textarea" name="addr"></div>
		</div>
		<div class="inputrow">
			<div class="field">crime type:</div>
			<div class="inp">
				<select name="ctype">
					<option>civil</option>
					<option>criminal</option>
					<option>arson</option>
					<option>theft</option>

				</select>
			</div>
		</div>
		<div class="inputrow">
			<div class="field">Date of Crime Committed:</div>
			<div class="inp"><input type="date" name="datecc"></div>
		</div>
		<div class="inputrow">
			<div class="field">where committed:</div>
			<div class="inp"><input type="textarea" name="wherec"></div>
		</div>
		<div class="inputrow">
			<div class="field">Name of arresting Officer:</div>
			<div class="inp"><input type="text" name="cop"></div>
		</div>
		<div class="inputrow">
			<div class="field">Date of arrest:</div>
			<div class="inp"><input type="date" name="arrestdate"></div>
		</div>
		<div class="inputrow">
			<div class="field">Date of hearing:</div>
			<div class="inp"><input type="date" name="heardate"></div>
		</div>
		<div class="inputrow">
			<div class="field">time of hearing:</div>
			<div class="inp"><input type="time" name="heartime"></div>
		</div>
		<div class="inputrow">
			<div class="field">Expected Completion:</div>
			<div class="inp"><input type="date" name="expectc"></div>
		</div>
		<div class="inputrow">
			<div class="field"></div>
			<div class="inp"><input type="submit" name="submit" value="submit"></div>
		</div>
	</form>
</body>
</html> 