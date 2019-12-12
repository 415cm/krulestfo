<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles5.css">
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
  <select class="selectBox">
  <option>Użytkownik</option>
  <option><a href="mojprofil.html">Mój profil</a></option>
  <option><a href="mojeartykuly.html">Moje artykuły</a></option>
  <option><a href="ustawienia.html">Ustawienia</a></option>
  <option><a href="wyloguj.html">Wyloguj</a></option>
</select>
</div>

  

	
<div class="login-page">
	<div class="form">
    <h1>Dodaj nowy artykuł</h1>
    <?php
    if(isset($_SESSION['login'])){
    require 'conn.php';
    echo"
    <form class='search-form' action='adding.php' method='post'>
      <input type='text' name='titel' placeholder='Tytuł'/>
      <input type='text' name='autor1' class='autor1' placeholder='Autor1'/>
	  <input type='text' name='autor2' class='autor2' placeholder='Autor2'/>
	  <input type='text' name='autor3' class='autor3' placeholder='Autor3'/>
	  <input type='text' name='author1prozent' placeholder='% udziałów Autora1'/>
	   <input type='text' name='autor2prozent' placeholder='% udziałów Autora2'/>
	    <input type='text' name='autor3prozent' placeholder='% udziałów Autora3'/>
	  <input type='date' name='veroffentlich' placeholder='Data publikacji'/>
	  <input type='text' name='zeitschrift' placeholder='Czasopismo'/>
	  <input type='text' name='konferenz' placeholder='Konferencja'/>
	  <input type='text' name='doi' placeholder='DOI'/>
	  <input type='text' name='impactfactor' placeholder='Impact Factor'/>
	   <input type='text' name='beschreib' placeholder='Opis'/>
       <input type='submit' value='dodaj' name='submit'>
      
    </form>";
  }else{
    echo "zaloguj sie";
  }
    ?>

 </div>
  </div>
 
 </div>

  </div>

</body>
</html>