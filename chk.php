<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p {
			margin-top:250px;
		}
		h1 {
			  margin:auto;
			  color:green;
			  text-align:center;
		}
		h2 {
			margin:auto;
			text-align:center;
			color:yellow;
		}
		body {
			background-color:black;
		}
		audio {
			color:black;
			background-color:black;
		}
	</style>
	<title>Kalika Student Database</title>
</head>
<body onload="typewriterf()">
	<p></p><b>
<h1 id="type1"></h1>
<h2 id="type2"></h2>
</b>
<script>
var i = 0;
var i1 =0 ;
var txt = "ACCESS DENITED";
var txt1 = "Your username or password is incorrect";
var speed = 150;
var speed1 = 100;
var flbspd = 5000;
function typewriterf() {
  if (i < txt.length) {
    document.getElementById("type1").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typewriterf, speed);
  }
  else {
  	typewriters();
  }
}
function typewriters() {
	if (i1 < txt1.length) {
		document.getElementById("type2").innerHTML += txt1.charAt(i1);
		i1++;
		setTimeout(typewriters,speed1);
	}
	else {
		setTimeout(fallback,flbspd);
	}
}
function fallback() {
	window.location.replace("./index.php");         // change page to back
}
</script>
<audio controls autoplay="true" style="display:none">
  <source src="voice/ad.mp3">
</audio>
<?php
$cookieguestuser = file_get_contents("s3cUr3guestuser");
$cookieguestpass = file_get_contents("s3cUr3guestpass");
$cookieadminuser = file_get_contents("s3cUr3adminuser");
$cookieadminpass = file_get_contents("s3cUr3adminpass");
if (( $_COOKIE["user"] == preg_replace('/\s+/', '', $cookieguestuser) ) and ($_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieguestpass))) {
	setcookie($cookie_nameuser, $cookie_valueuser, time() + (3600), "/");
	setcookie($cookie_namepass, $cookie_valuepass, time() + (3600), "/");
 	header("Location:guest/homeguest.php");
}
else if (($_COOKIE["user"] == preg_replace('/\s+/', '', $cookieadminuser)) and ( $_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieadminpass))) {
	setcookie($cookie_nameuser, $cookie_valueuser, time() + (3600), "/");
	setcookie($cookie_namepass, $cookie_valuepass, time() + (3600), "/");
	header("Location:admin/homeadmin.php");
}
else {
	soundex("voice/ad.mp3");
	// nothing for you to do here except the owner (binod kandel).
}

?>

</body>
</html>
