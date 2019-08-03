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
    <title>Alterar dados</title>
    <link rel="stylesheet" href="resources/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Alterar dados</h1>
        <form action="scripts/update.php" method="post">
            <span>Nome: <input type="text" name="name" required value="<?php echo $_SESSION['name']; ?>"></span>
            <span>Email: <input type="email" name="email" required value="<?php echo $_SESSION['email']; ?>"></span>
            <span>Telefone: <input type="text" name="phone" required value="<?php echo $_SESSION['phone']; ?>"></span>
            <span><strong>Sexo: </strong><?php echo ($_SESSION['sex'] == 'male') ? 'Masculino' : 'Feminino'; ?></span>
            <span>
                <button type="submit">Salvar</button>
                <button type="button" onclick="history.back()">Voltar</button>
            </span>
        </form>
    </div>
</body>
</html>