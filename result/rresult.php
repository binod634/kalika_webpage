<!DOCTYPE html>
<html>
<head>
<style>
h1 {
	text-align:center;
font-family:cursive;
color: #5680e9;
}
p {
	color:red;
font-size: 30px;
font-family: forte;
}
body {
background-color:#ecf0f1;
font-family:  Comic Sans MS;
}
table {height: auto;
	width: auto;
	text-align: center;
	margin: auto;
	border-color:  #2ecc71;
border-style:ridge;
border-width: 8px;
}
td
{
	border: none;
}
</style>
	<title></title>
</head>
<body>
<h1> RESULT </h1>
<table border='2'>
	<tr>
		<td>
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
			$symbol = $_POST['bsym'];
			chdir("../admin/upload_result");
			if (0==file_exists($symbol))	{
			echo "No data found.The result for this symbol number is not inserted";
			}
			else {
				chdir($symbol);
				echo "NAME: ";
				echo file_get_contents("name.txt");
				echo "<br>PERCENTAGE: ";
				echo file_get_contents("percentage.txt");
				echo "<br>POSITION: ";
				echo file_get_contents("position.txt");
				echo "<br>";
				echo "<img src='../admin/upload_result/";
				echo $symbol;
				echo "/image.jpg'>";
			}
			?>
		</td>
	</tr>
</table>
</body>
</html>
