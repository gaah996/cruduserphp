<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="resources/style.css">
    <link rel="shortcut icon" href="resources/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <h1>Entrar</h1>
        <form action="scripts/login.php" method="post">
            <span>Email: <input type="email" name="email" required></span>
            <span>Senha: <input type="password" name="password" required></span>
            <span>
                <button type="submit">Entrar</button>
                <button type="button" onclick="location.href='register.php'">Criar usuário</button>
            </span>
        </form>
    </div>
</body>
</html>