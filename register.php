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
    <div class="container">
        <h1>Cadastrar</h1>
        <form action="checkinfo.php" method="post">
            <span>Nome: <input type="text" name="name" required></span>
            <span>Email: <input type="email" name="email" required></span>
            <span>Telefone: <input type="text" name="phone" required></span>
            <span>
                Sexo:
                <input type="radio" name="sex" id="male" value="male" required>
                <label for="male">Masculino</label>
                <input type="radio" name="sex" id="female" value="female" required>
                <label for="female">Feminino</label>
            </span>
            <span>Senha: <input type="password" name="password" required></span>
            <span>
                <button type="submit">Continuar</button>
                <button type="button" onclick="history.back()">Voltar</buttton>
            </span>
        </form>
    </div>
</body>
</html>