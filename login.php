<?php
    include('include/conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cliente WHERE email = '$email'";

    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        if($row['senha'] == $senha){
            include('inicia_sessao.php');
            $_SESSION['login'] = $row;
            // Volta para a página inicia
            header('Location: index.php');
        }
        else{
            echo "<h1>Senha invalida</h1>";
            echo "<h4>Sua senha é ".$row['senha']."</h4>";
        }
    }
?>