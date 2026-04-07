<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config/conexao.php';
require_once 'src/Controller/PostController.php';

//(Roteamento simples)
$rota = $_GET['rota'] ?? 'feed';

$controller = new PostController($mysqli);

if ($rota === 'feed') {
    $controller->index();
} elseif ($rota === 'salvar') {
    $controller->salvar();
} else {
    echo "<h1>404 - Rota não encontrada</h1>";
}