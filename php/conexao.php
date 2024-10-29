<?php
    $host = "localhost";
    $db = "dbpw";
    // $db = "dbteste";
    $usuario = "EU";
    $senha = "S4r!nh4";
    // $usuario = "root";
    // $senha = "12345678";

    $cmd = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usuario, $senha);
?>