<h1>Multi Array</h1>

<?php
$dados = [
    'nome'=>[
        "nome"=> "carlos",
        "idade"=> 12,
    ],
    [
        "nome"=> "João",
        "idade"=>5,
    ],

];
var_dump($dados);
echo "<br>";
echo $dados['nome']["nome"];
echo "<br>";
echo $dados['0']["nome"];
// add mais uma cadeia no array
$dados[] = ["nome"=> "Pedrin", "idade"=>23];
echo "<br>";
var_dump($dados);

$dados[2]["vizinho"] = "chaves";

echo "<br>";
var_dump($dados);

?>