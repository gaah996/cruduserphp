<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$password = $_POST['password'];

if(!isset($name) || !isset($email) || !isset($phone) || !isset($sex) || !isset($password)) {
    header('Location: ../index.php');
}

require_once('connect.php');

//First checks if email is not already in use
$query = "SELECT COUNT(*) FROM `users` WHERE `email` = '$email'";

if($result = $mysql->query($query)) {
    $row = $result->fetch_row();

    if($row[0] == 1) {
        echo 'Já existe um usuário com esse email';
        echo '<button onclick="history.go(-2)">Voltar</button>';
    } else {
        //Register the user in the database
        $query = "INSERT INTO `users`(`name`, `email`, `phone`, `sex`, `password`) VALUES ('$name','$email','$phone','$sex','" . sha1($password) . "')";

        if($mysql->query($query)) {
            echo 'Usuário cadastrado com sucesso';
        } else {
            echo 'Problema ao cadastrar o usuário';
        }
    }
} else {
    echo 'Problema ao consultar o banco de dados';
}

echo '<a href="../index.php">Página Inicial</a>';

$mysql->close();