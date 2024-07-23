<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        include('include/conexao.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $ativo = $_POST['ativo'] == "sim" ? true : false;
        $cidade = $_POST['cidade'];

        echo "<h1>Dados do cliente<h1>";
        echo "Nome: $nome<br>";
        echo "Email: $email<br>";
        echo "Senha: $senha<br>";
        echo "Ativo: " . $ativo ? "Sim" : "Não". "<br>";

        //INSERT INTO cidade (nome, estado)
        //VALUES ('$nome', '$estado')

        $sql = "INSERT INTO cliente (nome, email, senha, id_cidade, ativo)";
        $ativo = $ativo ? 0 : 1;
        $sql .= "VALUES ('".$nome."','".$email."', '".$senha."',".$ativo.", ".$cidade.")";
        echo $sql;

        //executa comando no banco de dados
        $result = mysqli_query($con, $sql);
        if($result) {
            echo "<h2>Dados cadastrados com sucesso<h2>";
        } else {
            echo "<h2>Erro ao cadastrar<h2>";
            echo mysqli_error($con);
        }

    ?>
</body>
</html>