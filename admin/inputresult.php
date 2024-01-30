<!DOCTYPE html>
<html>
<head>
	<title>ADMIN ENTRY</title>
	<style type="text/css">
		h1 {
			text-align:center;
			color:red;
		}
		body {
                        height: 100%;
                        background-position: revert;
                        background-repeat: no-repeat;
                        background-size: cover;
		}
		input {
			background-color:gray;
			text-align: center;
			margin:auto;
		}
		input.submit {
			font-size: 20px;
 		 	font-weight: bold;
			font-family: inherit;
			color: black;
		}
		table {
			margin-left:500px;
			border-color:black;
			background-color:gray;
		}
	</style>
</head>
<body background="../img/resultinp.png">
<h1>Input Result </h1>
 <form action="irp.php" method="post" enctype="multipart/form-data">
	<table border="5">
		<tr>
			<td>
				Name:
			</td>
			<td>
				<input type="text" name="bname" required>
			</td>
		</tr>
		<tr>
		<td>
			Symbol no:
		</td>
		<td>
			<input type="number" name="bsym" required>
		<tr>
			<td>
				Percentage:
			</td>
			<td>
				<input type="number" id="bper" name="bper" required>
			</td>
		</tr>
		<tr>
			<td>
				Position:
			</td>
			<td>
				<input type="number" name="bpost" required>
			</td>
		</tr>
		<tr>
			<td>
				Image:
			</td>
			<td>
				<input type="file" name="image">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" class="submit"  id="bsub">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
