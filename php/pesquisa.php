<?php
    echo "<link rel='stylesheet' href='../css/pesquisa.css'>";
    include "conexao.php";
    $crit = $_POST["txtnome"];
    $pesq = $cmd -> query("select * from tbusuario where nome_t like '$crit%'");
    $total_registros = $pesq -> rowCount();

    if ($total_registros == 0) {
        echo "<script language='JavaScript'>
            alert('Não encontrado!');
            location.href = '../pesquisar.html';
        </script>";
    }
    
    if($total_registros > 0) {
        echo "<main>";
        echo "<div class='container-tabela'>";
        echo "<table>";
        echo "<tr> <th colspan=6> Dados Cadastrados </th> </tr>";
        echo "<tr>
                <th> Código </th>
                <th> Nome </th>
                <th> E-mail </th>
                <th> Senha </th>
                <th> Sexo </th>
                <th> Nascimento </th>
            </tr>";
    }
    while($row = $pesq->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>{$row['codi_t']}</td>";
        echo "<td>{$row['nome_t']}</td>";
        echo "<td>{$row['email_t']}</td>";
        echo "<td>{$row['senha_t']}</td>";
        echo "<td>{$row['sexo_t']}</td>";
        echo "<td>{$row['dtna_t']}</td>";
        echo "</tr>";
        
        
    }
    echo "</div>";
    echo "</main>";
    echo "<div class='container-botao pesquisa'>";
    echo "<a href='../pesquisar.html'>Nova Pesquisa</a>'";
    echo "</div>";
?>
