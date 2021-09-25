<h1>Erros Personalizados</h1>

<?php

class FaixaEtariaException extends Exception {
    public function __construct($menssage, $code = 0,
    $previous = null){
        echo "Erro personalizado: $menssage<br>";
        parent::__construct($menssage, $code, $previous);
    }
}

function calcularTempo ($idade){
    if($idade < 18){
        throw new FaixaEtariaException('ainda está muito longe  <br>');

    }
    if($idade >70){
        throw new FaixaEtariaException('Ja deveria aposentar  <br>');
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15,30,60,80];

foreach($idadesAvaliadas as $idade){
    try{
        $tempoRestante = calcularTempo($idade);
        echo "Idade: $idade, $tempoRestante anos restante <br>";
    }catch(faixaEtariaException $e){
        echo "Não foi possivel calcular a idade $idade <br>";

    }
   
}