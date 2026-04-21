<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config/conexao.php';
require_once 'src/Controller/PostController.php';
require_once 'src/Controller/UsuarioController.php';
require_once 'src/Controller/ProdutoController.php';

//(Roteamento simples)
$rota = $_GET['rota'] ?? 'login';

$controller = new PostController($mysqli);
$usuarioController = new UsuarioController($mysqli);
$produtoController = new ProdutoController($mysqli);

if ($rota === 'login') {
    $usuarioController->login();
} elseif ($rota === 'cadastro') {
    $usuarioController->cadastro();
} elseif ($rota === 'logout') {
    $usuarioController->logout();
} elseif ($rota === 'feed') {
    $controller->index();
} elseif ($rota === 'salvar') {
    $controller->salvar();
} elseif ($rota === 'curtir') {
    $controller->curtir();
} elseif ($rota === 'excluir') {
    $controller->excluir();
} elseif ($rota === 'manual') {
    include 'src/View/manualView.php';
} elseif ($rota === 'cadastrar_produto') {
    $produtoController->cadastrar();
} else {
    echo "<h1>404 - Rota não encontrada</h1>";
}