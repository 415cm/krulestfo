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
$autor3="";
$author1prozent="";
$autor2prozent="";
$autor3prozent="";
$veroffentlich="";
$zeitschrift="";
$konferenz="";
$doi="";
$impactfactor="";
$beschreib="";
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
    if(isset($_POST['author1prozent'])&& $_POST['author1prozent'] != ""){
        $$author1prozent= $_POST['$author1prozent'];
        $author1prozent=" AND (author1prozent LIKE '%$author1prozent%')";
    }
    $search_autor2prozent="";
    if(isset($_POST['autor2prozent'])&& $_POST['autor2prozent'] != ""){
        $autor2prozent= $_POST['$autor2prozent'];
        $search_autor2prozent=" AND (autor2prozent LIKE '%$autor2prozent%')";
    }
    $search_autor3prozent="";
    if(isset($_POST['autor3prozent'])&& $_POST['autor3_prozent'] != ""){
        $autor3prozent= $_POST['autor3prozent'];
        $search_autor3prozent=" AND (autor3prozent LIKE '%$autor3prozent%')";
    }
    if(isset($_POST['veroffentlich'])&& $_POST['veroffentlich'] != ""){
        $veroffentlich= $_POST['veroffentlich'];
        $search_veroffentlich=" AND (veroffentlich LIKE '%$veroffentlich%')";
    }
    if(isset($_POST['zeitschrift'])&& $_POST['zeitschrift'] != ""){
        $zeitschrift= $_POST['zeitschrift'];
        $search_zeitschrift=" AND (veroffentlich LIKE '%$zeitschrift%')";
    }
    if(isset($_POST['konferenz'])&& $_POST['konferenz'] != ""){
        $konferenz= $_POST['konferenz'];
        $search_konferenz=" AND (konferenz LIKE '%$konferenz%')";
    }
    if(isset($_POST['doi'])&& $_POST['doi'] != ""){
        $doi= $_POST['doi'];
        $search_doi=" AND (doi LIKE '%$doi%')";
    }
    if(isset($_POST['impactfactor'])&& $_POST['impactfactor'] != ""){
        $impactfactor= $_POST['impactfactor'];
        $search_impactfactor=" AND (impactfactor LIKE '%$impactfactor%')";
    }
    if(isset($_POST['beschreib'])&& $_POST['beschreib'] != ""){
        $beschreib= $_POST['beschreib'];
        $search_beschreib=" AND (beschreib LIKE '%$beschreib%')";
    }
    $sql = "SELECT * FROM artikel WHERE id > 0".$search_titel.$search_autor1.$search_autor2.$search_autor3.$search_author1prozent.$search_autor2prozent.$search_autor3prozent.$search_veroffentlich.$search_zeitschrift.$search_konferenz.$search_doi.$search_impactfactor.$search_beschreib;
    echo $sql;
    echo $_POST['titel'];
}
?>

<div class="login-page">
	<div class="form">
	<h1>Wyszukiwarka artykułów</h1>
    <form class="search-form"method="post" action="wyniki.php">
      <input type="text" name ="titel"placeholder="Tytuł"/>
	  <input type="text" name="autor1" placeholder="Autor"/>
	  <input type="date" name="veroffentlich" placeholder="Data publikacji"/>
	  <input type="text" name ="zeitschrift" placeholder="Czasopismo"/>
      <input type="text" name="doi" placeholder="DOI"/>
      <input type="text" name="impactfactor" placeholder="Impactfactor"/>
      <input type="text" name= "konferenz" placeholder="Konferencja"/>
      <input type="text" name="beschreib" placeholder="Opis"/>
      <input type="submit" name="submit" value="Submit">
      
      
    </form>
 </div>
  </div>

</body>
</html>