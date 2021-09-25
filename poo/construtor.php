<h1>Contrutor e Destrutor</h1>
<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nomeNovo, $idade = 18){
        echo "chamando contrutor";
        $this->nome = $nomeNovo;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "morreu";
    }

    public function apresentar(){
        echo $this->nome . " " . $this->idade ."<br>";
    }

    public function ola(){
        echo 's';
    }

}

$pessoa = new Pessoa("Carlos", 25);
$pessoa->apresentar();

$pessoa1 = new Pessoa("Carlos2");
$pessoa1->apresentar();
$pessoa1->ola();
unset($pessoa1);
?>

