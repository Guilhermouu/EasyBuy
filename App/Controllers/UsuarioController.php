<?php
namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController
{
    public function cadastrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario();
            $usuario->create($_POST['nome'], $_POST['email'], $_POST['senha']);
            header('Location: index.php?action=login');
            exit;
        }

        include '../app/Views/usuarios/cadastrar.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = new Usuario();
            $user = $usuario->auth($_POST['email'], $_POST['senha']);

            if ($user) {
                session_start();
                $_SESSION['usuario'] = $user;
                header('Location: index.php?action=listarProdutos');
                exit;
            } else {
                echo "Login inválido!";
            }
        }

        include '../app/Views/usuarios/login.php';
    }
}
