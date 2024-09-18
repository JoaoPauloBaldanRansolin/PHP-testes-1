<?php
require 'db.php';
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$sql = "INSERT INTO users (username, password, role_id) VALUES (:username,
:password, '3')";
$stmt = $pdo->prepare($sql);

if ($stmt->execute(['username' => $username, 'password' =>
$password])) {
    header('Location: login.php');
} else {
    echo 'Erro ao registrar usuário';
}
