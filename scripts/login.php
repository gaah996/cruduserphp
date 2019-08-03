<?php

$email = $_POST['email'];
$password = $_POST['password'];

if(!isset($email) || !isset($password)) {
    header('Location: ../index.php');
}

require_once('connect.php');

$query = "SELECT `id`, `name`, `email`, `phone`, `sex` FROM `users` WHERE `email` = '$email' AND `password` = '" . sha1($password) . "'";

if($result = $mysql->query($query)) {
    $rows = $result->num_rows;

    if($rows == 1) {
        $row = $result->fetch_assoc();
        //Login was successfull
        session_start();

        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['sex'] = $row['sex'];

        header('Location: ../dashboard.php');
    } else {
        echo 'Usuário não encontrado. Verifique se o email e senha estão corretos.';
        echo '<a href="../index.php">Página Inicial</a>';
    }
} else {
    echo 'Problema ao consultar o banco de dados';
    echo '<a href="../index.php">Página Inicial</a>';
}

$mysql->close();