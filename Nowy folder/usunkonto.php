<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliometr";
$conn = new mysqli ($servername, $username, $password, $dbname);
	global $conn;
	$sql = "DELETE FROM `benutzer` WHERE `id` =".$_GET['id'];
	$result = $conn -> query($sql);
	header('location: panel.php');
exit;
?>