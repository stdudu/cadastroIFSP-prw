<?php
    include('include/conexao.php');
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cliente</title>
</head>
<body>
    <h1>Alterando Cliente</h1>
    <?php
        echo "<p>ID: $id</p>";
        echo "<p>CPF: $cpf</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Senha: $senha</p>";
        $sql = "UPDATE cliente SET
                    cpf = '$cpf',
                    nome = '$nome',
                    email = '$email'
                    senha = '$senha'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Dados atualizados";
        }
        else{
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
        }
    ?>
</body>
</html>