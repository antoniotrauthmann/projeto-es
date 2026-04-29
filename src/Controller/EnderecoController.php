<?php
require_once __DIR__ . '/../Model/EnderecoModel.php';

class EnderecoController {
    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function cadastrar() {
        if (!isset($_SESSION['usuario_id'])) {
            header("Location: index.php?rota=login");
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_usuario = $_SESSION['usuario_id'];
            $logradouro = trim($_POST['logradouro']);
            $bairro     = trim($_POST['bairro']);
            $cidade     = trim($_POST['cidade']);
            $cep        = trim($_POST['cep']);
            $zona       = $_POST['zona'];

            $model = new EnderecoModel($this->db);
            $model->inserir($id_usuario, $logradouro, $bairro, $cidade, $cep, $zona);

            // Redirecionar para o checkout após cadastrar endereço
            header("Location: index.php?rota=checkout");
            exit();
        }

        include __DIR__ . '/../View/Endereco/index.php';
    }
}
