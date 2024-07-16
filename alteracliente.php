<?php
    include('include/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM Cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro da cidade</title>
</head>
<body>
    <form action="alteraclienteexe.php" method="post">
        <fieldset>
            <legend>Cadastro Cidade</legend>
            <div>
                <label for="cpf">ID</label>
                <input type="number" name="nome" id="cpf" value="<?php echo $row['cpf']?>">
            </div>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php echo $row['email']?>">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>">
            </div>
            <br>
            <br>
            <div>
                <input type="hidden" name="id" 
                value="<?php echo $row['id']?>">
            </div>
            <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>