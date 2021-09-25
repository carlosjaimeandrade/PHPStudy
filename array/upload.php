<?php


  $msg = false;

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    var_dump($_FILES['arquivo']);

    //move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

  }

?>
<h1>Upload de Arquivos</h1>

<form  method="POST" enctype="multipart/form-data">
  Arquivo: <input type="file" required name="arquivo">
  <button value="Salvar">salvar<button>
</form>