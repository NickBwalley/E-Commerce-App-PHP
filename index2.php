<?php
	include('functions.php');
	if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: login.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin HomePage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2> ADMIN Home-Page</h2>
	</div>
	<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
		<div class="profile_info">
			<img src="images/admin2.png"  >

			<div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
						<br>

						<a href="admviewusers.php" style="color: blue;"> + View Registered Users</a><br/>
						<a href="admdashboard.php" style="color: blue;"> + Admin-Dashboard</a><br/>
						<a href="logout.php" style="color: red;"> + logout</a>
					</small>

				<?php endif ?>
			</div>
		</div>
	</div>
</body>
</html>
