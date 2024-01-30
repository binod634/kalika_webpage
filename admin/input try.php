<!DOCTYPE html>
<html>
<head>
	<title>Select input type</title>
	<style type="text/css">
		h1.top {
			text-align:center;
			color:#AA00FF;
			font-family:  Comic Sans MS;
		}
		body {
			height: 100%;
			background-position: revert;
			background-repeat: no-repeat;
			background-size: cover;
		}
		p {
			color:transparent;
			text-align:center;
		}
		input {border-radius: 25%;
			font-weight:bold;
			padding-right:80px;
			padding-left:80px;
			padding-bottom:40px;
			padding-top:40px;
			margin-left: 22%;
			margin-top:5%;
		}
		input.f {
			background-color:#ffff4d;
			font-family: Franklin Gothic Medium;
		}
		input.f:hover {
			background-color: #cccc00;
		transition:1s;
		
		width:20%;
		}
		input.s {
			background-color:#D6D02C;
		font-family: Lucida Console;
		}
		input.s:hover {
			background-color: #cca300;
		transition:1s;
		
		width:20%;
		}
	</style>
</head>
<body background="../img/bg1.gif">
	<h1 class="top"> Please select the type of input.</h1>
	<input type="Button" onclick="location.href = 'inputhomework.php';" value="HOMEWORK" class="f">
	<input type="button" onclick="location.href = 'inputresult.php';" value="RESULT" class="s"><br>
	<p> ROOT/ADMIN User should be always aware of the security and potencial disaster occured due to their small mistake... </p>
</body>
</html>
