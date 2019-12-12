<?php // continue.php
session_start();
if (isset($_SESSION['login']))
{
$username = $_SESSION['login'];
echo "
Twój login to '$username'";
header("wyniki.php");
}
else echo "<a href='authenticate2.php'>Kliknij tutaj</a>, aby się zalogować.";
?>