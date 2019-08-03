<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar</title>
    <link rel="stylesheet" href="resources/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sex = $_POST['sex'];
        $password = $_POST['password'];

        if(!isset($name) || !isset($email) || !isset($phone) || !isset($sex) || !isset($password)) {
            header('Location: register.php');
        }
    ?>
    <div class="container">
        <h1>Verificar informações</h1>
        <form action="scripts/register.php" method="post">
            <span><input type="hidden" name="name" value="<?php echo $name; ?>"></span>
            <span><input type="hidden" name="email" value="<?php echo $email; ?>"></span>
            <span><input type="hidden" name="phone" value="<?php echo $phone; ?>"></span>
            <span><input type="hidden" name="sex" value="<?php echo $sex; ?>"></span>
            <span><input type="hidden" name="password" value="<?php echo $password; ?>"></span>

            <p><strong>Nome: </strong><?php echo $name; ?></p>
            <p><strong>Email: </strong><?php echo $email; ?></p>
            <p><strong>Telefone: </strong><?php echo $phone; ?></p>
            <p><strong>Sexo: </strong><?php echo ($sex == 'male') ? 'Masculino' : 'Feminino'; ?></p>
            <p><strong>Senha: </strong><?php echo $password; ?></p>

            <span>
                <button type="submit">Salvar</button>
                <button type="button" onclick="history.back()">Voltar</button>
            </span>
        </form>
    </div>
</body>
</html>