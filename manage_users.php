<div class="nav-item">
    <a class="nav-link" href="logout.php">
        Logout
    </a>
</div>
<?php
session_start();
require 'db.php';


if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo 'Acesso negado';
    header('Location: login.php');
}

// Verificar se o usuário tem a permissão
$user_id = $_SESSION['user_id'];
$sql = "SELECT p.permission_name FROM permissions p
    JOIN role_permissions rp ON p.id = rp.permission_id
    JOIN roles r ON rp.role_id = r.id
    JOIN users u ON u.role_id = r.id
    WHERE u.id = :user_id AND p.permission_name = 'manage_users'";

$stmt = $pdo->prepare($sql);
$stmt->execute(['user_id' => $user_id]);
if ($stmt->rowCount() === 0) {
    die('Você não tem permissão para acessar esta página');
    header('Location: admin_dashboard.php');
}
echo "Bem-vindo à página de gerenciamento de usuários!";

// Consulta para listar usuários

$sql_users = "SELECT users.*, roles.role_name FROM users
LEFT JOIN roles ON users.role_id = roles.id";
//  WHERE users.id = :user_id

$stmt_users = $pdo->prepare($sql_users);
$stmt_users->execute();
$users = $stmt_users->fetchAll(PDO::FETCH_ASSOC);
// print_r($users);
?>

<h1>Gerenciamento de Usuários</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>NIvel de acesso</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= htmlspecialchars($user['id']) ?></td>
                <td><?= htmlspecialchars($user['username']) ?></td>
                <td><?= htmlspecialchars($user['role_name']) ?></td>
                <td>
                    <a href="edit_user.php?id=<?= htmlspecialchars($user['id']) ?>" class="btn btn-warning">Editar</a>
                    <a href="delete_user.php?id=<?= htmlspecialchars($user['id']) ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este usuário?')">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>