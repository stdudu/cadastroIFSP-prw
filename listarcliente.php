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

    $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.ativo, cid.nome nomecidade, cid.estado
    FROM cliente cli 
    LEFT JOIN cidade cid on cid.id = cli.id_cidade";
    //executa consulta
    $result = mysqli_query($con, $sql);

    ?>
    <h1 style="text-align: center;">Consulta de clientes</h1>
    <table align="center" border="1" width="700" style="background-color: lightblue;">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Ativo</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>

        <?php //mysqli_fetch_array le uma linha por vez
            while($row = mysqli_fetch_array($result)) {
                $ativo = $row['ativo'] == 0 ? "Sim" : "Não";
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['nomecliente']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$ativo."</td>";
                echo "<td>".$row['nomecidade']."</td>";
                echo "<td>".$row['estado']."</td>";
                echo "<td><a href = 'alteracliente.php?id=".$row['id']."'>Alterar<a/>
                </td>";
                echo "<td><a href = 'deletacliente.php?id=".$row['id']."'>Deletar<a/>
                </td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>