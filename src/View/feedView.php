<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Comunidade</title>
    <style>
        /* Configuração Geral */
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        form, .post {
            background-color: #2d2d2d;
            padding: 20px;
            border-radius: 8px;
            width: 100%;
            max-width: 500px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.3);
        }

        textarea {
            width: 100%;
            background: #3d3d3d;
            border: 1px solid #4d4d4d;
            color: white;
            border-radius: 4px;
            padding: 10px;
            resize: none;
        }

        button {
            background-color: #2ecc71;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

    <h2>Compartilhe com a comunidade</h2>

    <form action="index.php?rota=salvar" method="POST" enctype="multipart/form-data">
        <textarea name="conteudo_texto" placeholder="O que você quer compartilhar?"></textarea>
        <br>
        <input type="file" name="imagem" accept="image/*">
        <br>
        <button type="submit">Postar</button>
    </form>

    <hr>

    <div class="feed">
        <?php if (!empty($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <div class="post" acition 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                    <p><?= htmlspecialchars($post['conteudo']) ?></p>
                    
                    <?php if ($post['caminho_imagem']): ?>
                        <img src="<?= htmlspecialchars($post['caminho_imagem']) ?>" alt="Imagem" style="max-width: 300px;">
                    <?php endif; ?>
                    
                    <br>
                    <small>Postado em: <?= $post['criado_em'] ?></small>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum post ainda. Seja o primeiro a compartilhar</p>
        <?php endif; ?>
    </div>

</body>
</html>