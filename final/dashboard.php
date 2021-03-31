<?php 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages 
?>
<?php
if($_SESSION["username"] == 'admin'){
	header("Location: view.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to the Dashboard</p>
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>
