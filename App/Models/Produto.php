<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Produto
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance();
    }

    public function create($nome, $preco, $descricao, $imagem)
    {
        $sql = "INSERT INTO produtos (nome, preco, descricao, imagem) VALUES (:nome, :preco, :descricao, :imagem)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':preco', $preco);
        $stmt->bindParam(':descricao', $descricao);
        $stmt->bindParam(':imagem', $imagem);
        return $stmt->execute();
    }

    public function all()
    {
        $stmt = $this->conn->query("SELECT * FROM produtos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
