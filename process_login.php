<?php
session_start();

$username = "admin";
$password = "password";

if (isset($_POST['username']) && isset($_POST['password'])) {
	if ($_POST['username'] == $username && $_POST['password'] == $password) {
		$_SESSION['logged_in'] = true;
		header("Location: index.php");
		exit();
	} else {
		$error_message = "Invalid username or password";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Admin Login</h2>
		<form method="post" action="process_login.php">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			
			<button type="submit">Login</button>
		</form>
		<?php if (isset($error_message)): ?>
			<p><?php echo $error_message; ?></p>
		<?php endif; ?>
	</div>
</body>
</html>
