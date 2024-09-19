<?php
require 'db.php';
if (isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $sql = "UPDATE clients SET status = :status WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['status' => $status, 'id' => $id]);
    echo "Status atualizado com sucesso!";
} else {
    echo "Dados incompletos.";
}
