<h1>foreach</h1>
<?php


$dados = ["Carlos", "alice", "hortencia", "Bla bla"];

foreach ($dados as $dado){
    echo $dado .'<br>';
}


foreach ($dados as $index => $dado){
    echo $index . $dado .'<br>';
}
?>



