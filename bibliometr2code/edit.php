<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/code.css">
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
    <h1>Edytuj artykuł</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bibliometr";
    $conn = new mysqli ($servername, $username, $password, $dbname);
    global $conn;
    if (isset($_POST['titel'])){
        global $conn;
        $sql = "UPDATE artikel SET 'titel'='".$_POST['titel']."', 'autor1'='".$_POST['autor1']."', 'autor2'='".$_POST['autor2']."', 'autor3'='".$_POST['autor3']."', 'author1prozent'='".$_POST['author1prozent']."', 'autor2prozent'='".$_POST['autor2prozent']."', 'autor3prozent'='".$_POST['autor3prozent']."', 'zeitschrift'='".$_POST['zeitschrift']."', 'konferenz'='".$_POST['konferenz']."', 'doi'='".$_POST['doi']."', 'impactfactor'='".$_POST['impactfactor']."', 'beschreib'='".$_POST['beschreib']."' WHERE 'id'='".$_GET['id']."'";
        $result = $conn->query($sql);
        header('location: wyniki.php');
    }else{
        global $conn;
        $sql = "SELECT * FROM artikel WHERE id =".$_GET['id'];
        $result = $conn -> query($sql);
        while ($row = $result->fetch_assoc()){ 
    echo "
        <div class='search-form'><form action='editing.php' method='post'>
        <input type='hidden' name='id' value='".$row['id']."'>
        <input type='text' name='titel' value='".$row['titel']."'/>
        <input type='text' name='autor1' class='autor1' value='".$row['autor1']."'/>
        <input type='text' name='autor2' class='autor2' value='".$row['autor2']."'/>
        <input type='text' name='autor3' class='autor3' value='".$row['autor3']."'/>
        <input type='text' name='author1prozent' value='".$row['author1prozent']."'/>
         <input type='text' name='autor2prozent' value='".$row['autor2prozent']."'/>
          <input type='text' name='autor3prozent' value='".$row['autor3prozent']."'/>
        <input type='text' name='veroffentlich' value='".$row['veroffentlich']."'/>
        <input type='text'  name='konferenz' value='".$row['konferenz']."'/>
        <input type='text' name='zeitschrift' value='".$row['zeitschrift']."'/>
        <input type='text' name='doi' value='".$row['doi']."'/>
        <input type='text' name='impactfactor' value='".$row['impactfactor']."'/>
        <input type='text' name='beschreib' class='opis' value='".$row['beschreib']."'/>
        <input type='submit' value='Wyslij'>
        </form></div> ";
        }
    }

	

    ?>

 </div>
  </div>
 
 </div>

  </div>

</body>
</html>