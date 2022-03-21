<form action="" method="POST">
    <div add_container>

        <div>
            <select name="veiculo[]" id="">
                <option value="carro_valor">Veiculo 1 </option>
                <option value="van_valor">Veiculo 2 </option>
                <option value="micro_valor">Veiculo 3 </option>
                <option value="onibus_valor">Veiculo 4 </option>
            </select>
            <input name="quantidade[]" type="number">
            <button onclick="remover(event)" type="button">Remover</button>
        </div>

    </div>

    <button onclick=add() type="button">Adicionar linha</button>
    <div>
        <input type="submit">
    </div>
   
</form>

<?php

$count = 0;
$banco = "";
foreach ($_POST['veiculo'] as $value) {
    $quantidade = $_POST['quantidade'][$count];
    for ($i = 0; $i < $quantidade; $i++) {
        $banco .=  $value . " / ";
    }
    $count++;
}



$valores = ['carro_valor' => 10, 'van_valor' => 20, 'micro_valor' => 30, 'onibus_valor' => 40];

$query_dados =  explode("/", $banco);



foreach ($query_dados as $value) {

    foreach ($valores as $key => $valor) {

        if (trim($value) == $key) {
            echo " o valor do veiculo $value" . "é " .  $valor . "<br>";
        }
    }
}

?>

<script>
    function add() {
        const valoe = 1
        const container = document.querySelector('[add_container]')
        container.insertAdjacentHTML('beforeend', `        
        <div>
            <select name="veiculo[]" id="">
                <option value="carro_valor">Veiculo 1 </option>
                <option value="van_valor">Veiculo 2 </option>
                <option value="micro_valor">Veiculo 3 </option>
                <option value="onibus_valor">Veiculo 4 </option>
            </select>
            <input name="quantidade[]" type="number">
            <button  onclick="remover(event)" >Remover</button>
        </div>`)
    }

    function remover(event){
        event.target.parentNode.remove()
    }
</script>