<?php
namespace Nome\Bem\Grande;

echo __NAMESPACE__ . "<br>";

const constante = 1232423;

function soma($a, $b){
    return $a+$b;
}

class Classe{
    public $var;

    function func(){
        echo __NAMESPACE__ . '-'. __CLASS__. '-'. __METHOD__. '<br>'; 
    }
}