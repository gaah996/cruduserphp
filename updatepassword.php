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
    <title>Trocar senha</title>
    <link rel="stylesheet" href="resources/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Trocar senha</h1>
        <form action="scripts/updatepassword.php" method="post">
            <span>Senha antiga: <input type="password" name="currentpassword" required></span>
            <span>Senha nova: <input type="password" name="newpassword" required></span>
            <span>
                <button type="submit">Salvar</button>
                <button type="button" onclick="history.back()">Voltar</button>
            </span>
        </form>
    </div>
</body>
</html>