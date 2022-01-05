<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input name='arquivo' type="file" accept=".xml">
        <input type="submit">
    </form>
</body>

</html>



<?php

$totalCol = 4;
$tabela = "tabelateste";

if (!empty($_FILES['arquivo'])) {

    $arq_temp = $_FILES['arquivo']['tmp_name'];
    $arquivo = new DomDocument();
    $arquivo->load($arq_temp);

    $linhas = $arquivo->getElementsByTagName("Row");

    $contRow = 1;
    $queryValues = "";
    $query  = "";

    foreach ($linhas as $linha) {
        
        if ($contRow != 1) {
            for ($i = 0; $i <= $totalCol; $i++) {
                $coluna = $linha->getElementsByTagName("Data");
                $coluna = $coluna->item($i);
                $coluna = $coluna->nodeValue;
                $queryValues = "'$coluna'" . "," . $queryValues;
                $queryValues = rtrim($queryValues,",");
            }
            $query =  "INSERT INTO $tabela VALUES($queryValues);" . $query; 
            $queryValues = "";
            
        }
        $contRow++;

    }
    $query = rtrim($query, ";");
    echo $query;
}


?>