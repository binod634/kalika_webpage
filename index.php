<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <title>Login Kalika</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body style=" background-image: url(pic1.jpg); background-repeat:no-repeat;background-size:cover;">
<form class="box" action="home.php" method="post">
   <br>
    <img src="unnamed.jpg" class="user">
    <br>
  <h1>Login</h1>
  <br>
   <input  type="text"  name="username" oninvalid="this.setCustomValidity('Fill and retry ...')"   oninput="setCustomValidity('')"placeholder="Username" required="">
  <br>
   <input type="password" oninvalid="this.setCustomValidity('Fill and retry ...')"  oninput="setCustomValidity('')" name="password" placeholder="Password" required="">
  <br>
  <input type="submit" name="" value="Login">
</form>
  </body>
</html>
