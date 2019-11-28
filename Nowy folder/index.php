
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles.css">
</head>
<body>
<div class="topnav">
  
  
	<h3 class="logo">Bibliometr</h3>
  <div class="topnav-right">
  <a class="active" href="index.php">Strona główna</a>
    <a href="osystemie.html">O systemie</a>
    <a href="kontakt.html">Kontakt</a>
  </div>
</div>

<div class="login-page">
	<div class="form">
	<h1>Witaj w systemie Bibliometr</h1>
    <h3>Odkrywaj naukę</h3>
    <?php
    session_start();
if(isset($_SESSION['login']))
{
    echo"<button><a href='wyniki.php'>Przeglądaj</a></button>";
    
}else{
    echo "<button><a href='logowanie.php'>Zaloguj się</a></button>
    <button><a href='rejestracja.php'>Zarejestruj się</a></button>
    <button><a href='wyniki.php'>Przeglądaj jako gość</a></button>";
}
?>

	
  </div>

</body>
