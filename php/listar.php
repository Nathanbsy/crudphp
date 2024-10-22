<?php
    include "conexao.php";
    $query=$cmd->query("select * from tbcrud");

    if ($query->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Código</th><th>Nome</th><th>Email</th><th>Sexo</th><th>Data</th></tr>";
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>{$row['codigo_t']}</td>";
            echo "<td>{$row['nome_t']}</td>";
            echo "<td>{$row['email_t']}</td>";
            echo "<td>{$row['sexo_t']}</td>";
            echo "<td>{$row['data_t']}</td>";
            echo "</tr>";
        }
    
        echo "</table>";
    } else {
        echo "Nenhum usuario encontrado";
    }
?>