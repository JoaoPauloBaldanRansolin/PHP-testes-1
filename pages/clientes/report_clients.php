<?php
    require 'db.php';
    $total_clients = $pdo->query("SELECT COUNT(*) FROM
    clients")->fetchColumn();
?>

<h2>Relatório de Clientes</h2>
<p>Total de clientes cadastrados: <?= $total_clients ?></p>