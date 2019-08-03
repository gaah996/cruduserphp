<?php

$password = $_POST['password'];

if(!isset($password)) {
    header('Location: ../dashboard.php');
}

session_start();

require_once('connect.php');

//First checks if email is not already in use
$query = "SELECT COUNT(*) FROM `users` WHERE `id` = '" . $_SESSION['id'] . "' AND `password` = '" . sha1($password) . "'";

if($result = $mysql->query($query)) {
    $row = $result->fetch_row();

    if($row[0] == 0) {
        echo 'A senha está incorreta.';
        echo '<button onclick="history.back()">Voltar</button>';
    } else {
        //Register the user in the database
        $query = "DELETE FROM `users` WHERE `id` = '" . $_SESSION['id'] . "'";

        if($mysql->query($query)) {
            echo 'Usuário excluído com sucesso';
            echo '<a href="logout.php">Sair</a>';

        } else {
            echo 'Problema ao excluir usuário';
            echo '<a href="../dashboard.php">Dashboard</a>';
        }
    }
} else {
    echo 'Problema ao consultar o banco de dados';
    echo '<a href="../dashboard.php">Dashboard</a>';
}


$mysql->close();