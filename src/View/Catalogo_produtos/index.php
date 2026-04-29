<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/View/Catalogo_produtos/style.css">
</head>
<body>


    <div class="marketplace-grid">
    <?php 
        $sql = "SELECT * FROM produto p LEFT JOIN imagens_produto i ON p.id_produto = i.id_produto GROUP BY p.id_produto"; 
        $result = $mysqli->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo('
                    <form method="POST" action="index.php?rota=produto" class="card-form">
                        
                        <input type="hidden" name="rota" value="produto">
                        <input type="hidden" name="id" value="' . $row["id_produto"] . '">
                        
                        <button type="submit" class="card btn-card">
                            <div class="card-image">
                                <img src="public/uploads/'. $row["produto_caminho_imagem"] . '" alt="' . $row["produto_nome"] . '">
                            </div>
                            <div class="card-content">
                                <div class="card-title">' . $row["produto_nome"] . '</div>
                                <span class="price">R$ ' . $row["preco"] . '</span>
                                <span class="card-condition">'. $row["estoque"] .' em estoque</span>
                                <!-- <div class="location">Paraíso do Tocantins, TO</div> -->
                            </div>
                        </button>
                    </form>
                ');
            }
        } else {
            echo "0 resultados";
        }

        $mysqli->close();
    ?>
    </div>
</body>
</html>