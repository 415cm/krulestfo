<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliometr";
$conn = new mysqli ($servername, $username, $password, $dbname);
    require "conn.php";
    global $conn;
    $passtemp=$_POST['passw'];
    $salt1 = "qm&h*";
    $salt2 = "pg!@";
    $token = hash('ripemd128', "$salt1$passtemp$salt2");
    echo $token;
    $sql="INSERT INTO `benutzer` (`namee`,`vorname`,`email`,`passw`,`typ`) VALUES ('".$_POST['namee']."','".$_POST['vorname']."','".$_POST['email']."','".$token."','1');";
    $result = $conn->query($sql);
    //header('location: wyniki.php');
?>