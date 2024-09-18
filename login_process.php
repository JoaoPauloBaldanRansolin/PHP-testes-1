<?php
session_start();
require 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT users.*, roles.role_name FROM users
LEFT JOIN roles ON users.role_id = roles.id
WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->execute(['username' => $username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['role'] = $user['role_name'];
    header('Location: admin_dashboard.php');
} else {
    echo 'Usuário ou senha incorretos';
    //echo "<script>windown.location.href = 'login.php';</script>"
}
