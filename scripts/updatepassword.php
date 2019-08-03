<?php

$currentPassword = $_POST['currentpassword'];
$newPassword = $_POST['newpassword'];

if(!isset($currentPassword) || !isset($newPassword)) {
    header('Location: ../dashboard.php');
}

session_start();

require_once('connect.php');

//First checks if email is not already in use
$query = "SELECT COUNT(*) FROM `users` WHERE `id` = '" . $_SESSION['id'] . "' AND `password` = '" . sha1($currentPassword) . "'";

if($result = $mysql->query($query)) {
    $row = $result->fetch_row();

    if($row[0] == 0) {
        echo 'A senha antiga está incorreta.';
        echo '<button onclick="history.back()">Voltar</button>';
    } else {
        //Register the user in the database
        $query = "UPDATE `users` SET `password` = '" . sha1($newPassword) . "' WHERE `id` = '" . $_SESSION['id'] . "'";

        if($mysql->query($query)) {
            echo 'Senha alterada com sucesso';
        } else {
            echo 'Problema ao alterar a senha';
        }
    }
} else {
    echo 'Problema ao consultar o banco de dados';
}

echo '<a href="../dashboard.php">Dashboard</a>';

$mysql->close();