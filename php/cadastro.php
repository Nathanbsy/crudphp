<?php
    include "conexao.php";
    $vnome = $_POST["txtnome"];
    $vemail = $_POST["txtemail"];
    $vsenha = $_POST["txtsenha"];
    $vsexo = $_POST["txtsexo"];
    $vdata = $_POST["txtdata"];

    $incluir = $cmd -> query("insert into tbcrud(nome_t, email_t, senha_t, sexo_t, data_t) values ('$vnome', '$vemail', '$vsenha', '$vsexo', '$vdata')");
    // $incluir = $cmd -> query("insert into tbusuario(nome_t, email_t, senha_t, sexo_t, dtna_t) values ('$vnome', '$vemail', '$vsenha', '$vsexo', '$vdata')");

    echo "<script language='JavaScript'>
            alert('Dados cadastrados com sucesso!');
            location.href = '../index.html';
        </script>";
?>