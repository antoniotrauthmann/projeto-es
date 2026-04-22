<link rel="stylesheet" href="src/View/Perfil/style.css">

<?php
$sql = "SELECT * FROM usuario WHERE id_usuario =" . $_SESSION['usuario_id']; 
$result = $mysqli->query($sql);
$result = $result->fetch_assoc();
?>


<div class="profile-container">
    <div class="title-wrapper">
        <h1>Meu Perfil</h1>
    </div>

    <div class="avatar-section">
        <div class="avatar-circle"><?= mb_substr($result["nome"], 0, 1, "UTF-8") ?></div> 
    </div>

    <div class="field-group">
        <label>Nome</label>
        <div class="info-box"><?= $result["nome"] ?></div>
    </div>

    <div class="field-group">
        <label>E-mail</label>
        <div class="info-box"><?= $result["email"] ?></div>
    </div>

    <div class="field-group">
        <label>Data de cadastro</label>
        <div class="info-box"><?= $result["data_cadastro"] ?></div>
    </div>

    <div class="field-group">
        <label>Plano</label>
        <div class="info-box"><?= $result["plano"] ?></div>
    </div>

    <div class="actions">
        <button class="btn-primary">Editar Perfil</button>
        <button class="btn-logout">Sair da conta</button>
    </div>
</div>