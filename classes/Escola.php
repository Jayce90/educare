<?php

require_once '../conexao/Crud.php';

/**
 * @author Silvarney
 */

class Escola extends Crud {
    
    private $id_escola;
    private $cpf_gestor;
    private $nome_gestor;
    private $cargo_gestor;
    private $email_gestor;
    private $situacao_escola;
    private $nome_escola;
    private $cep_escola;
    private $polo_escola;
    private $distrito_escola;
    private $endereco_escola;
    private $numero_escola;
    private $complemento_escola;
    private $bairro_escola;
    private $fone_escola;
    private $outro_fone_escola;
    private $email_escola;
    private $localizacao_escola;
    private $regulamentacao_escola;
    private $autorizacao_escola;
    
    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }        
    
    function setCPF_gestor($cpf_gestor) {
        $this->cpf_gestor = $cpf_gestor;
    }        
    
    function setNome_gestor($nome_gestor) {
        $this->nome_gestor = $nome_gestor;
    }        
    
    function setCargo_gestor($cargo_gestor) {
        $this->cargo_gestor = $cargo_gestor;
    }        
    
    function setEmail_gestor($email_gestor) {
        $this->email_gestor = $email_gestor;
    }        
    
    function setSituacao_escola($situacao_escola) {
        $this->situacao_escola = $situacao_escola;
    }        
    
    function setNome_escola($nome_escola) {
        $this->nome_escola = $nome_escola;
    }        
    
    function setCEP_escola($cep_escola) {
        $this->cep_escola = $cep_escola;
    }        
    
    function setPolo_escola($polo_escola) {
        $this->polo_escola = $polo_escola;
    }        
    
    function setDistrito_escola($distrito_escola) {
        $this->distrito_escola = $distrito_escola;
    }        
    
    function setEndereco_escola($endereco_escola) {
        $this->endereco_escola = $endereco_escola;
    }        
    
    function setNumero_escola($numero_escola) {
        $this->numero_escola = $numero_escola;
    }        
    
    function setComplemento_escola($complemento_escola) {
        $this->complemento_escola = $complemento_escola;
    }        
    
    function setBairro_escola($bairro_escola) {
        $this->bairro_escola = $bairro_escola;
    }        
    
    function setFone_escola($fone_escola) {
        $this->fone_escola = $fone_escola;
    }        
    
    function setOutro_fone_escola($outro_fone_escola) {
        $this->outro_fone_escola = $outro_fone_escola;
    }        
    
    function setEmail_escola($email_escola) {
        $this->email_escola = $email_escola;
    }        
    
    function setLocalizacao_escola($localizacao_escola) {
        $this->localizacao_escola = $localizacao_escola;
    }        
    
    function setRegulamentacao_escola($regulamentacao_escola) {
        $this->regulamentacao_escola = $regulamentacao_escola;
    }        
    
    function setAutorizacao_escola($autorizacao_escola) {
        $this->autorizacao_escola = $autorizacao_escola;
    }        
    
}
