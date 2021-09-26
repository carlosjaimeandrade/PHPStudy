<h1>Class DATETIME()</h1>
<p>https://www.php.net/manual/pt_BR/datetime.construct.php</p>

<?php
//quantidades de dia entre 2 datas

$d1 = new DateTime('now');
echo $d1->format('Y-m-d') . "<br>";
$d2 = new DateTime('2021-09-20');
echo $d2->format('Y-m-d') . "<br>";
$intervalo = $d1->diff( $d2 );
echo "Diferença de " . $intervalo->d . " dias";
echo " e " . $intervalo->m . " mese s";
echo " e " . $intervalo->y . " anos.";
echo "<br>";

if($d1 > $d2->format('Y-m-d')){
    echo "é maior";
}else{
    echo "é menor";
}

echo "<br>";
echo "<br>";
echo "<hr>";

$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A %d de %B de %Y';
$formatoDataHora = "%A, %d de %B de %Y - %H:%M:%S";

$agora = new DateTime();

echo ('<br>');

echo $agora->format($formatoData1) .'<br>';
setlocale(LC_TIME, 'pt_BR');
echo strftime($formatoData2, $agora->getTimestamp());
echo $agora->format('d/m/Y - h:m:s') .'<br>';


$outradata = new DateTime('-2 day');
echo $outradata->format('d/m/Y - h:m');

echo "<br>";

$datafixa = new DateTime('2021-09-20');
echo $datafixa->format('d/m/Y - h:m');
echo "<br>";
$datafixa->modify('+1 day');
echo $datafixa->format('d/m/Y - h:m');
echo "<br>";
$datafixa->setDate(2000,5,20);
echo $datafixa->format('d/m/Y - h:m');

//mudar time zone
$tz = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now', $tz );
echo "<br>";
echo $agora->format('d/m/Y - H:m:s');
