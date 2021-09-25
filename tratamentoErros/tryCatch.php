<h1>Try/Catch</h1>

<?php

try{
    echo 7 / 0;
}catch(Error $e){
    echo "ouve erros {$e}";
}
