<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="src/View/Cadastro_produto/style.css">
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="src/View/Cadastro_produto/img/img1.png">
        </div>
        <div class="form">
            <form action="index.php?rota=cadastrar_produto" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Seu produto</h1>
                    </div>
                </div>

                <?php if (!empty($erro)): ?>
                    <p class="erro"><?= htmlspecialchars($erro) ?></p>
                <?php endif; ?>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Produto</label>
                        <input id="nome" name="nome" type="text" placeholder="Nome do produto" required>
                    </div>
                    <div class="input-box">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria" required>
                            <option value="">Selecione...</option>
                            <option value="planta">Planta</option>
                            <option value="kit_jardinagem">Kit Jardinagem</option>
                            <option value="suplemento">Suplemento</option>
                            <option value="semente">Semente</option>
                            <option value="ferramenta">Ferramenta</option>
                            <option value="acessorio">Acessório</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="preco">Preço</label>
                        <input id="preco" name="preco" type="number" step="0.01" placeholder="0,00" required>
                    </div>
                    <div class="input-box">
                        <label for="estoque">Estoque</label>
                        <input id="estoque" name="estoque" type="number" placeholder="Quantidade" required>
                    </div>
                </div>

                <div class="publisher-button">
                    <button type="submit">Publicar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>