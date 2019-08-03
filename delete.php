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
    <title>Excluir conta</title>
    <link rel="stylesheet" href="resources/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Excluir conta</h1>
        <p>Digite a sua senha para confirmar a exclusão da conta</p>
        <form action="scripts/delete.php" method="post">
            <span>Senha: <input type="password" name="password" required></span>
            <span>
                <button type="submit">Excluir</button>
                <button type="button" onclick="history.back()">Voltar</button>
            </span>
        </form>
    </div>
</body>
</html>