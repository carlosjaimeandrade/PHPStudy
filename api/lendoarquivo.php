<h1>Lendo arquivos </h1>
<?php
//ler por bit
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo,10);
echo fread($arquivo,10);
echo fread($arquivo,10);

echo "<br>";
//ler completo
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo,filesize('teste.txt'));

echo "<br>";

//ler por linha
$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo);
echo fgets($arquivo);
echo fgets($arquivo);
echo fgets($arquivo);
echo fgets($arquivo);
fclose($arquivo);

echo "<br>";
// lendo completo outra opção
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgets($arquivo);
}
fclose($arquivo);

echo "<br>";

// ler caracter 
$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)){
    echo fgetc($arquivo). '<br>';
}
fclose($arquivo);

echo "<br>";

// pode adicionar e ler
$arquivo = fopen('teste.txt', 'r+');
echo fgets($arquivo);
echo fgets($arquivo);
echo fgets($arquivo);
fwrite($arquivo,"\n adicionando outra linha")

?>