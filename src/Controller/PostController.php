<?php
require_once __DIR__ . '/../Model/PostModel.php';

class PostController {
    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function index() {
        $model = new PostModel($this->db);
        $posts = $model->buscarTodos();
        include __DIR__ . '/../View/feedView.php';
    }

    public function salvar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Captura o texto do formulário
            $conteudo = $_POST['conteudo_texto']; 
            $titulo = "Post da Comunidade"; 

            $caminho_imagem = null;

            if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
                $extensao = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
                $novo_nome = uniqid() . "." . $extensao;
                $destino = 'public/uploads/' . $novo_nome;

                if (move_uploaded_file($_FILES['imagem']['tmp_name'], $destino)) {
                    $caminho_imagem = $destino;
                }
            }

            $model = new PostModel($this->db);
            $model->inserir(1, $titulo, $conteudo, $caminho_imagem); 

            header("Location: index.php?rota=feed");
            exit();
        }
    }
}