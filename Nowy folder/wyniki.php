<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/test.css">
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
		<label for="checkid" class="pole1"/><a href="artykul.html">Tytuł artykułu</a></label>
	</td>
	<td>
		<label for="checkid" class="pole1"/><a href="autor.html">Autor Nazwisko</a></label>
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
    $sql = "SELECT * FROM artikel WHERE id > 0".$search_titel.$search_autor1;
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){  
      echo "<tr>
      <td>
        <label for='checkid' class='pole1'/><a href='artykul.html'>".$row['titel']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole1'/><a href='autor.html'>".$row['autor1']."</a></label>
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
        <label for='checkid' class='pole1'/><a href='artykul.html'>".$row['titel']."</a></label>
      </td>
      <td>
        <label for='checkid' class='pole1'/><a href='autor.html'>".$row['autor1']."</a></label>
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
 <div class="buttons">
 <button><a href="artykul.html" class="button1">Przejdź do artykułu</a></button>
 <button><a href="pobierz.html" class="button2">Pobierz</a></button>
 </div>
 </div>

  </div>

</body>
</html>