<?php 
require_once 'Database.php';

class User {
private $db;
public function __construct()
{
    $this ->db = (new Database()) ->connect();
}

public function adicionarUsuario($nome, $cpf, $telefone, $email, $musica)
{
    $sql = "INSERT INTO cadastrouser (nome, cpf, telefone, email, musica) VALUES (:nome, :cpf, :telefone, :email, :musica)";
    $query = $this->db->prepare($sql);
    $query->execute([
        'nome' => $nome,
        'cpf' => $cpf,
        'telefone' => $telefone,
        'email' => $email,
        'musica' => $musica
    ]);
}

}