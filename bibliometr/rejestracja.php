<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles2.css">
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
	<h1>Rejestracja nowego użytkownika</h1>
    <!--<form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    -->
    <?php
    echo"
    <form class='register-form' action='adduser.php' method='post'>
	  <input type='text' name='namee' placeholder='Imię'/>
      <input type='text' name='vorname' placeholder='Nazwisko'/>
      <input type='text' name='email'placeholder='E-Mail'/>
      <input type='password' name='passw'placeholder='Hasło'/>
      <input type='submit' value='rejestruj' name='submit'/>
      
    </form>
    ";
    //<button><a href='wyszukiwarka.html'>Zarejestruj się</a></button>
    ?>
 </div>
  </div>

</body>
</html>