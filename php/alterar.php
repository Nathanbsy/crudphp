<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/alterar.css">
    <title>Alterar</title>
</head>
<body>
    <main>
        <div class="container-principal">
            <form action="" method="post">
                <input type="hidden" name="acao" id="acao" value="buscar">
                <?php
                $row = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include "conexao.php";
                    $codigo = $_POST["inpcod"];
                    
                    if ($_POST["acao"] == "buscar") {
                        $alterar = $cmd->query("select * from tbcrud where codigo_t = $codigo;");
                    
                        if ($alterar->rowCount() > 0) {
                            $row = $alterar->fetch(PDO::FETCH_ASSOC);
                        } else {
                            echo "<script language='JavaScript'>
                                    alert('Não encontrado!');
                                    location.href = './alterar.php';
                                </script>";
                        }
                    } else if($_POST["acao"] == "salvar") {
                        $vnome = $_POST["txtnome"];
                        $vemail = $_POST["txtemail"];
                        $vsenha = $_POST["txtsenha"];
                        $vsexo = $_POST["txtsexo"];
                        $vdata = $_POST["txtdata"];
                        $salvar = $cmd->query("update tbcrud set nome_t = '$vnome', email_t = '$vemail', senha_t = '$vsenha', sexo_t = '$vsexo', data_t = '$vdata' where codigo_t = $codigo;");
                        // $salvar = $cmd->query("update tbusuario set nome_t = '$vnome', email_t = '$vemail', senha_t = '$vsenha', sexo_t = '$vsexo', dtna_t = '$vdata' where codigo_t = $codigo;");
                    }
                }
                ?>
                <label for="inpcod">Código</label>
                <input type="number" name="inpcod" id="inpcod" placeholder="Coloque o código" required value="<?php echo isset($row['codigo_t']) ? htmlspecialchars($row['codigo_t']) : ''; ?>">
                <!-- codi_t -->
                <label for="txtnome">Nome</label>
                <input type="text" name="txtnome" id="txtnome" value="<?php echo isset($row['nome_t']) ? htmlspecialchars($row['nome_t']) : ''; ?>">
                <label for="txtemail">Email</label>
                <input type="text" name="txtemail" id="txtemail" value="<?php echo isset($row['email_t']) ? htmlspecialchars($row['email_t']) : ''; ?>">
                <label for="txtsexo">Sexo</label>
                <input type="radio" name="txtsexo" id="txtsexo" value="F" <?php if ($row != "") echo ($row['sexo_t'] == "F") ? 'checked' : 'class'; ?>>
                <input type="radio" name="txtsexo" id="txtsexo" value="M" <?php if ($row != "") echo ($row['sexo_t'] == "M") ? 'checked' : 'class'; ?>>
                <label for="txtsenha">Senha</label>
                <input type="password" name="txtsenha" id="txtsenha" value="<?php echo isset($row['senha_t']) ? htmlspecialchars($row['senha_t']) : ''; ?>">
                <label for="txtdata">Data Nascimento</label>
                <input type="date" name="txtdata" id="txtdata" value="<?php echo isset($row['data_t']) ? htmlspecialchars($row['data_t']) : ''; ?>">
                <!-- dtna_t -->
                
                <button class="btn" id="btnPesq" type="submit" onclick="buscarDados()">Pesquisar</button>
                <button class="btn" id="btnSalv" type="submit" onclick="salvarDados()">Salvar</button>
            </form>
            <div class="botoes">
                <a class="btn" href="../index.html">Voltar</a>
            </div>
        </div>
    </main>
    <script>
        function buscarDados() {
            document.getElementById("acao").value = "buscar";
            document.forms[0].submit();
        }

        function salvarDados() {
            document.getElementById("acao").value = "salvar";
            document.forms[0].submit();
        }
    </script>
</body>
</html>