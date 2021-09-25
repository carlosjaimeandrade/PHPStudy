<h1>Escopo</h1>


<?php
$num = 2;
function imprimirMensagem(){
    echo 'ola';
    global $num;
    $num = 3;
    echo $num;
}

imprimirMensagem();
echo $num;
?>


