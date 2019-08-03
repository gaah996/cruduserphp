<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if(!isset($name) || !isset($email) || !isset($phone)) {
    header('Location: ../dashboard.php');
}

session_start();

require_once('connect.php');

//First checks if email is not already in use
$query = "SELECT COUNT(*) FROM `users` WHERE `email` = '$email'";

if($result = $mysql->query($query)) {
    $row = $result->fetch_row();

    if($row[0] == 1 && $email != $_SESSION['email']) {
        echo 'Já existe um usuário com esse email';
        echo '<button onclick="history.back()">Voltar</button>';
    } else {
        //Register the user in the database
        $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `phone` = '$phone' WHERE `id` = '" . $_SESSION['id'] . "'";

        if($mysql->query($query)) {
            echo 'Dados alterados com sucesso';

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
        } else {
            echo 'Problema ao alterar os dados';
        }
    }
} else {
    echo 'Problema ao consultar o banco de dados';
}

echo '<a href="../dashboard.php">Dashboard</a>';

$mysql->close();