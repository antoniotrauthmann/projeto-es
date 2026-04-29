<?php include __DIR__ . '/../Cabecalho/index.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pedidos - Expresso Verde</title>
    <link rel="stylesheet" href="src/View/Pedido/style.css">
</head>
<body>
    <main class="pedidos-container">
        <h1>Meus Pedidos</h1>
        
        <?php if (empty($pedidos)): ?>
            <div class="empty-pedidos">
                <i class="fa-solid fa-box-open"></i>
                <p>Você ainda não realizou nenhuma compra.</p>
                <a href="index.php?rota=catalogo" class="btn-comprar">Fazer primeira compra</a>
            </div>
        <?php else: ?>
            <div class="pedidos-lista">
                <?php foreach ($pedidos as $pedido): ?>
                    <div class="pedido-card">
                        <div class="pedido-header">
                            <div>
                                <span class="pedido-numero">Pedido #<?php echo $pedido['id_pedido']; ?></span>
                                <span class="pedido-data"><?php echo date('d/m/Y H:i', strtotime($pedido['criado_em'])); ?></span>
                            </div>
                            <span class="pedido-status status-<?php echo strtolower($pedido['status']); ?>">
                                <?php echo ucfirst(str_replace('_', ' ', $pedido['status'])); ?>
                            </span>
                        </div>
                        
                        <div class="pedido-itens">
                            <ul>
                                <?php foreach ($pedido['itens'] as $item): ?>
                                    <li>
                                        <span class="item-qtd"><?php echo $item['quantidade']; ?>x</span>
                                        <span class="item-nome"><?php echo htmlspecialchars($item['produto_nome']); ?></span>
                                        <span class="item-preco">R$ <?php echo number_format($item['preco_unitario'], 2, ',', '.'); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div class="pedido-footer">
                            <span class="pedido-total-label">Total Pago:</span>
                            <span class="pedido-total-valor">R$ <?php echo number_format($pedido['total'], 2, ',', '.'); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </main>
</body>
</html>
