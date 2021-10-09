<?php
if(selectTable()){
    $chaves = '';
    foreach (selectTable() as $value) {
        $chaves .= "Nome: {$value[1]} <br> E-mail: {$value[2]} <br> Ferramenta: {$value[8]}" ;
        echo "<br>";
        echo updateTable($value[0], $value[8]);
    }

}

function selectTable()
{
    global $link_conexao;
    $timeTeste = 2;
    $query = "SELECT *, 'nome1' as Tipo from tb1 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1
    UNION
    SELECT *, 'nome2' as Tipo from tb2 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1
    UNION
    SELECT *, 'nome3' as Tipo from tb3 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1
    UNION
    SELECT *, 'nom4' as Tipo from tb4 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1
    UNION
    SELECT *, 'nome5' as Tipo from tb5 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1
    UNION
    SELECT *, 'nome6' as Tipo from tb6 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1
    UNION
    SELECT *, 'nome7' as Tipo from tb7 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1
    UNION
    SELECT *, 'nome8' as Tipo from tb8 WHERE teste=1 and date_add(data,interval {$timeTeste} minute) < now() and chave_ativa=1; ";

    $query_exec = $link_conexao->query($query);
    $query_all = $query_exec->fetch_all();
    return $query_all;
}

function updateTable($id, $tb)
{
    global $link_conexao;
    $query = "UPDATE $tb SET chave_ativa=0 WHERE id=$id";
    $link_conexao->query($query);
}

?>