<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>EasyBuy- Cadastro de Produtos </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Cadastrar Produto</h2>
    <f  orm method="POST" class="border p-4 rounded shadow">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Preço</label>
            <input type="number" step="0.01" name="preco" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição</label>
            <textarea name="descricao" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Imagem (URL)</label>
            <input type="text" name="imagem" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary w-100">Salvar</button>
    </form>
    <div class="text-center mt-3">
        <a href="index.php?action=listarProdutos" class="btn btn-link">Listar Produtos</a>
    </div>
</div>
</body>
</html>
