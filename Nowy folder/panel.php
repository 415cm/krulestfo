<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles6.css">
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

 <div class="selectWrapper">
  <select class="selectBox">
  <option>Administrator</option>
  <option><a href="mojprofil.html">Mój profil</a></option>
  <option><a href="zarzadzanie_artykuly.html">Zarządzanie artykułami</a></option>
  <option><a href="zarzadzanie_userami.html">Zarządzanie użytkownikami</a></option>
  <option><a href="wyloguj.html">Wyloguj</a></option>
</select>
</div>

<div class="login-page">
<div class='form'>
        <h1>Zarządzanie użytkownikami</h1>
     
    
    
    <table>
    <tr>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>E-mail</th>
      <th><th>
      </tr>
    <?php
    session_start();
    if ($_SESSION['id']==2)
    {
        require "conn.php";
        $sql = "SELECT * FROM benutzer WHERE id > 0";
    $result=$conn->query($sql);
    if ($result->num_rows > 0){
		while ($row = $result->fetch_assoc()){    
      echo "
       
    
      <tr>
      <td>".$row['namee']."</td>
      <td>".$row['vorname']."</td>
      <td>".$row['email']."</td>
      <td><button><a href='zmiana.html'>Zmień hasło</a></button></td>
      <td><button><a href='usun.html'>Usuń konto</a></button></td>
      
      </tr>
      
    
    
     </div>";
    }
}else{
        echo" dupa";
        echo $_SESSION['id'];
    }
}
 ?>
 </table>
  </div>

</body>
</html>
  </div>

</body>
</html>