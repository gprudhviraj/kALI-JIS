<html>
<head>
	<title>home page</title>
    <style>
    body {
    background: url(942.jpg);
    background-size: 100% 100%;
    text-align:center
    }
   input[type="text"],input[type="password"]{
	padding:12px 20px;
    width:100%;
    box-sizing:border-box;
    border:none;
    background:transparent;
    border:1px solid dodgerblue;
    
}
input[type="submit"]
{
    border-radius:10px;
    width:100px;
   background-color:dodgerblue;
	margin-top: 30px;
}
    </style>
    <script>
    function preventBack() {window.history.forward() ; }
    setTimeout("preventBack()", 0) ;
    window.onunload=function() {null};
    </script>
</head>
<body>
<div style="border: solid 1px blue;
	width: 400px;
	float: none;
    margin-top:100px;
    padding:30px 50px;
	border-radius: 30px;
	background: white;">
<form action="homesql.php" method="post">
	<input type="text" name="user" placeholder="username" required>
	<br>
    <br>
	<input type="password" name="password"  placeholder="password" required>
	<br>
    <br>
	<label>Type:
		<input type="radio" name="type" value=1 >Judge
		<input type="radio" name="type" value=2>Lawyer
		<input type="radio" name="type" value=3>Registrar
		<input type="radio" name="type" value=4 checked>Admin
	</label><br>
	<input type="submit" name="submit" value="login">
</form>
</div>
</body>
</html>