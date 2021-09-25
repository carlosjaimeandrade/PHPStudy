<h1>Primeira Classe</h1>


<?php 

class Cliente {
    ///atribustos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar(){
        echo "nome: $this->nome idade: $this->idade" ;
    }
}

$c1 = new Cliente();
$c1 -> nome= "ana silva";
$c1->apresentar();