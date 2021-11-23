<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    Escolha a UFcc
    <select oninput='ibge(event)' name="" id="">
        <option value="">Selecione</option>
        <option value="mg">MG</option>
        <option value="sp">SP</option>
    </select>
    <div >
        <h1>Consumindo pelo back</h1>
        <ul  wm-return-ibge>
         
        </ul>
    </div>
</body>
</html>

<script src="js/axios.js"></script>
<script src="ibge.js"></script>
