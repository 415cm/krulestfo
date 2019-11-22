<?php
if (isset($_SERVER['PHP_AUTH_USER']) &&
isset($_SERVER['PHP_AUTH_PW']))
{
echo "Witaj, użytkowniku: " . $_SERVER['PHP_AUTH_USER'] .
" Hasło: " . $_SERVER['PHP_AUTH_PW'];
}
else
{
header('WWW-Authenticate: Basic realm="Obszar chroniony"');
header('HTTP/1.0 401 Unauthorized');
die("Proszę wprowadzić nazwę użytkownika i hasło");
}
?>