<?php namespace Outro\nome; ?>
<h1>Use As</h1>


<?php
echo __NAMESPACE__ . '<br>';

include_once ('use_as_arquivo.php');

function soma($a, $b){
    return $a . $b ;//eusei
}

class Classe {
    public $var;

    function func(){
        echo __NAMESPACE__ . '-'. __CLASS__. '-'. __METHOD__. '<br>'; 
    }
}

echo \Nome\Bem\Grande\constante . '<br>';
echo \Nome\Bem\Grande\soma(1,2) . '<br>';

use const \Nome\Bem\Grande\constante ;
echo constante.'<br>';


use \Nome\Bem\Grande as ctx;

echo soma(1,2).'<br>';
echo ctx\soma(1,2).'<br>';

//forma 1
$a = new Classe();
$a->func();

//forma 2
$b = new \Nome\Bem\Grande\Classe();
$b->func();

//forma 3
$c = new ctx\Classe();
$c->func();

//forma 4
use \Nome\Bem\Grande\Classe as D;
$d = new D();
$d->func();

?>