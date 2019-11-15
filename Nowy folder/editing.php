<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliometr";
$conn = new mysqli ($servername, $username, $password, $dbname);
if (isset($_POST['titel'])){
    global $conn;
    //$sql = "UPDATE artikel SET titel='".$_POST['titel']."' WHERE id='".$_POST['id']."'";
//$sql = "UPDATE 'artikel' SET 'titel'='".$_POST['titel']."' WHERE 'id'='".$_POST['id']."'";
    $sql = "UPDATE artikel SET titel='".$_POST['titel']."', autor1='".$_POST['autor1']."', autor2='".$_POST['autor2']."', autor3='".$_POST['autor3']."', author1prozent='".$_POST['author1prozent']."', autor2prozent='".$_POST['autor2prozent']."', autor3prozent='".$_POST['autor3prozent']."', zeitschrift='".$_POST['zeitschrift']."', konferenz='".$_POST['konferenz']."', doi='".$_POST['doi']."', impactfactor='".$_POST['impactfactor']."', beschreib='".$_POST['beschreib']."' WHERE id ='".$_POST['id']."'";
    $result = $conn->query($sql);
    header('location: wyniki.php');
}
?>