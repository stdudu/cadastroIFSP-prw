<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Formulário de cadastro da cidade</title>
</head>
<body>
    <form action="cadastrocliente.php" method="post">
        <div class="card">
        <fieldset>
            <legend>Cadastro de Ciadades</legend>
            <legend>Cadastro Cliente</legend>
            <div class="inputgroup1">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">
            </div>
            <br>
            <div class="inputgroup">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <br>
            <div class="inputgroup">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <br>
            <div class="inputgroup">
                <label for="ativo">Ativo</label>
                <input type="radio" name="ativo" value="0" id="ativo">
                <label for="op-sim">Sim</label>

                <input type="radio" name="ativo" value="1" id="ativo">
                <label for="op-nao">Não</label>
            </div class="inputgroup">
            <br>
            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php
                    include('include/conexao.php');
                    $sql = "SELECT * FROM cidade";
                    $result = mysqli_query($con, $sql);
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <button type="submit" style="border-radius: 16px; border: 0.1px solid black; background-color: whitesmoke; color: rgb(0, 0, 0);">Cadastrar</button>
            </div>
        </div>
    </fieldset>
    </form>
</body>
</html>