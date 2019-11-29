<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliometr";
$conn = new mysqli ($servername, $username, $password, $dbname);
	require 'conn.php';
	global $conn;
	$sql = "INSERT INTO `artikel` (`titel`, `autor1`, `autor2`, `autor3`, `author1prozent`, `autor2prozent`, `autor3prozent`, `veroffentlich`, `zeitschrift`, `konferenz`, `doi`, `impactfactor`, `beschreib`) VALUES ('".$_POST['titel']."', '".$_POST['autor1']."', '".$_POST['autor2']."', '".$_POST['autor3']."', '".$_POST['author1prozent']."', '".$_POST['autor2prozent']."', '".$_POST['autor3prozent']."', '".$_POST['veroffentlich']."', '".$_POST['zeitschrift']."', '".$_POST['konferenz']."', '".$_POST['doi']."', '".$_POST['impactfactor']."', '".$_POST['beschreib']."')";
	$result = $conn->query($sql);
    header('location: wyniki.php');
    ?>