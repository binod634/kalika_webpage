<!DOCTYPE html>
<html>
<head>
<style>
h1 {
	text-align:center;
font-family:cursive;
color:#5680e9;
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
<h1> Homework</h1>
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
			$date = $_POST['bdate'];
			$sec = $_POST['bsec'];
			$class = $_POST['bclass'];
			$sub = $_POST['bsub'];
			chdir("../admin/upload_hw");
			if (0==file_exists($class))	{
				echo "NO DATA FOUND";
			}
			else {
				chdir($class);
				if(0==file_exists($sec)) {
					echo "The class or section on input doesnot exist on database!!";
				}
				else {
					chdir($sec);
					if (0==file_exists($sub)) {
						echo "This database contain no Homework for this subject. Please confirm the appropriate input of data.  : ";
						echo $sub;
					}
					else {
						chdir($sub);
						if(0==file_exists($date)) {
							echo "No homework was submitted for the corresponding date.Consider self studying.: ";
						}
						else {
							chdir($date);
							echo "Homework-Topic: <p>";
							echo  file_get_contents("hwtitle.txt");
							echo "<br>";
							echo "<img src='../admin/upload_hw/";
							echo $class;
							echo "/";
							echo $sec;
							echo "/";
							echo $sub;
							echo "/";
							echo $date;
							echo "/";
							echo "image.jpg'>";
							echo "</p>";
						}
					}
				}
			}
			?>
		</td>
	</tr>
</table>
</body>
</html>
