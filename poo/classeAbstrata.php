<h1>Classe Abstrata</h1>
<p>metodos classes definida como abstract devera ser usada quando for herdada</p>
<?php

abstract class Abstrata{
    abstract public function metodo1();
    abstract protected function metodo2($paramentro);
}

abstract class filhoAbstrata extends Abstrata{

    public function metodo1(){
        echo "executando o metodo 1 <br>";
    }

    abstract public function metodo3();

}

class Concreta extends filhoAbstrata {


    public function metodo3(){
        echo "executando o metodo 3 <br>";
        $this->metodo2('interno');
    }

    protected function metodo2($paramentro){
        echo "executando o metodo 2 $paramentro<br>";
    }
    
}

$c = new Concreta();

$c->metodo1();

$c->metodo3();

?>