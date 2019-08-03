<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();

        if(!$_SESSION['loggedin']) {
            header('Location: scripts/logout.php');
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="resources/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="header">
        <p>Olá <?php echo $_SESSION['name']; ?>, bem-vindo <?php echo $_SESSION['id'] ?></p>
    </div>
    <div class="container">
        <h1>Menu</h1>
        <span><a href="update.php">Atualizar dados</a></span>
        <span><a href="updatepassword.php">Trocar senha</a></span>
        <span><a href="delete.php">Deletar usuário</a></span>
        <span><a href="scripts/logout.php">Sair</a></span>
    </div>
</body>
</html>