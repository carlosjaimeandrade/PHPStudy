<h1>Error Handle</h1>
Handle é a api do php, com ele você consegue configurar as notificaçoes de erros e etc

<?php

ini_set('display_errors', 1);
//echo 4/ 0 . "<br>" ;

error_reporting(E_ERROR);
echo 4 / 0 . "<br>" ;
?>