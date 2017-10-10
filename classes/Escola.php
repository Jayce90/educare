<?php

require_once '../conexao/Crud.php';

class Escola extends Crud {
    
    private $inep;
    private $nome;
    private $localizacao;
    private $endereco;
    private $diretor;
    private $fone;
            
    function setInep($inep){
        $this->inep = $inep;
    }
    
    function setNome($nome){
        $this->nome = $nome;
    }
    
    function setLocalizacao($localizacao){
        $this->localizacao = $localizacao;
    }
    
    function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    
    function setDiretor($diretor){
        $this->diretor = $diretor;
    }
    
    function setFone($fone){
        $this->fone = $fone;
    }
    
}
