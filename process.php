<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
	header("Location: login.php");
	exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$file = 'messages.txt';
$current = file_get_contents($file);
$current .= "Name: " . $name . "\nEmail: " . $email . "\nMessage: " . $message . "\n\n";
file_put_contents($file, $current);

// Show the details of all messages in the file
$messages = file_get_contents($file);
$messages = explode("\n\n", $messages);
$messages = array_reverse($messages);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thank You</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h2>Thank You</h2>
		<p>Your message has been received.</p>
		<h3>All Messages:</h3>
		<ul>
			<?php foreach ($messages as $message): ?>
				<?php if (!empty($message)): ?>
					<li><?php echo nl2br($message); ?></li>
				<?php endif; ?>
			<?php endforeach; ?>
		</ul>
	</div>
</body>
</html>
