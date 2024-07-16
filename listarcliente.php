<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: azure;">
    <?php

    include("include/conexao.php");

    $sql = "SELECT * FROM cliente";
    //executa consulta
    $result = mysqli_query($con, $sql);

    ?>

    <h1 style="text-align: center;">Consulta de Clientes</h1>
    <table align="center" border="1" width="500" style="background-color: lightblue;">
        <tr>
            <th>CPF</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>

        <?php //mysqli_fetch_array le uma linha por vez
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['cpf']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['senha']."</td>";
                echo "<td>".$row['senha']."</td>";
                echo "<td><a href = 'alteracliente.php?id=".$row['cpf']."'>Alterar<a/></td>
                </td>";
                echo "<td><a href = 'deletacidade.php?id=".$row['cpf']."'>Deletar<a/></td>
                </td>";
                echo "</tr>";
            }

        ?>
    </table>
</body>
</html>