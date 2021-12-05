
<?php

$recebeuDoBack = "Femea"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select wm-select name="" id="">
        <option <?php echo $recebeuDoBack == "Macho" ? "selected" :'' ?> value="">Macho</option>
        <option  <?php echo $recebeuDoBack == "Femea" ? "selected" :'' ?>  value="">Femea</option>
    </select>
</body>
</html>

