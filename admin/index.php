<?php
	require '../core/init.php';

	if (isset($_SESSION['admin_logged_in'])) {
		// If admin login exists, show dashboard.
		?>
			<!DOCTYPE html>
			<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>Yo! CMS - Dashboard</title>
				</head>
				<body>
					Hello <?php echo $_SESSION['admin_username']; ?>!

					<a href="logout.php">Logout</a>
				</body>
			</html>
		<?php
	} else {
		// If not, ask for login.
		?>
		
			<!DOCTYPE html>
			<html lang="en">
				<head>
					<meta charset="UTF-8">
					<title>Yo! CMS - Login</title>
				</head>
				<body>
					Please Log in.

					<?php 
			
						if (isset($_POST['login_submit'])) {
							$username = $_POST['login_username'];
							$password = $_POST['login_password'];

							if (!empty($username) && !empty($password)) {
								$password = hash("ripemd160", $password);

								$verify = yo_admin_user_verify($username, $password);

								if ($verify == "ok") {
									$_SESSION['admin_logged_in'] = true;
									$_SESSION['admin_username'] = $username;

									header("Refresh:0");
								} else if ($verify == "user not found") {
									echo "That user cannot be found!";
								} else {
									echo "Incorrect Password!";
								}
							} else {
								echo "Both fields are required!";
							}
						}
					?>

					<form method="post">
						<input type="text" id="login_username" name="login_username" placeholder="Username">
						<input type="password" id="login_password" name="login_password" placeholder="Password">
						<input type="submit" id="login_submit" name="login_submit" value="Login">
					</form>
				</body>
			</html>

		<?php
	}
?>