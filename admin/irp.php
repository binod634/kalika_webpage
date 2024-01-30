<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		h1 {
			text-align:center;
		}
	</style>
	<script>
		function abc() {
			alert("You completed inputting result");
			//window.location.replace("../chk.php");
		}
	</script>
	<title></title>
</head>
<body onload="abc()">
<?php
$cookieadminuser = file_get_contents("../s3cUr3adminuser");
$cookieadminpass = file_get_contents("../s3cUr3adminpass");
if (($_COOKIE["user"] == preg_replace('/\s+/', '', $cookieadminuser)) and ($_COOKIE["pass"] == preg_replace('/\s+/', '', $cookieadminpass))) {
        // nothing to do crediential is correct for admin user
}
else {
        header("Location:../home.php");
}
$name = $_POST['bname'];
$symbol = $_POST['bsym'];
$percentage = $_POST['bper'];
$position = $_POST['bpost'];
if (0==file_exists('upload_result'))	{
	mkdir('upload_result');
}
chdir('upload_result');
echo "all value";
echo "name: ".$name;
echo "<br>try name:   ".$_POST['bname'];
if (0==file_exists($symbol)) {
	mkdir($symbol);
}
chdir($symbol);
file_put_contents("name.txt",$name);
file_put_contents("percentage.txt",$percentage);
file_put_contents("position.txt",$position);
if(isset($_FILES['image'])){
        $errors= array();
        $file_name = "image.jpg";
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        $extensions= array("jpeg","jpg","png");
        if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        if($file_size > 2097152){
                $errors[]='File size must be excately 2 MB';
        }
        if(empty($errors)==true){
                move_uploaded_file($file_tmp,$file_name);
                echo "<h1>You Completed inputting result !!!</h1>";
        }else{
                print_r($errors);
      }
   }
?>
</body>
</html>
