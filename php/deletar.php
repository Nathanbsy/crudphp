<?php
    include "conexao.php";
    $codigo = $_POST["inpcod"];
    $excluir = $cmd->query("delete from tbcrud where codigo_t = $codigo");
    // $query = $cmd->query("delete from tbusuario where codi_t $codigo");
    if ($excluir->rowCount() > 0) {
        $excluir->fetch(PDO::FETCH_ASSOC);
        echo "<script language='JavaScript'>
            alert('Dados excluidos com sucesso!');
            location.href = '../deletar.html';
        </script>";
    } else {
        echo "<script language='JavaScript'>
            alert('Codigo não encontrado!');
            location.href = '../deletar.html';
        </script>";
    }
?>