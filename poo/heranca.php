<h1>Herança</h1>


<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "pessoa criado! <br>";
    }

    public function apresentar(){
        echo "nome:{$this->nome}, idade:{$this->idade} <br>";
    }

}


class Usuario extends Pessoa {
    public $login;

    function __construct($nome, $idade, $login ){
        $this->nome= $nome;
        $this->idade= $idade;
        $this->login = $login;
        echo "usuario criado" . "<br>";
    }

    public function apresentar(){
        //parent::apresentar(); outra forma de apresentar a funcao da classe pai
        echo "@{$this->login} : {$this->nome} : {$this->idade} anos <br>";
    }

}

$pess = new Pessoa("carlos", 21);
$pess->apresentar();

$usu1 = new Usuario("carlos Jaime", "21", "jaimeandrade");
$usu1->apresentar();

?>
