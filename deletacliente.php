<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css"><link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleção de Cliente</title>
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <h1>Deletar Cliente</h1>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE 
                FROM cliente 
                WHERE id = $id";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados deletados!</h2>";
        }else{
            echo "<h2>Erro ao deletar!</h2>";
            echo "<h2>".mysqli_error($con)."</h2>";
        }
    ?>
</body>
</html>