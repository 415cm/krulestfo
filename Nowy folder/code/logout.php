
<?php
session_start();
unset($_SESSION['login']);
unset($_POST);
session_destroy();
header("Location: wyniki.php");
?>




