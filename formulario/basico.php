<h1>Basico formulario</h1>
<h1>Cadastro</h1>
<!-- cdn -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form action="#">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input class="form-control" id='name' type="text" name='name' placeholder="Nome" required>
        </div>
        <div class="form-group col-md-6">
            <label for="data">Data de nacimento</label>
            <input class="form-control" id='data' type="date" name='data' placeholder="data" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input class="form-control" id='email' type="email" name='email' placeholder="email" required>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input class="form-control" id='site' type="site" name='text' placeholder="Nome" required>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input class="form-control" id='filhos' type="filhos" name='text' placeholder="filhos" required>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input class="form-control" id='salario' type="salario" name='text' placeholder="salario" required>
        </div>
    </div>
    <button class="btn btn-primary" >Enviar</button>
</form>