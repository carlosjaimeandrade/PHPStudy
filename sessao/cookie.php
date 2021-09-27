https://www.php.net/manual/pt_BR/reserved.variables.cookies.php
https://www.php.net/manual/pt_BR/function.setcookie.php
<?php

echo var_dump($_COOKIE);
$_COOKIE['nome'] = "Carlos";
echo "<br>";
echo $_COOKIE['nome'];
// limpar




// Mostra um cookie individual
echo $_COOKIE["CookieTeste"];

// Outra maneira de depurar(debug)/testar é vendo todos os cookies
print_r($_COOKIE);

// Configura a data de expiração para uma hora atrás
setcookie("CookieTeste", "Teste", time() + 3600);
echo $_COOKIE["CookieTeste"];
//destruir
unset($_COOKIE);
?>