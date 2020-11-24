<?php
	session_start();

	//unset($_SESSION['name']);

	session_destroy();
	
?>

<html>
<head>
	<title>Destroy Session</title>
</head>
<body>
<h1>Session Destroyed!</h1>
<a href="page3.php">Return to page 3</a>
</body>
</html>