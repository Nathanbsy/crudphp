<?php
    $host = "localhost";
    $db = "dbpw"; // Seu banco de dados
    $usuario = "EU";
    $senha = "S4r!nh4";

    try {
        // Cria uma nova conexão PDO
        $cmd = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $senha);
        
        // Configura o PDO para lançar exceções em caso de erro
        $cmd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        // Exibe a mensagem de erro se a conexão falhar
        echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
        exit;
    }
?>