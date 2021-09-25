<h1>Includes em funções</h1>
<p>O include só será chamado quando o metodo a função for chamada, o include dentro de uma função faz com que os metodos fiquem disponivel fora da função, mas as variveis não</p>
<?php

function carregarArquivos(){
    include('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(1,6) . '<br>';
}

carregarArquivos()
?>