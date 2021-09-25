<?php namespace App;?>
<h1>Sub name space</h1>
<p> Pense como varias pasta uma dentro da outra, e dentro de cada pasta existe variaveis </p>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;
echo constante  . '<br>';

namespace App\Principal;
const constante = 124;
echo constante  . '<br>';


namespace App\Principal\Especifico;
const constante = 125;
echo constante  . '<br>';

echo '<hr>';

echo \App\Principal\constante;
echo "<br>";
echo \App\constante;

?>