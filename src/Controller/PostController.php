<?php
require_once __DIR__ . '/../Model/PostModel.php';
require_once __DIR__ . '/../Helper/Auth.php';

class PostController {
    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function index() {
        Auth::verificar();
        $model = new PostModel($this->db);
        $posts = $model->buscarTodos();
        include __DIR__ . '/../View/feedView.php';
    }

    public function salvar() {
        Auth::verificar();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

    public function curtir() {
    if (isset($_GET['id'])) {
        $id_post = $_GET['id'];
        $model = new PostModel($this->db);
        $model->adicionarCurtida($id_post);
    }
    header("Location: index.php?rota=feed");
    exit();
    }

    public function excluir() {
    if (isset($_GET['id'])) {
        $id_post = $_GET['id'];
        $model = new PostModel($this->db);
        $model->excluir($id_post);
    }
    header("Location: index.php?rota=feed");
    exit();
    }

}