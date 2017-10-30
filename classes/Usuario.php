<?php

require_once '../conexao/Crud.php';

class Usuario extends Crud {

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

    public function login_usuario($apelido_usuario, $senhas_usuario) {
        try {
            $sql = "SELECT * FROM usuario WHERE apelido_usuario = :apelido AND senha_usuario = :senha";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':apelido', $apelido_usuario);
            $stmt->bindParam(':senha', $senhas_usuario);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
        } catch (Exception $ex) {
            echo 'Falha ao executar login <br>';
            echo $ex->getMessage();
        }
    }

    public function usuarios_pendente() {
        try {
            $sql = "SELECT * FROM usuario WHERE status_usuario = 'aguardando'";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os Usuários pendentes<br>';
            echo $exc->getMessage();
        }
    }
    
    public function aprovando_usuarios_pendente($id_aprovado) {
        try {
            $sql = "UPDATE usuario SET status_usuario = 'aprovado' WHERE id_usuario = :id_usuario";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_usuario', $id_aprovado);
            $stmt->execute();
            return $stmt;
        } catch (Exception $exc) {
            echo 'Falha ao auterar Usuário pendente<br>';
            echo $exc->getMessage();
        }
    }

}
