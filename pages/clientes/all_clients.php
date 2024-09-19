<?php
require 'db.php';
$sql = "SELECT * FROM clients";
$stmt = $pdo->query($sql);
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Todos os Clientes</h2>
<a href="clientes.php?page=add_client" class="btn btn-success
mb-3">Adicionar Cliente</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $client['id'] ?></td>
                <td><?= $client['name'] ?></td>
                <td><?= $client['email'] ?></td>
                <td><?= $client['phone'] ?></td>
                <td>
                    <a
                        href="clientes_controller.php?action=edit&id=<?= $client['id'] ?>"
                        class="btn btn-warning">Editar</a>
                    <a
                        href="clientes_controller.php?action=delete&id=<?= $client['id'] ?>"
                        class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este cliente?')">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>