<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">

<div class="container mt-5">
    <h2 class="text-center mb-4">Lista de Produtos</h2>
    <div class="text-center mb-4">
        <a href="index.php?action=cadastrarProduto" class="btn btn-success">Cadastrar Novo Produto</a>
    </div>

    <div class="row">
        <?php foreach ($produtos as $p): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <?php if ($p['imagem']): ?>
                        <img src="<?= htmlspecialchars($p['imagem']) ?>" class="card-img-top" alt="<?= htmlspecialchars($p['nome']) ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($p['nome']) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($p['descricao']) ?></p>
                    </div>
                    <div class="card-footer">
                        <strong>R$ <?= number_format($p['preco'], 2, ',', '.') ?></strong>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
