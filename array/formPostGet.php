<h1>Form post array</h1>
<?php

    if (isset($_POST)){
        $dados = $_POST;
        //var_dump($dados);
        foreach($dados as $dado){
            echo $dado . "<br>";
        }
        
    }  

?>

<form method="POST">
        <label>Name</label>
        <input name="nome" placeholder="Nome" value= <?= $_POST['nome'] ?? ""; ?>>
        <label>Email</label>
        <input name="email" placeholder="Email" type="email" value= <?= $_POST['email'] ?? ""; ?>>
        <button>Criar</button>
    </div>
</form>

