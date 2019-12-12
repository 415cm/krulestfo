<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles4.css">
</head>
<body>
<div class="topnav">
<?php
  session_start();
  if (isset($_SESSION['login']))
  {
  $username = $_SESSION['login'];
  echo "
  Zalogowano '$username'<br>
  <a href='logout.php'> Wyloguj</a>";
  }else{
    echo "<a href='logowanie.php'>zaloguj sie</a>";
  }
  ?>
  
	<h3 class="logo">Bibliometr</h3>
	<a href="search.php">Wyszukiwarka</a>
  <div class="topnav-right">
  <a href="index.php">Strona główna</a>
    <a href="osystemie.html">O systemie</a>
    <a href="kontakt.html">Kontakt</a>
  </div>
</div>

<div class="login-page">

	
	<div class="form">
	
	<!--
    <form class="search-form">
      <input type="text" placeholder="Wyszukaj artykuł..."/>
      <input type="text" placeholder="Tytuł"/>
	  <input type="text" placeholder="Autor"/>
	  <input type="text" placeholder="Data publikacji"/>
	  <input type="text" placeholder="Czasopismo"/>
	  <input type="text" placeholder="Konferencja"/>
      <button>Szukaj</button>
      <p class="message">* Opcjonalny wybór filtra</p>
    </form>
 -->
 
 
<?php
    require 'conn.php';
    $namee=$_GET['autor1'];
    $sql = "SELECT * FROM artikel WHERE autor1='$namee'";
    $result=$conn->query($sql);
    echo "<div class='art'>
    <h1><a href='autor.html'>".$namee."</a></h1>
    <h3>Publikacje autora</h3>";
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
    echo"
<a href='readarticle.php?id=".$row['id']."'>".$row['titel']."</a>
 <p>Data publikacji</p>
 <p>DOI</p>
 <p>Opis artykułu</p>";}}
 ?>
  </div>
 </div>

  </div>

</body>
</html>