<h1>Static</h1>


<?php
Class A{
    private $teste = 'ola isso é um teste';
    public $nãoStatic = 'Variavel de instancia';
    public static $static = 'Variavel de class (estática)';


    public function ola(){
        echo $this->teste;
    }

    public function mostrarA(){
        echo "Não static {$this->nãoStatic}". "<br>";
        //echo "SIm é static {$this->static}". "<br>";
        echo self::$static;
    }

    public static function mostrarB(){
        //echo "SIm é static {$this->static}". "<br>";
        echo self::$static;
    }
}
$a = new A();
$a->ola();
$a->nãoStatic;
$a->mostrarA();
// para estanciar uma função static usando o nome da classe mais "::" e a função static
A::mostrarB();

///podemos perceber que o PRIVATE ele não priva a variavel para ser manipulada dentro da class
// ja o valor static o valor pertence a class como uma constancia não muda o valor
?>


