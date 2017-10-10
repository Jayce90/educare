<?php

require_once '../conexao/Crud.php';

class Escola extends Crud {
    
    private $inep;
    private $nome;
    private $localidade;
    private $endereco;
    private $id_diretor;
    private $fone;
    private $id_polo;
            
    function setInep($inep){
        $this->inep = $inep;
    }
    
    function setNome($nome){
        $this->nome = $nome;
    }
    
    function setLocalidade($localidade){
        $this->localidade = $localidade;
    }
    
    function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    
    function setId_diretor($id_diretor){
        $this->id_diretor = $id_diretor;
    }
    
    function setFone($fone){
        $this->fone = $fone;
    }
    
    function setId_polo($id_polo){
        $this->id_polo = $id_polo;
    }
    
}
