<?php
require_once '../conexao/Crud.php';
/**
 * @author Silvarney
 */
class Protocolo extends Crud{
    private $data_protocolo;
    private $tipo_protocolo;
    private $solicitante_protocolo;
    private $id_aluno;
    private $id_usuario;
    private $id_escola;
    
    function setData_protocolo($data_protocolo) {
        $this->data_protocolo = $data_protocolo;
    }
    
    function setTipo_protocolo($tipo_protocolo) {
        $this->tipo_protocolo = $tipo_protocolo;
    }
    
    function setSolicitante_protocolo($solicitante_protocolo) {
        $this->solicitante_protocolo = $solicitante_protocolo;
    }
    
    function setId_aluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }
    
    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    
    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }
    
}
