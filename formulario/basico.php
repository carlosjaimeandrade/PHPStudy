<h1>Basico formulario</h1>
<h1>Cadastro</h1>
<!-- cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input class="form-control" id='name' type="text" name='name' placeholder="Nome" >
        </div>
        <div class="form-group col-md-6">
            <label for="nascimento">Data de nacimento</label>
            <input class="form-control" id='nascimento' type='text' name='nascimento' placeholder="nascimento" >
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input class="form-control" id='email' type="text" name='email' placeholder="email" >
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input class="form-control" id='site' type="text" name='site' placeholder="Nome" >
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input class="form-control" id='filhos' type="namber" name='filhos' placeholder="filhos" >
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input class="form-control" id='salario' type="salario" name='text' placeholder="salario" >
        </div>
    </div>
    <button class="btn btn-primary" >Enviar</button>
</form>

<?php
if(count($_POST)>0){
    if(!filter_input(INPUT_POST, "nome")){
        echo "Nome é obrigatorio" . "<br>";
    }

    if(filter_input(INPUT_POST, "nascimento")){
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data){
            echo "Data deve ser estar no formado padrão dd/mm/aaaa". "<br>";
        }
    }
}


if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo "Email invalido" . "<br>";;
}

if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
    echo "site invalido";
}



?>