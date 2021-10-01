<h1>donwload</h1>
<?php
session_start();
$arquivos = $_SESSION['arquivo'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
echo $pastaUpload;
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];
if (move_uploaded_file($tmp, $arquivo)) {
    echo "<br> Arquivo valido e enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivo'] =  $arquivos;
} else {
    echo "<br>erro";
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php
    foreach ($arquivos as $arquivo) {
    ?>
        <li>
            <a download href="<?php echo  "files/".$arquivo ?>"> <?php echo $arquivo ?></a>
        </li>
    <?php
    }
    ?>
</ul>