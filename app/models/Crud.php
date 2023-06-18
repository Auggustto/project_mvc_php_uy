<?php

namespace app\models;

// Para puxar a conexão com db precisamos do extends Connection
class Crud extends Connection
{
    // Criando os metodos do CRUD
    public function create()
    {
        // Pegando o método connect
        $conn = $this->connect();

        // Pegando os valores do forms views/cadastro
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        if($nome and $email != null){
            
        // Inserindo os dados da variável no banco de dados
        $sql = "INSERT INTO tb_person VALUES (default, :nome, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt;
        
        $nome = "";
        $email = "";

        }
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = 'SELECT * FROM tb_person ORDER BY nome';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function editForm()
    {
        // Pegando a vareavel ID que está sendo enviada via URL
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();
        $sql = "SELECT * FROM tb_person WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}