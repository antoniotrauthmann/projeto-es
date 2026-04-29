<?php
require_once __DIR__ . '/../Model/PedidoModel.php';
require_once __DIR__ . '/../Model/EnderecoModel.php';

class PedidoController {
    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function checkout() {
        if (!isset($_SESSION['usuario_id'])) {
            header("Location: index.php?rota=login");
            exit();
        }

        if (empty($_SESSION['carrinho'])) {
            header("Location: index.php?rota=catalogo");
            exit();
        }

        $id_usuario = $_SESSION['usuario_id'];
        
        $enderecoModel = new EnderecoModel($this->db);
        $endereco = $enderecoModel->buscarPrimeiroPorUsuario($id_usuario);

        if (!$endereco) {
            header("Location: index.php?rota=cadastrar_endereco");
            exit();
        }

        $total = 0;
        foreach ($_SESSION['carrinho'] as $item) {
            $total += $item['preco'] * $item['quantidade'];
        }

        $pedidoModel = new PedidoModel($this->db);
        $id_pedido = $pedidoModel->inserir($id_usuario, $endereco['id_endereco'], $total);

        foreach ($_SESSION['carrinho'] as $item) {
            $pedidoModel->inserirItem($id_pedido, $item['id'], $item['quantidade'], $item['preco']);
        }

        // Limpa o carrinho
        $_SESSION['carrinho'] = [];

        header("Location: index.php?rota=pedidos");
        exit();
    }

    public function index() {
        if (!isset($_SESSION['usuario_id'])) {
            header("Location: index.php?rota=login");
            exit();
        }

        $id_usuario = $_SESSION['usuario_id'];
        $model = new PedidoModel($this->db);
        $pedidos = $model->buscarPorUsuario($id_usuario);

        // Buscar itens para cada pedido
        foreach ($pedidos as &$pedido) {
            $pedido['itens'] = $model->buscarItensPorPedido($pedido['id_pedido']);
        }

        include __DIR__ . '/../View/Pedido/index.php';
    }
}
