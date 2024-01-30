<html>
<head>
<style>
	table {
		align-content: center;
		align-items: center;
		align-self: center;
		margin-left: 39%;
		width: 26%;
		margin-right: 39%;
		text-align:center;
		background-color: #5680e9;

	}
	body {
	       	background-size: cover;
		background-repeat: no-repeat;
	}

	input.sub:hover{
		background-color:red;
		color:blue;
	}
</style>
<title> EXAM RESULT </title>
</head>
<body background="../img/examres.jpg">
<?php
$cookieguestuser = file_get_contents("../s3cUr3guestuser");
$cookieguestpass = file_get_contents("../s3cUr3guestpass");
$cookieadminuser = file_get_contents("../s3cUr3adminuser");
$cookieadminpass = file_get_contents("../s3cUr3adminpass");
if (($_COOKIE["user"] == preg_replace('/\s+/', '', $cookieadminuser)) and ($_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieadminpass))) {
        // nothing to do crediential is correct for admin user
}
else if (($_COOKIE["user"] == preg_replace('/\s+/', '', $cookieguestuser)) and ($_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieguestpass))) {
        // nothing to do crediential is correct for guest user
}
else {
        header("Location:../home.php");
}
?>
<form action='rresult.php' method='post'>
	<table border='2'>
		<tr>
			<td>
				Symbol number:
			</td>
			<td>
				<input type="number" name="bsym" required>
			</td>
		</tr>
		<tr>
			<td colspan='2'>
				<input type="submit" value="Get result" class='sub'>
			</td>
		</tr>
	</table>
</form>
</body>
</html>
