<?php

require_once '../conexao/Crud.php';

class Usuário extends Crud {

    private $nome;
    private $email;
    private $fone;
    private $cpf;
    private $apelido;
    private $senha;
    private $perfil;
    private $status;
    private $id_escola;

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    function setApelido($apelido) {
        $this->apelido = $apelido;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setStatus($status) {
        $this->status = $status;
    }
    
    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }

    public function inserir_usuario() {
        try {
            $sql = "INSERT INTO usuario (nome_usuario, email_usuario, fone_usuario, cpf_usuario, apelido_usuario, senha_usuario, perfil_usuario, status_usuario, escola_id_escola) "
                    . "VALUES (:nome, :email, :fone, :cpf, :apelido, :senha, :perfil, :status, :id_escola)";

            $stmt = DB::prepare($sql);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':fone', $this->fone);
            $stmt->bindParam(':cpf', $this->cpf);
            $stmt->bindParam(':apelido', $this->apelido);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->bindParam(':perfil', $this->perfil);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':id_escola', $this->id_escola);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir Usuário<br>';
            echo $ex->getMessage();
        }
    }

}