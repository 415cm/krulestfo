<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles1.css">
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
    <h1>Wyniki wyszukiwania</h1>
 
 <table class="art">
 <p>Zaznacz, które pola chcesz wyeksportować</p>
 
 <!-- Checkboxy -->
	<tr>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole2"/>
	</td>
	<!--
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:80px;"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:30px;"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:100px;"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" style="word-wrap:break-word; width:30px;"/>
	</td>
	-->
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole1"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole2"/>
	</td>
	<td>
		<input id="checkid" type="checkbox" value="test" class="pole2"/>
	</td>
 </tr>
 
 <!-- Nagłówki kolumn -->
 
 <tr class="border_bottom">
	<td>
		<label for="checkid" class="pole1"/><a >Tytuł artykułu</a></label>
	</td>
	<td>
		<label for="checkid" class="pole1"/><a >Autor Nazwisko</a></label>
	</td>
	<td>
		<label for="checkid" class="pole2"/>% udziału autora1</label>
	</td>
	<!--
	<td>
		<label for="checkid"><a href="autor.html">Autor2 Nazwisko</a></label>
	</td>
	<td>
		<label for="checkid">% udziału autora2</label>
	</td>
	<td>
		<label for="checkid"><a href="autor.html">Autor3 Nazwisko</a></label>
	</td>
	<td>
		<label for="checkid">% udziału autora3</label>
	</td>
	-->
	<td>
		<label for="checkid" class="pole1"/>Opis artykułu</label>
	</td>
	<td>
		<label for="checkid" class="pole1"/>Data publikacji</label>	
	</td>
	<td>
		<label for="checkid" class="pole1"/>Czasopismo</label>	
	</td>
	<td>
		<label for="checkid" class="pole1"/>Konferencja</label>	
	</td>
	<td>
		<label for="checkid" class="pole2"/>Impact factor</label>	
	</td>
	<td>
		<label for="checkid" class="pole2"/>DOI</label>	
	</td>
  </tr>
<?php 
require 'conn.php';
$titel="";
$autor1="";
$autor2="";
$autor3="";
$author1prozent="";$autor2prozent="";$autor3prozent="";$veroffentlich="";$zeitschrift="";$konferenz="";$doi="";$impactfactor="";$beschreib="";$search_veroffentlich="";$search_konferenz="";$search_beschreib="";$search_impactfactor="";$search_zeitschrift="";$search_doi="";
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
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){  
      echo "<tr>
      <td>
        <label for='checkid' class='pole1'/><a method='get' href='readarticel.php?id=".$row['id']."'>".$row['titel']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole1'/><a href='autor.php?id=".$row['autor1']."'>".$row['autor1']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['author1prozent']."%</label>
      </td>
      <!--
      <td>
        <label for='checkid'><a href='autor.html'>Autor2 Nazwisko</a></label>
      </td>
      <td>
        <label for='checkid'>% udziału autora2</label>
      </td>
      <td>
        <label for='checkid'><a href='autor.html'>Autor3 Nazwisko</a></label>
      </td>
      <td>
        <label for='checkid'>% udziału autora3</label>
      </td>
      -->
      <td>
        <label for='checkid' class='pole1'/>".$row['beschreib']."</label>
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['veroffentlich']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['zeitschrift']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['konferenz']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['doi']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['impactfactor']."</label>	
      </td>
      </tr></table>";
     /* echo "<div class='art'>
            <h3><a href='artykul.html'>".$row['titel']."</a></h3>
            <a href='autor.html'>".$row['autor1']."</a>
            <p>".$row['beschreib']."</p>
            </div>
            <a href=http://localhost/bibliometr/edit.php?id=".$row['id'].">Edit</a>
            <a href=http://localhost/bibliometr/delete.php?id=".$row['id'].">Delete</a>
            <a href=http://localhost/bibliometr/dodaj.php>Add</a>"
            ;*/
        }
    }
  }else{
    $sql = "SELECT * FROM artikel WHERE id > 0";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){    
      echo "<tr>
      <td>
        <label for='checkid' class='pole1'/><a method='get' href='readarticle.php?id=".$row['id']."'>".$row['titel']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole1'/><a  method='get' href='autor.php?autor1=".$row['autor1']."'>".$row['autor1']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['author1prozent']."%</label>
      </td>
      <!--
      <td>
        <label for='checkid'><a href='autor.html'>Autor2 Nazwisko</a></label>
      </td>
      <td>
        <label for='checkid'>% udziału autora2</label>
      </td>
      <td>
        <label for='checkid'><a href='autor.html'>Autor3 Nazwisko</a></label>
      </td>
      <td>
        <label for='checkid'>% udziału autora3</label>
      </td>
      -->
      <td>
        <label for='checkid' class='pole1'/>".$row['beschreib']."</label>
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['veroffentlich']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['zeitschrift']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole1'/>".$row['konferenz']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['doi']."</label>	
      </td>
      <td>
        <label for='checkid' class='pole2'/>".$row['impactfactor']."</label>	
      </td>
      </tr>";

  
         
           /* echo "<div class='art'>
            <h3><a href='artykul.html'>".$row['titel']."</a></h3>
            <a href='autor.html'>".$row['autor1']."</a>
            <p>".$row['beschreib']."</p>
            </div>
            <a href=http://localhost/bibliometr/edit.php?id=".$row['id'].">Edit</a>
            <a href=http://localhost/bibliometr/delete.php?id=".$row['id'].">Delete</a>
            <a href=http://localhost/bibliometr/dodaj.php>Add</a>"
            ;*/
        }
    }
  }
?>
</table>
<button><a href="wordprint.php">Pobierz tabelę do doc</a></button>
 </div>

  </div>

</body>
</html>