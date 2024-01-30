<!DOCTYPE html>
<html>
<head>
	<title>Input Database</title>
	<style type="text/css">
		body {
		background size :cover;
		}
		h1 {
			text-align:center;
		}
		table {
border-width: 5px;
			color: #bc3a43;
				position: center;
			height: 400px;
			width: 500px;
			background-color:gray;
			margin-top:30%;
			animation-delay:1s;
		    margin-top:10%;
			margin-left: 30%;
			opacity: 65%;
			font-family: Comic Sans MS;
			font-size: 30px;
		}
		table:hover {
			color:red;
			opacity: 80%;
		}
		input.submit {
			background-color:gray;
			margin-left: 20%;
			margin-right: 20%;
			max-width: 60%;
		}
	</style>
	<script type="text/javascript">
	</script>
</head>
<body  background="../img/h-w.webp">
	<form action="ihp.php" method="post" enctype="multipart/form-data">
			<table border="3">
			<tr>
				<td>
					<b>Class:</b>
				</td>
				<td>
					<select  name="class">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<b>Section:
				</td>
				<td>
					<select name="section">
						<option>A</option>
						<option>B</option>
						<option>C</option>
						<option>D</option>
						<option>E</option>
						<option>F</option>
						<option>G</option>
						<option>H</option>
						<option>I</option>
						<option>J</option>
						<option>K</option>
						<option>L</option>
						<option>M</option>
						<option>N</option>
						<option>O</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<b>Date:</b>
				</td>
				<td>
					<b><input type="date"  name="bdate" required></b>
				</td>
			</tr>
			<tr>
				<td>
					<b>Subject</b>
				</td>
				<td>
					<select name="subject">
						<option>english</option>
						<option>hp</option>
						<option>math</option>
						<option>nepali</option>
						<option>obte</option>
						<option>o.math</option>
						<option>science</option>
						<option>social</option>
					</select>
				</td>
			</tr>
			<tr>
				<td rowspan="2">
					<b>Homework:<b>
				</td>
				<td>
					<input type="text" placeholder="Homework title" name="hwtitle" required>
				</td>
			</tr>
			<tr>
				<td>
					<input type="file" name="image">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Submit" class="submit">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
