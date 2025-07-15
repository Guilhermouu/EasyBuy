<?php
namespace App\Controllers;

use App\Models\Produto;

class ProdutoController
{
    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $produto = new Produto();
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $descricao = $_POST['descricao'];
            $imagem = $_POST['imagem'] ?? null;

            $produto->create($nome, $preco, $descricao, $imagem);
            header('Location: index.php?action=listarProdutos');
            exit;
        }

        include '../app/Views/produtos/cadastrar.php';
    }

    public function listar()
    {
        $produto = new Produto();
        $produtos = $produto->all();
        include '../app/Views/produtos/listar.php';
    }
}
