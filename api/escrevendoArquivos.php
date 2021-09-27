<h1>Escrevendo no arquivo</h1>

<?php
//zera o arquivo no modo "W"
$arquivo = fopen('teste.txt','w');
fwrite($arquivo, "inicial \n");
fwrite($arquivo,"segunda linha \n");
fclose($arquivo);

$arquivo = fopen('teste.txt','w');
fwrite($arquivo, "novo conteudo \n");
fclose($arquivo);

// não substitui coloca 1 de baixo do outro
$arquivo = fopen('teste.txt','a');
fwrite($arquivo, "novo conteudo \n");
fwrite($arquivo, "novo conteudo \n");
fwrite($arquivo, "novo conteudo \n");
fwrite($arquivo, "novo conteudo \n");
fclose($arquivo);

//com o x você solicita trablahar com um arquivo novo não existente
$arquivo = fopen('teste2.txt','x');


?>

