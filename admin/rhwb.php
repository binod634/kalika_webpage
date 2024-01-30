<html>
<head>
<style>
h1 {
	text-align:center;
}
table {
	text-align: center;
	margin: auto;
}
</style>
	<title>Homework</title>
</head>
<body>
<h1> !!! RESULT !!! </h1>
<table border='2'>
	<tr>
		<td>
<?php
$date = $_POST['bdate'];
$sec = $_POST['bsec'];
$class = $_POST['bclass'];
$subject = $_POST['bsub'];
chdir("upload_hw");
if (0==file_exists($class)) {
	echo "YOUR CLASS DON'T EXIST IN THE DATABASE";
}
else {
	chdir($class);
}
if (0==file_exists($class)) {
	echo "YOUR SECTION DON'T EXIST IN THE DATABASE";
}
else {
	chdir($sec);
}
if (0==file_exists($sub)) {
	echo "NO DATA FOR THIS SUBJECT IS FOUND";
}
else {
	chdir($sub);
}
if (0==file_exists($date)) {
	echo "NO DATA FOR THIS DATE"
}
else {
	chdir($date);
	echo "CLASS: "$class;
	echo "SECTION: "$section;
	echo "SUBJECT: "$subject;
	echo "HOMEWORK: ";
}
?>
		</td>
	</tr>
</table>
</body>
</html>
