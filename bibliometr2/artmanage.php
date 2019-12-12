<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles1.css">
</head>
<body>
<div class="topnav">
  

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
  <option><?php session_start();
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
<button class="addbutton"><a href="dodaj.php" >+ Dodaj artykuł</a></button>
	<h1>Zarządzaj artykułami</h1>
    <?php
    if(!isset($_SESSION['id'])){
        echo "Zaloguj sie";
    }else{
     if ($_SESSION['id']==1){
    require "conn.php";
    $blank=" ";
    $sercz=$_SESSION['namee'].$blank.$_SESSION['vorname'];
    $sql2 = "SELECT * FROM artikel WHERE autor1 ='$sercz'";
    $result2=$conn->query($sql2);
    if ($result2->num_rows > 0){
        while ($row2 = $result2->fetch_assoc()){ 
        echo"<div class='art'>
<h3><a href='readarticle.php?id=".$row2['id']."'>".$row2['titel']."</a></h3>
<a href='autor.html'><p>".$row2['autor1']."</p></a>
<p>".$row2['beschreib']."</p>
</div>
<div class='buttons'>
<button><a class='button1 href='readarticle.php?id=".$row2['id']."'>Przejdź do artykułu</a></button>
<button><a href=http://localhost/bibliometr/edit.php?id=".$row2['id']." class='button3'>Edytuj</a></button>
<button><a href=http://localhost/bibliometr/delete.php?id=".$row2['id']." class='button4'>Usuń</a></button>
</div>";}}}
    }?>
 </div>

  </div>

</body>
</html>