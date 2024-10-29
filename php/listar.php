<?php
    echo "<link rel='stylesheet' href='../css/lista.css'>";
    include "conexao.php";
    $query=$cmd->query("select * from tbusuario");

    if ($query->rowCount() > 0) {
        
        echo "<main>";
        echo "<div class='container-tabela'>";
        echo "<table>";
        echo "<tr><th>Código</th><th>Nome</th><th>Email</th><th>Senha</th><th>Sexo</th><th>Data</th></tr>";
        while($row = $query->fetch(PDO::FETCH_ASSOC)) {
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
        echo "</table>";
        echo "<div class='container-botao'>";
        echo "<a href='../index.html'>Voltar</a>";
        echo "</div>";
    } else {
        echo "Nenhum usuario encontrado";
    }
?>