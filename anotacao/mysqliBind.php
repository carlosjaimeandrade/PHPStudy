<?php

$excluirSql = "SELECT * FROM sis_cnae_secundario WHERE id = ?";
$stmt = $link_conexao->prepare($excluirSql);
$param = '139';
$stmt->bind_Param('i', $param);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_array();
?>

<main class="main">
    <h1>teste</h1>
<?php var_dump($row); ?>

</main>