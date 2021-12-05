<?php

// URL DO SITE
$url = 'https://documenter.getpostman.com/view/18645491/UVJhCu3Q';

// PEGANDO TODO CONTEUDO
$dadosSite = file_get_contents($url);

echo $dadosSite ;

?>