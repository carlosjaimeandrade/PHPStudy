<h1>Desafio Datas</h1>
<?php
class Data {
    public $dia = '31';
    public $mes = '08';
    public $ano = '2021';

    public function apresentarDate(){
        return $this->dia . "/". $this->mes . "/" . $this->ano . "<br>";
    }


}

$data = new Data();
echo $data->apresentarDate();
$data1 = new Data();
$data1->dia = '10';
echo $data1->apresentarDate();

?>