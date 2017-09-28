<?php session_start();
if(isset($_SESSION['username'])){
	header("location:mainpageHack.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<div class="loginForm" >
	<form method="post" action="loginActionHack.php">
		<div class="label" ><label>USERNAME</label></div>
		<div class="input" >
		<input type="text" name="uid" />
		</div>
		<div class="label" ><label>PASSWORD</label></div>
		<div class="input" >
		<input type="password" name="pass" />
		</div>
		<div class="input" >
		<input type="submit" />
		</div>
	</form>
	<button onclick="location.href='registerHack.php'" >Register</button>
</div>
</body>
</html>