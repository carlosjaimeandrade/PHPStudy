<h1>Require Once x include once</h1>
<p>Require da um erro faltal e para a execução do codigo</p>
<p>Include não para a execução da pagina continua rodando os codigos após os erros</p>
<p>Include ONCE OU REQUEIRE ONCE, quando chamado assim o php verifica se o requerimento já foi feito, se sim, ele não chama de novo, isso funciona apenas quando definindo a palavra "ONCE"</p>
<?php

include('include_once_arquivo.php');
//require('include_once_arquivo.php');

echo "<br>";
echo $variavel;

require_once('include_once_arquivo.php');
