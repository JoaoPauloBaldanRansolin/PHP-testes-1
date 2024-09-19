<?php
// Verificar se a ação é "edit" e se o ID do cliente está presente
if ($action == 'edit' && isset($client)) :
?>
    <h2>Editar Cliente</h2>
    <form action="clientes_controller.php?action=edit&id=<?= $client['id'] ?>" method="POST">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="<?= htmlspecialchars($client['name']) ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($client['email']) ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" name="phone" id="phone" value="<?= htmlspecialchars($client['phone']) ?>" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
    <?php else : ?>
    <p>Cliente não encontrado ou ação inválida.</p>
<?php endif;?>

<?php ($action == 'edit' && isset($client)) ? "Será editado" : "não será editado" ;?>

