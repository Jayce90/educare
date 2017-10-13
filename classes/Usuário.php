<?php
require_once '../conexao/Crud.php';

class Usuário extends Crud{
    private $nome;
    private $email;
    private $fone;
    private $apelido;
    private $senha;
    private $perfil;
    private $status;
    
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setEmail($email) {
        $this->email = $email;
    }
    
    function setFone($fone) {
        $this->fone = $fone;
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
    
}
