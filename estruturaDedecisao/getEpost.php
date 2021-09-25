<h1>Get e Post (formulario)</h1>

<form action="#" method="post">
    <div>
        <div>
            <label>nome</label>
            <input name="nome">
        </div>
        <label for="t1">trabalho 1 terça feira</label>
        <select required name="t1" id="t1">
            <option value="">Selecione</option>
            <option >Executado</option>
            <option >Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">trabalho 2 quinta feira</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select{
        font-size: 26px;
    }
</style>

<?php
echo $_POST['t1']. "<br>";
echo $_POST['t2']. "<br>";
$nome = $_POST['nome'];
if (isset($nome)){
    echo $nome;
}
?>