<h2>Adicionar Cliente</h2>
<form action="clientes_controller.php?action=add" method="post">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" id="name" name="name"
            class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email"
            class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone</label>
        <input type="text" id="phone" name="phone"
            class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Salvar</button>
</form>