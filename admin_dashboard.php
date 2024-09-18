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
echo "<h1>Bem-vindo ao Painel de Administração</h1>";
echo "<p>Você está logado como {$_SESSION['username']}</p>";
?>

<ul>
    <li><a href="manage_users.php">Gerenciar Usuários</a></li>
    <li><a href="manage_roles.php">Gerenciar Papéis</a></li>
    <li><a href="manage_permissions.php">Gerenciar
            Permissões</a></li>
</ul>