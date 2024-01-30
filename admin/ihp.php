<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		h1 {
			text-align:center;
			color:yellow;
		}
		body {
                        height: 100%;
                        background-position: revert;
                        background-repeat: no-repeat;
                        background-size: cover;
	}
	</style>
	<script>
		function abc() {
			alert("You completed Input process !!!");
			window.location.replace("../chk.php");
		}
	</script>
	<title></title>
</head>
<body background="../img/indexs.png" onload="abc()">
<?php
$cookieadminuser = file_get_contents("../s3cUr3adminuser");
$cookieadminpass = file_get_contents("../s3cUr3adminpass");
if (($_COOKIE["user"] != preg_replace('/\s+/', '', $cookieadminuser)) and ($_COOKIE["pass"] != preg_replace('/\s+/', '', $cookieadminpass))) {
        // nothing to do crediential is correct for admin
        header("Location:../home.php");
}
$section = $_POST['section'];
$bclass = $_POST['class'];
$bdate = $_POST['bdate'];
$hwtitle = $_POST['hwtitle'];
$subject = $_POST['subject'];
chdir("upload_hw");
if (0==file_exists($bclass))	{
	mkdir($bclass);
}
chdir($bclass);
if (0==file_exists($section)) {
	mkdir($section);
}
chdir($section);
if (0==file_exists($subject)) {
	mkdir($subject);
}
chdir($subject);
if (0==file_exists($bdate)) {
	mkdir($bdate);
}
chdir($bdate);
file_put_contents("hwtitle.txt",$hwtitle);
if(isset($_FILES['image'])){
	$errors= array();
	$file_name = "image.jpg";
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	$extensions= array("jpeg","jpg","png","phtml");
	if(in_array($file_ext,$extensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}
	if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
	}
	if(empty($errors)==true){
		move_uploaded_file($file_tmp,$file_name);
	}else{
		print_r($errors);
      }
   }
?>
</body>
</html>
