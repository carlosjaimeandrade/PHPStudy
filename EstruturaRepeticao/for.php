<h1>Laço for</h1>

<?php

for($cont = 1; $cont<=10; $cont++){
    echo $cont;
}

$meses = ["janeiro", "fevereiro", "março", "abril"];
echo $meses[0];
for ($i=0; $i<count($meses); $i++){
    echo "<br>";
    echo $meses[$i]; 
}
    

?>

