<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibliometr";
$conn = new mysqli ($servername, $username, $password, $dbname);
    require "conn.php";
    global $conn;
    $sql = "SELECT passw, typ, namee, vorname FROM benutzer WHERE email = '".$_POST['email']."'";
    $result = $conn->query($sql);
    $rows = $result->num_rows;
    $result->data_seek(0);
    $row = $result->fetch_array(MYSQLI_NUM);
    if(!password_verify($_POST['passw'],$row[0])){
        echo "niedziala";
    }else{
        echo "zalogowano";
        session_start();
        $_SESSION['login'] = $_POST['email'];
        $_SESSION['id'] = $row[1];
        $_SESSION['namee']=$row[2];
        $_SESSION['vorname']=$row[3];
        header("Location: wyniki.php");
    }
    ?>