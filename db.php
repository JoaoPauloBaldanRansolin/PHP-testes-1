<?php
$host = 'localhost';
$dbname = 'banco';
$port = '3306';
$username = 'root'; // Substitua pelo seu usuário do MySQL
$password = ''; // Substitua pela sua senha do MySQL
try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Conexão falhou: ' . $e->getMessage());
}
