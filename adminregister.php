<?php include('adminfunctions.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>ADMIN REGISTRATION</h2>
</div>
<form method="post" action="adminregister.php">
  <?php echo display_error(); ?>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn2">Register</button>
	</div>
	<p>
		Login as admin? <a href="adminlogin.php">Sign in</a><br>
    login as user? <a href="login.php">Sign up</a>
	</p>
</form>
</body>
</html>
