<?php
	session_start();

	print_r($_SESSION);

	$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
	$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
<h1> Your Email Address is: <?php echo $email; ?></h1>
	<hr>
	<a href="page1.php">Return to page 1</a><br>
	<a href="page2.php">Return to page 2</a>
	<h1>Navigate to Page 4 to Destroy Session</h1>
	<a href="page4.php">Go to page 4</a>
</body>
</html>