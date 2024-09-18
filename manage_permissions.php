<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo 'Acesso negado';
    header('Location: login.php');
}
require 'db.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $permission_name = $_POST['permission_name'];
    $sql = "INSERT INTO permissions (permission_name) VALUES (:permission_name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['permission_name' => $permission_name]);
    echo "Permissão criada com sucesso!";
}
$permissions = $pdo->query("SELECT * FROM permissions")->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Gerenciar Permissões</h1>

<form method="post">
    <input type="text" name="permission_name" placeholder="Nome da Permissão" required>
    <button type="submit">Criar Permissão</button>
</form>

<h2>Permissões Existentes</h2>

<div class="nav-item">
    <a class="nav-link" href="logout.php">
        Logout
    </a>
</div>

<ul>
    <?php foreach ($permissions as $permission): ?>
        <li><?php echo $permission["id"] . " " . $permission['permission_name']; ?></li>
    <?php endforeach; ?>
</ul>