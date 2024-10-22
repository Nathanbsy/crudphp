<?php
    $host = "localhost";
    $db = "dbteste"; // Seu banco de dados
    $usuario = "root";
    $senha = "12345678";

    $cmd = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $senha);
?>