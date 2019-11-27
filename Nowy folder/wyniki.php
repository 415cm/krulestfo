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
    <h1>Wyniki wyszukiwania</h1>
<?php 
    require 'conn.php';
    $sql="SELECT * FROM artikel";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){    
            echo "<div class='art'>
            <h3><a href='artykul.html'>".$row['titel']."</a></h3>
            <a href='autor.html'>".$row['autor1']."</a>
            <p>".$row['beschreib']."</p>
            </div>
            <a href=http://localhost/bibliometr/edit.php?id=".$row['id'].">Edit</a>
            <a href=http://localhost/bibliometr/delete.php?id=".$row['id'].">Delete</a>
            <a href=http://localhost/bibliometr/dodaj.php>Add</a>"
            ;
        }
    }
?>
 <div class="buttons">
 <button><a href="artykul.html" class="button1">Przejdź do artykułu</a></button>
 <button><a href="pobierz.html" class="button2">Pobierz</a></button>
 </div>
 </div>

  </div>

</body>
</html>