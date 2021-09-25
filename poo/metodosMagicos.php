<h1>Metodos Magicos</h1>
<p>https://www.php.net/manual/pt_BR/language.oop5.magic.php</p>

<hr>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        echo 'Executando construtor <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Executando o destrutor';
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declaro: {$atrib} <br>";
        return 123;
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não declaro: {$atrib} {$valor} <br>";
        return 123;
    }

    public function __call($medodo, $params){
        echo "tentando axecutar métodos {$medodo}";
        echo "com parametros ";
        print_r($params);
    }
}


$pessoa = new Pessoa('Carlos', 25 );
//$pessoa->apresentar();
//echo "<br>";
//$pessoa->nome = "Reinaldo";
//$pessoa->apresentar();

echo $pessoa->nomeCompleto;
echo "<br>";
$pessoa->nomeCompleto = "ola";
echo "<br>";
$pessoa->naoExit(5);
?>