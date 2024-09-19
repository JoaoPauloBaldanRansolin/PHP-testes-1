<?php
require 'db.php';
$action = $_GET['action'];
if ($action == 'add') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sql = "INSERT INTO clients (name, email, phone) VALUES (:name,
:email, :phone)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'email' => $email, 'phone' =>
    $phone]);
    header('Location: clientes.php?page=all_clients');
} elseif ($action == 'edit') {
    $id = $_GET['id'];
    // lógica para editar o cliente
    $sql = "SELECT * FROM clients WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $client = $stmt->fetch();

    if (!$client) {
        die('Cliente não encontrado.');
    }

    // Se o formulário de edição for enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $sql = "UPDATE clients SET name = :name, email = :email, phone = :phone WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['name' => $name, 'email' => $email, 'phone' => $phone, 'id' => $id]);
        
        header('Location: clientes.php?page=all_clients');
    }
    include "/xampp/htdocs/ex01/pages/clientes/edit_client.php";
} elseif ($action == 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM clients WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    header('Location: clientes.php?page=all_clients');
}
