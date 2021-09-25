<h1>Final</h1>
<p>Classe definida como final não poderá ser herdada</p>
<?php

abstract class Abstrada{
    abstract public function metodo1();

    public final function metodo2(){
        echo 'nao vou mudar! <br>';
    }
}

class Classe extends  Abstrada{
    public function metodo1(){
        echo "executando";
    }
}
$classe = new Classe();
$classe->metodo1();

?>

