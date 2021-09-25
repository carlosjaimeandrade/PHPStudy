<?php namespace contexto;?>
<h1>Basico de Name space</h1>
</hr>
<p>Com o nameSpace você cria um espaço para cada tipo de variavel, 
assim podendo repetir até mesmo no escopo global a mesma variavel.
<p>Tudo que for definido aqui será aplicado no namespace definido na primeira linha</p>
OBSERVAÇÃO: O Name space deve ser a primeira coisa da linha de codigo</p>

<?php
echo __NAMESPACE__ . '<br>';

// constante não usa $ para criar a variavel
const constante1 = 123;
define('contexto\constante2', 234);
define(__NAMESPACE__ .'\constante3', 548);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>';
echo constante3 . '<br>';
//echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b){
    return $a + $b;
}

echosoma(1, 2);



?>