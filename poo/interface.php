<h1>interface</h1>
<p>// obrigado criar o que esteja dentro de interface
// sempre será publico
// a interface pode exteds outra interface</p>
<?php
// obrigado criar o que esteja dentro de interface
// sempre será publico
// a interface pode exteds outra interface
interface Animal {
    function respirar();

}

interface Canino {
    function latir();

}

class Cachorro implements Animal, Canino {
    function respirar(){
        echo "respirando <br>";
    }
    function latir(){
        echo "latindo <br>";
    }
}

$cachorro = new Cachorro();
$cachorro->respirar();
$cachorro->latir();
?>

