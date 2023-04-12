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
		<form method="post" action="login.php">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			
			<button type="submit">Login</button>
		</form>
	</div>
</body>
</html>
