<?php
// Conectar ao banco de dados
require 'db.php';
// Consultar os clientes por status
$clientes_prospect = $pdo->query("SELECT * FROM clients WHERE
status = 'prospect'")->fetchAll();

$clientes_negociacao = $pdo->query("SELECT * FROM clients WHERE
status = 'negociacao'")->fetchAll();

$clientes_ativo = $pdo->query("SELECT * FROM clients WHERE 
status ='ativo'")->fetchAll();

$clientes_fechado = $pdo->query("SELECT * FROM clients WHERE 
status= 'fechado'")->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1.0">
    <title>Kanban - Gestão de Clientes</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/kanban.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row kanban-board">
            <div class="kanban-column" data-status="prospect">
                <h2>Prospect</h2>
                <div class="kanban-cards" id="prospect">
                    <?php foreach ($clientes_prospect as $cliente): ?>
                        <div class="kanban-card col-md-4" data-id="<?= $cliente['id'] ?>" draggable="true">
                            <?= htmlspecialchars($cliente['name']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['email']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['phone']) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="kanban-column" data-status="negociacao">
                <h2>Em Negociação</h2>
                <div class="kanban-cards" id="negociacao">
                    <?php foreach ($clientes_negociacao as $cliente): ?>
                        <div class="kanban-card col-md-4" data-id="<?= $cliente['id'] ?>" draggable="true">
                            <?= htmlspecialchars($cliente['name']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['email']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['phone']) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="kanban-column" data-status="ativo">
                <h2>Cliente Ativo</h2>
                <div class="kanban-cards" id="ativo">
                    <?php foreach ($clientes_ativo as $cliente): ?>
                        <div class="kanban-card col-md" data-id="<?= $cliente['id'] ?>" draggable="true">
                            <?= htmlspecialchars($cliente['name']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['email']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['phone']) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="kanban-column" data-status="fechado">
                <h2>Fechado</h2>
                <div class="kanban-cards" id="fechado">
                    <?php foreach ($clientes_fechado as $cliente): ?>
                        <div class="kanban-card col-md" data-id="<?= $cliente['id'] ?>" draggable="true">
                            <?= htmlspecialchars($cliente['name']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['email']) ?>
                            <br>
                            <?= htmlspecialchars($cliente['phone']) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/kanban.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>