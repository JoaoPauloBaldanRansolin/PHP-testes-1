<div class="nav-item">
    <a class="nav-link" href="logout.php">
        Logout
    </a>
</div>
<?php
    session_start();
    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
        echo 'Acesso negado';
        header('Location: login.php');
    }
    require 'db.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $role_name = $_POST['role_name'];
        $sql = "INSERT INTO roles (role_name) VALUES (:role_name)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['role_name' => $role_name]);
        echo "Papel criado com sucesso!";
    }
    $roles = $pdo->query("SELECT * FROM roles")->fetchAll(PDO::FETCH_ASSOC);
?>
<h1>Gerenciar Papéis</h1>
<form method="post">
    <input type="text" name="role_name" placeholder="Nome do Papel"
        required>
    <button type="submit">Criar Papel</button>
</form>
<h2>Papéis Existentes</h2>
<ul>
    <?php foreach ($roles as $role): ?>
        <li><?php echo $role['id'] ." ". $role['role_name'];  ?></li>
    <?php endforeach; ?>
</ul>