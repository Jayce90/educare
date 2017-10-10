<?php
require_once '../conexao/Crud.php';
 
class Aluno extends Crud {
    private $nome;
    private $sexo;
    private $nascimento;
    private $idade;
    private $especial;
    private $nis;
    private $certidao;
    private $mae;
    private $pai;
    private $fone;
    private $endereco;
    private $serie;
    private $repetente;
    private $transporte;
    private $status;
    
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    
    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }
    
    function setIdade($idade) {
        $this->idade = $idade;
    }
    
    function setEspecial($especial) {
        $this->especial = $especial;
    }
    
    function setNis($nis) {
        $this->nis = $nis;
    }
    
    function setCertidao($certidao) {
        $this->certidao = $certidao;
    }
    
    function setMae($mae) {
        $this->mae = $mae;
    }
    
    function setPai($pai) {
        $this->pai = $pai;
    }
    
    function setFone($fone) {
        $this->fone = $fone;
    }
    
    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    
    function setSerie($serie) {
        $this->serie = $serie;
    }
    
    function setRepetente($repetente) {
        $this->repetente = $repetente;
    }
    
    function setTransporte($transporte) {
        $this->transporte = $transporte;
    }
    
    function setStatus($status) {
        $this->status = $status;
    }
    
}
