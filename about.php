<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		p {
			margin-right:10%;
		}
		h1 {font-family: Comic Sans MS;
			  margin:auto;
			  color:#0000ff;
			  font-weight:bold;
			  font-size:45px;
			  text-align:center;
		}
		h2.f {font-family: Lucida Console;
			margin:auto;
			text-align:center;
			color:#ff0000;
		}
		h2.s {font-family: Lucida Console;
			margin:auto;
			text-align:center;
			color:#ffff00;
		}
		h2.txt {
			margin:auto;
			color:white;
			text-align:center;
		}

		body {
			background-color:#000000;
		}
	</style>
	<title>Kalika STD</title>
</head>
<body onload="typewritertitle()">
<?php
$cookieguestuser = file_get_contents("s3cUr3guestuser");
$cookieguestpass = file_get_contents("s3cUr3guestpass");
$cookieadminuser = file_get_contents("s3cUr3adminuser");
$cookieadminpass = file_get_contents("s3cUr3adminpass");
if (($_COOKIE["user"] == preg_replace('/\s+/', '', $cookieadminuser)) and ($_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieadminpass))) {
        // nothing to do crediential is correct for admin user
}
else if (($_COOKIE["user"] == preg_replace('/\s+/', '', $cookieguestuser)) and ($_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieguestpass))) {
        // nothing to do crediential is correct for guest user
}
else {
        header("Location:home.php");
}
?>
	<p></p>
	<b>
<h1 id="type"></h1>
<h2 id="type1" class="f"></h2>
<h2 id="type2" class="s"><h2>
<h2 id="type3" class="txt"></h2>
</b>
<script>
var i = 0;
var i1 =0 ;
var i2 =0;
var itxt = 0;
var txt = "Kalika Student Database Project";
var txt1 = "Leader:-Binod Kandel";
var txt2 = "--- Prabin Aryal & Munal Pandey ---";
var text = "This website is designed to promote student in learning activities through the use of IOT Device. We prefer this website to be used for intended propose only...  For more detail contact to the Team Leader(admin) of the website. Thank you !!!";         // IF YOU ARE INTERESTED. YOU CAN ADD SOME TEXT HERE WITH PERMISSION.
var speed = 170;
var speed1 = 130;
function typewritertitle() {
  if (i < txt.length) {
    document.getElementById("type").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typewritertitle, speed);
  }
  else {
  	typewriterf();
  }
}
function typewriterf() {
	if (i1 < txt1.length) {
		document.getElementById("type1").innerHTML += txt1.charAt(i1);
		i1++;
		setTimeout(typewriterf,speed1);
	}
	else {
		typewriters();
	}
}
function typewriters() {
	if (i2 < txt2.length) {
		document.getElementById("type2").innerHTML += txt2.charAt(i2);
		i2++;
		setTimeout(typewriters,speed1);
	}
	else {
		setTimeout(typewritertxt,"1100");
	}
}
function typewritertxt() {
		document.getElementById("type3").innerHTML += text;
}
</script>
</body>
</html>
