<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="src/View/Login/style.css">
</head>
<body>
    <div class="container">
        <div class="form-image">
            <img src="src/View/Login/img/img2.png" alt="Imagem de login">
        </div>
        <div class="form">
            <form action="index.php?rota=login" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Entre na conta</h1>
                    </div>
                </div>

                <?php if (!empty($erro)): ?>
                    <p class="erro"><?= htmlspecialchars($erro) ?></p>
                <?php endif; ?>

                <div class="input-box">
                    <label for="email">E-mail</label>
                    <input id="email" name="email" type="email" placeholder="Digite o e-mail" required>
                </div>
                <div class="input-box">
                    <label for="senha">Senha</label>
                    <input id="senha" name="senha" type="password" placeholder="Digite a senha" required>
                </div>
                <div class="continue-button">
                    <button type="submit">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>