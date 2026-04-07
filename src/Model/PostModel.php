<?php
class PostModel {
    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function buscarTodos() {
        $sql = "SELECT * FROM `post_comunidade` ORDER BY `id_post` DESC";;
        $resultado = $this->db->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }

    public function inserir($id_usuario, $titulo, $conteudo, $caminho_imagem) {
    $stmt = $this->db->prepare("INSERT INTO post_comunidade (id_usuario, titulo, conteudo, caminho_imagem, curtidas) VALUES (?, ?, ?, ?, 0)");
    $stmt->bind_param("isss", $id_usuario, $titulo, $conteudo, $caminho_imagem);
    return $stmt->execute();
    }
}