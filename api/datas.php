<h1>Datas</h1>
<p>https://www.php.net/manual/pt_BR/function.date.php</p>


<?php
echo time(). '<br>';
echo date('d-m-Y- H:i:s'). '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

//calculando
echo date('d/m/Y', strtotime('+5 days')) . "<br>";
echo date('d/m/Y', strtotime('+5 days', strtotime('01-10-2014'))) . '<br>';
echo date('d/m/Y', strtotime('-1 days')) ;

//configurar para portugues
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
echo date('d-m-Y- H:i:s'). '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';

//criar datas
$datafixa = mktime(15,30,50,1,25,2008). '<br>';

echo "<br>";

$data = date('d/m/Y', strtotime('+6 days', strtotime('20-09-2021')));

//hoje é menor que 20-09 mais 6 dias
if(date("d/m/Y") < $data){
    echo "Ainda tem reembolso";
}else{
    echo "Não tem reembolso";
}
?>