<?php
session_start();

if(!$_SESSION['sid'])
{
	header("location:contact1.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome</h1>

	<h1><a href="logout.php">Logout here</a></h1>

</body>
</html>