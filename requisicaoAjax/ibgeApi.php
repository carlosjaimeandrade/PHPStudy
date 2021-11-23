<?php
// aqui será onde você irá implementar o seu codigo NODE.JS
header('Content-type: application/json');
    //Caso a api seja paga essa é a melhor saida de fazer o precesso no back

    //converte os valores recebido no metodo post para que o php entenda 
    $_POST = json_decode(file_get_contents("php://input"),true);
    //defino a variavel
    $uf = $_POST['uf'];
    //consumindo e concatenando
    $consum = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados/{$uf}/distritos");
    //aqui podemos retornar para o front uma mensagem ou outro dados que precisarmos
    echo ($consum);


