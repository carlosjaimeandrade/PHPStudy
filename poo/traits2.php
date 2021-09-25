<h1>Traits 2</h1>
<p>
    Neste exemplo vamos definir 2 traits com metodos iguais 
    "validarString"
    Resolveremos o problema 
</p>
<hr>
<?php

trait validacao{
    public $a = "valor a";
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public $b = "valor b";
    public function validarString($str){
        return isset($str) && trim($str);
    }
}


class Usuario {
    use validacao, validacaoMelhor{
        //definindo a função principal da estancia
        validacaoMelhor::validarString insteadOf validacao;
        
        //mudando o nome da funçãp
        validacao::validarString as validacaoSimples;
    
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
var_dump($usuario->validacaoSimples(' '));
?>