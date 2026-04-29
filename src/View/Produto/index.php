
<link rel="stylesheet" href="src/View/Produto/style.css">

<?php
$sql = "SELECT * FROM produto p LEFT JOIN imagens_produto i ON p.id_produto = i.id_produto WHERE p.id_produto =" . $_POST['id']; 
$result = $mysqli->query($sql);
$first_result = $result->fetch_assoc();
?>

<div class="product-container">
    <div class="left-column">
        <div class="main-image">
            <?= '<img src="public/uploads/'. $first_result["produto_caminho_imagem"] .'">'?>
        </div>
        <div class="thumbnail-gallery">
            <?= '<img src="public/uploads/'. $first_result["produto_caminho_imagem"] .'">'?>
            <?php while($row = $result->fetch_assoc()) { ?>
            <?= '<img src="public/uploads/'. $row["produto_caminho_imagem"] .'">'?>
            <?php } ?>
        </div>
    </div>

    <div class="right-column">
        <div class="breadcrumbs">
            ferramentas / escavação / pá
        </div>
        
        <h1 class="product-title"><?= $first_result["produto_nome"]?></h1>
        
        <div class="promo-tag">
            <?= "R$ ". ($first_result["preco"] - ($first_result["preco"]/5)) . " na 1ª compra"?>
        </div>
        
        <div class="price-section">
            <span class="current-price"><?= "R$ ". ($first_result["preco"])?></span>
            <p class="installments">em até <strong><?= "2x R$ ". ($first_result["preco"]/2)?></strong></p>
        </div>
        
        <div class="action-buttons">
            <button class="btn-primary">comprar agora</button>
            <button class="btn-secondary">adicionar ao carrinho</button>
        </div>
        
        <div class="description-section">
            <h2>descrição do produto</h2>
            <p><?= $first_result["descricao"]?></p>
        </div>

        <div class="brand-section">
            <div class="brand-info">
                <span>marca</span>
                <strong>qualquer uma</strong>
            </div>
        </div>
    </div>
</div>