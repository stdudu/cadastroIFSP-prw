<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        include('menu.php');
    ?>
</head>
<body>
    <form action="login.php" method="post">
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            <br>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">
            </div>
            <br>
            <div>
                <button type="submit">Logar</button>
            </div>
    </form>
</body>
</html>