<?php
require_once __DIR__ . '/../Model/ProdutoModel.php';

class ProdutoController {
    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function cadastrar() {
        $erro = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome      = trim($_POST['nome']);
            $categoria = $_POST['categoria'];
            $preco     = $_POST['preco'];
            $estoque   = $_POST['estoque'];

            $model = new ProdutoModel($this->db);
            $model->inserir($nome, $categoria, $preco, $estoque);

            header("Location: index.php?rota=cadastrar_produto");
            exit();
        }

        include __DIR__ . '/../View/Cadastro_produto/index.php';
    }
}