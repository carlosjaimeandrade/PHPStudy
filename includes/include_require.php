<h1>Include vs Require</h1>
<p>A diferenã entre os 2 não poucas, o include não faz o sistema para de funcionar se o arquivo não existir</p>
<p>Já o require ele para o funcionamento informando um fatal erro</p>
<?php
include('arquivo_inexistente.php');


echo "fim do arquivo executando include" . "<br>";


echo "usando Require";

require('arquivo_inexistente.php');


echo "fim do arquivo executando require" . "<br>";

?>