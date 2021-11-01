<?php
// aqui será onde você irá implementar o seu codigo NODE.JS
header('Content-type: application/json');
    if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
    // aqui o importante é colocar uma session para travar usuarios que não estejam logado no sistema caso contrario qualquer pessoa pode mandar requisição para esse arquivo.js"></script>

    //pegamos as informações no metodo POST enviado

    //converte os valores recebido no metodo post para que o php entenda 
    $_POST = json_decode(file_get_contents("php://input"),true);
    // criando variavel com o valor da url temporaria que o JS nos enviou
    $url = $_POST['url'];

    // verifico se o diretorio existe senão peço para criar
    if(!is_dir(ABSPATH . "/upload/")){
        mkdir(ABSPATH . "/upload/", 0777, true);
    }

    // função copia os dados para pasta informada, a $URL é a imagem temporaria
    file_put_contents(ABSPATH . "/upload/nomedaimg.png", $url);

    //aqui podemos retornar para o front uma mensagem ou outro dados que precisarmos
    echo json_encode('Enviado com sucesso');


