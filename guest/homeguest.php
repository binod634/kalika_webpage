
<html>
<head><title>Kalika Manavgyan Student Database</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style7.css">
<script type="text/javascript">
function abc() {
	alert("You are already in Home Page!!!");
}
function input() {
	alert("Only Admin/Root user can Input Data");
}
function result() {
	window.location.href="../result.php";
}
function logout() {
	window.location.href="../index.php";
}
function about() {
	window.location.href="../about.php";
}
</script>
</head>
<body background="../img/home.png">
<?php
$cookieadminuser = file_get_contents("../s3cUr3guestuser");
$cookieadminpass = file_get_contents("../s3cUr3guestpass");
if (($_COOKIE["user"] == preg_replace('/\s+/', '', $cookieadminuser)) and ($_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieadminpass))) {
        // nothing to do crediential is correct for admin user
}
else {
        header("Location:../home.php");
}
?>
<nav class="navbar">
    <ul>
      <li><a onclick="abc()">Home</a></li>
      <li><a onclick="input()">input</a></li>
      <li><a onclick="result()">Results</a></li>
      <li><a onclick="about()">About</a></li>
         <li><a onclick="logout()">Logout</a></li>
    </ul>
  </nav>
<h1> KALIKA STUDENT DATABASE</h1>
<span class='m'>
	
		<b>Kalika Manavgyan Secondary School was established with the motto of imparting quality education. It is well facilitated community school. We offer both general and technical education. Under general education, we have classes from Nursery to class 12. We offer class 1 to 4 fully English medium and 5 to 12 in both English and Nepali medium. We have Science, Management, Humanities, Education, Law, and Computer Engineering streams in class 11 and 12. In technical education, we offer class 9 to 12 Computer Engineering. We believe in strong base of students. So, we are conducting Kalika Montessori Programme. Now we have 5529 students. We are maintaining well balance between both quantity and quality. Kalika Manavgyan Secondary School is also recognized as Model Community School by Government of Nepal. We are able to establish Kalika Manavgyan as International School as it has been awarded "AN INTERNATIONAL SCHOOL AWARD 2016-19" by British Council. It is continuously standing in the first position in Nepal in technical SLC and SEE (2071 to 2074). Now, in general also we have got first position in Nepal (2073) and National Third Position in 2074. At last, we would like to request you to visit Kalika Manavgyan Secondary School. We are always wishing to welcome you here.</b>
	

</span>

</body>
</html>
