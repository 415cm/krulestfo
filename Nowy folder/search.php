<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles3.css">
</head>
<body>
<div class="topnav">
  
  
	<h3 class="logo">Bibliometr</h3>
	<a class="active" href="wyszukiwarka.html">Wyszukiwarka</a>
  <div class="topnav-right">
  <a href="stronaglowna.html">Strona główna</a>
    <a href="osystemie.html">O systemie</a>
    <a href="kontakt.html">Kontakt</a>
  </div>
</div>
<?php
$sql = "SELECT * FROM artikel WHERE ";
$titel="";
$autor1="";
$autor2="";
if(isset($_POST['submit'])){
    $search_titel="";
    if(isset($_POST['titel'])&& $_POST['titel'] != ""){
        $titel= $_POST['titel'];
        $search_titel=" AND (titel LIKE '%$titel%')";
    }
    $search_autor1="";
    if(isset($_POST['autor1'])&& $_POST['autor1'] != ""){
        $autor1= $_POST['autor1'];
        $search_autor1=" AND (autor1 LIKE '%$autor1%')";
    }
    $search_autor2="";
    if(isset($_POST['autor2'])&& $_POST['autor2'] != ""){
        $autor2= $_POST['autor2'];
        $search_autor2=" AND (autor2 LIKE '%$autor2%')";
    }
    $search_autor3="";
    if(isset($_POST['autor3'])&& $_POST['autor3'] != ""){
        $autor3= $_POST['autor3'];
        $search_autor3=" AND (autor3 LIKE '%$autor3%')";
    }
    $search_author1prozent="";
    if(isset($_POST['$author1prozent'])&& $_POST['$author1prozent'] != ""){
        $$author1prozent= $_POST['$author1prozent'];
        $author1prozent=" AND (author1prozent LIKE '%$$author1prozent%')";
    }
    $search_autor2prozent="";
    if(isset($_POST['$autor2prozent'])&& $_POST['$autor2prozent'] != ""){
        $autor2prozent= $_POST['$autor2prozent'];
        $search_autor2prozent=" AND (autor2prozent LIKE '%$$autor2prozent%')";
    }
    $sql = "SELECT * FROM artikel WHERE id > 0".$search_titel.$search_autor1;
    echo $sql;
    echo $_POST['titel'];
}
?>

<div class="login-page">
	<div class="form">
	<h1>Wyszukiwarka artykułów</h1>
    <form class="search-form"method="POST" action="wyniki.php">
      <input type="text" name ="titel"placeholder="Tytuł"/>
	  <input type="text" name="autor1" placeholder="Autor"/>
	  <input type="text" placeholder="Data publikacji"/>
	  <input type="text" placeholder="Czasopismo"/>
	  <input type="text" placeholder="Konferencja"/>
      <p class="message">* Opcjonalny wybór filtra</p>
      <input type="submit" name="submit" value="Submit">
      
      
    </form>
 </div>
  </div>

</body>
</html>