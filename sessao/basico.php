<h1>Sessão</h1>

<hr>

<?php
session_start();

var_dump($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = "CARLOS";
}

if(!$_SESSION['email']){
    $_SESSION['email'] = "jaime_andrek@hotmail.com";
}

?>

<p>
<a href="/curso-php/sessao/basico_sessao_alterar.php"> Alterar sessão</a>
</p>