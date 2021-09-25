<h1>Include com retorno</h1>
<p>
    você pode usar um "retorn" associado ao arquivo inteiro
</p>

<?php

$valorRetorno = require('return_usado.php');

echo $valorRetorno . "<br>";
echo $variavelRetornado . "<br>";

echo __DIR__ . "<br>";

$valorRetorno2 = require(__DIR__."/return_nao_usada.php");
echo $valorRetorno2 ;

