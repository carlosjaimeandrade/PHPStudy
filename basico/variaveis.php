<h1 class="titulo">Variaveis</h1>

<?php 

$a = 1;
$b = 2;
echo '1 + 2 Resultado é ' . ($a + $b);
var_dump($a);
?>
<br>

<h1>Flutuante</h1>
<?php 
$flutuante = 'flutuante' . 1.5;
echo($flutuante);
var_dump($flutuante);
?>
<br>
<h1>Operação matematicas</h1>

<?php 
    echo 7/4 . '<br>';
    echo intdiv(7,4) . '<br>';
    echo round(7/4) . '<br>';
    echo 7 % 4 . '<br>';
    echo 7 % 2 . '<br>';
    echo 4**2 . '<br>';
    echo (2+2)/2  . '<br>';
?>

<h1>String</h1>

<?php 
    print('Ola mundo' . "<br>");
    echo "Tudo bem " . strtoupper('maximizado') . "<br>";
    echo "Tudo bem " . strtolower('MINIMIZADO')  . "<br>";
    echo "tudo bem? " . strlen('quantas letras?'). "<br>";;
    echo "tudo bem?" . mb_strlen('eu também',"utf-8"). "<br>";;
    echo "tudo bem?" . substr('CarlosJaimedeAndrades', 3,4). "<br>";;
    echo "tudo bem?" . str_replace('isso', 'aquilo', 'troca isso')
?>