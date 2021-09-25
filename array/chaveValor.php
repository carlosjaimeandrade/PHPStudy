<h1>Chave</h1>

<?php
$dados = [
    "idade" => 25,
    "cor" => "verde",
    "peso"=> 59.5
];

echo ($dados['idade']);
var_dump($dados);

echo is_array($dados)."<br>"; //retorna se é array

echo count($dados)."<br>"; //verifica o tamanho do array
unset($dados["idade"]);
var_dump($dados);
$index = array_rand($dados);
echo($dados[$index]);
?>