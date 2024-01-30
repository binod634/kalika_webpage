<html>
<body>
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

</body>
<html>
