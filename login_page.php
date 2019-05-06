<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="globalStyle.css">
	<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<title></title>
</head>
<body>
	<div class="wrapper">
	<h1>Login</h1>

	<?php
	if (isset($_GET['error'])){
		if ($_GET['error']=="noaccess") {
			echo "<h4>Error: Login with admin account</h4>";
		}else if ($_GET['error']=="userorpwd") {
			echo "<h4>Error: You have entered a wrong username or password</h4>";
		}elseif ($_GET['error']=="emptyfields") {
			echo "<h4>Error: You have left fields empty</h4>";
		}
}
	?>

	<form action="../CateringApp/loginCon.php" method="post">
		<input type="text" name="userid" placeholder="Username">
		<input type="password" name="pwd" placeholder="Password">
		<button type="submit" name="login-submit">Login</button>
	</form>

</div>
</body>
</html>