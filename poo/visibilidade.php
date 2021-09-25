<h1>Visibilidade</h1>

<?php

Class A{
    public $publico = "publico";
    protected $protegido = "protegido";
    private $privado = "privado";

    public function mostrarA(){
        //$this->naoMostrar();
        echo "class a) publico = {$this->publico}";
        echo "class a) protegido = {$this->protegido}";
        echo "class a) privado = {$this->privado}";
    }

    private function naoMostrar(){
        echo 'não vou imprimir!';
    }


}

$a = new A();
$a->mostrarA();

class B extends A { //a classe b é um subclasse mais espesifica a classe a é a superclasse
    public function mostrarB(){
        echo "class b) publico = {$this->publico}"; //para todos
        echo "class b) protegido = {$this->protegido}"; //apenas nas herança
        echo "class b) privado = {$this->privado}"; //privado totalmente
    }
}

echo "<br>";
$b = new B();
$b->mostrarB();
?>