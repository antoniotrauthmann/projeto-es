<?php
class ProdutoModel {
    private $db;

    public function __construct($mysqli) {
        $this->db = $mysqli;
    }

    public function inserir($nome, $categoria, $preco, $estoque, $id_loja = null) {
        $stmt = $this->db->prepare(
            "INSERT INTO produto (nome, categoria, preco, estoque, id_loja) VALUES (?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("ssdii", $nome, $categoria, $preco, $estoque, $id_loja);
        $stmt->execute();
    }
}