<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles4.css">
</head>
<body>
<div class="topnav">
  
  
	<h3 class="logo">Bibliometr</h3>
	<a href="wyszukiwarka.html">Wyszukiwarka</a>
  <div class="topnav-right">
  <a href="stronaglowna.html">Strona główna</a>
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
$sql = "SELECT * FROM artikel WHERE id > 0";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
 echo"div class='art'>
 <h1><a href='artykul.html'>Tytuł artykułu 1</a></h1>
  <a href='autor.html'>Autor</a>
  <p>Opis artykułu, opisuje zawartość publikacji</p>
  <p>Data publikacji</p>
  <p>DOI</p>
  <p>Opis artykułu</p>
  </div>
 ";?>
 
 
 
 
 <buttons">

 <button><a href="pobierz.html" class="button2">Pobierz</a></button>
 </div>
 
 </div>

  </div>

</body>
</html>