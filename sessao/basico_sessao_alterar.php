<?php

session_start();

print_r($_SESSION);

echo '<br>';
?>

<b>Nome:</b> <?php echo $_SESSION['nome'] ?> 
<?php echo '<br>' ?> 
<b>Email:</b> <?php echo $_SESSION['email'] ?>

<?php
$_SESSION['email'] = "mudou@mudou.com"
?>
<?php echo '<br>' ?> 
<?php echo '<br>' ?> 
<a href="/curso-php/sessao/basico.php"> Voltar</a>
<?php echo '<br>' ?> 
<?php echo '<br>' ?> 
<a href="/curso-php/sessao/basico_sessao_limpar.php"> Limpar</a>