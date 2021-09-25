<h1>Traits 1</h1>
<hr>
<p>Com o traits você poderá reuzar codigos <br>
    Nao herda por extends 
    e sim por uma palavra especifica chama "use"
    exemplo na linha 21
</p>
<?php

trait validacao{
    public $a = "valor a";
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor{
    public $b = "valor b";
    public function validarStringMelhoro($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
var_dump($usuario->validarStringMelhoro(' '));
echo '<br>';
echo $usuario->a;
echo '<br>';
echo $usuario->b;
?>