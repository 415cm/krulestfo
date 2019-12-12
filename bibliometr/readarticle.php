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
 <div class="selectWrapper">
 <select class="selectBox" onchange="location = this.value;">
  <option><?php 
   if(isset($_SESSION['login'])){
      echo $_SESSION['login'];
   }
      ?></option>
  <option value="artmanage.php">Zarządzanie artykułami</option>
  <?php if($_SESSION['id']==2){
      echo "<option value='panel.php'>Zarządzanie użytkownikami</option>";
    }
      
      
      ?>
</select>
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
 $ajdi = $_GET['id'];
require 'conn.php';
$sql = "SELECT * FROM artikel WHERE id = $ajdi";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){
 echo"<div class='art'>
 <h1><a href='artykul.html'>".$row['titel']."</h1>
  <a href='autor.html'>Autorzy: ".$row['autor1'].",".$row['autor2'].",".$row['autor3']."</a>
  <p>Opis: ".$row['beschreib']."</p>
  <p>Data publikacji:".$row['veroffentlich']."</p>
  <p>DOI: ".$row['doi']."</p>
  </div>
 ";}}?>
 
 
 
 
 <buttons">

 <button><a href="wyniki.php" class="button2">Do wyników wyszukiwania</a></button>
 </div>
 
 </div>

  </div>

</body>
</html>