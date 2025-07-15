<?php
require_once '../vendor/autoload.php';

use App\Controllers\ProdutoController;
use App\Controllers\UsuarioController;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

session_start();

$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'cadastrarProduto':
        (new ProdutoController())->cadastrar();
        break;
    case 'listarProdutos':
        (new ProdutoController())->listar();
        break;
    case 'cadastrarUsuario':
        (new UsuarioController())->cadastrar();
        break;
    case 'login':
    default:
        (new UsuarioController())->login();
        break;
}
