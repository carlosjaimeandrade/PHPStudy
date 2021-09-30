<h1>Upload de arquivos</h1>

<?php
var_dump($_FILES);
if($_FILES && $_FILES['arquivo']){
    $pastaUpload = "/Users/Jaime/Desktop/";
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $temp = $_FILES['arquivo']['tmp_name'];
   if(move_uploaded_file($temp, $arquivo)){
       echo "enviado com sucesso";
   }else{
       echo "erro no upload do arquivo";
   }
}
?>

<form action="#" method="post" enctype="multipart/form-data" > 
    <input type="file" name="arquivo">
    <button >enviar</button>
</form>
