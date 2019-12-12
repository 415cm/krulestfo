<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/styles1.css">
</head>
<body>
<div class="topnav">
  
  
	<h3 class="logo">Bibliometr</h3>
	<a href="#search">Wyszukiwarka</a>
  <div class="topnav-right">
   <a href="stronaglowna.html">Strona główna</a>
    <a href="osystemie.html">O systemie</a>
    <a href="kontakt.html">Kontakt</a>
  </div>
</div>

<div class="login-page">

	<div class="form">
	<h1>Zaloguj się na swoje konto</h1>
    <!--<form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    -->
    <?php
    echo    "
    <form class='login-form' action='log.php' method='post'>
    <input type='text' name='email' placeholder='E-mail'/>
    <input type='password' name='passw' placeholder='Hasło'/>
    <input type='submit'  value='loguj' name='submit' id='submit1'/>
    <p class='message'>Zapomniałeś hasła? <a href='#'>Skontaktuj się z administratorem.</a></p>
  </form>
    "
    ?>
    </div>
  </div>

</body>
</html>