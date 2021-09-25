<h1>Polimorfismo</h1>

<?php
abstract class Comida{
    public $peso;
}

class Arroz extends Comida{

}


class Feijao extends Comida{
    
}

class Sorvete extends Comida{
    
}


class Pessoa {
    public $peso;

    public function __construct($peso){
        $this->peso = $peso;
    }

    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }

}

$c1 = new Arroz();
$c1->peso = 0.45;

$c2 = new Sorvete();
$c2->peso = 0.45;

$p = new Pessoa(83.45);
$p->comer($c1);
echo $p->peso;
$p->comer($c2); // da erro pois estou definindo no parametro que irá receber uma paramentro da class arroz
echo $p->peso;

?>