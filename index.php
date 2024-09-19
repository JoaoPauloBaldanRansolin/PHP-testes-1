<?php
// Verifica se a variável 'page' está definida na URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
// Lista de páginas permitidas
$allowed_pages = ['home', 'about', 'contact'];
// Verifica se a página solicitada está na lista de páginas

if (in_array($page, $allowed_pages)) {
    // Redireciona para a página correspondente
    header("Location: pages/{$page}.php");
    exit();
} else {
    // Redireciona para a página 404 se a página não for permitida
    header("Location: pages/error.php");
    exit();
} ?>