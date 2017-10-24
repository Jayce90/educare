<?php
require_once '../conexao/Crud.php';
/**
 * @author Silvarney
 */
class Historico extends Crud{
    private $tipo_historico;
    private $descricao_historico;
    private $escola_origem_historico;
    private $escola_destino_historico;
    private $status_historico;
    private $id_aluno;
    private $id_usuario;
    private $id_escola;
    
    function setTipo_historico($tipo_historico) {
        $this->tipo_historico = $tipo_historico;
    }
    
    function setDescricao_historico($descricao_historico) {
        $this->descricao_historico = $descricao_historico;
    }
    
    function setEscola_origem_historico($escola_origem_historico) {
        $this->escola_origem_historico = $escola_origem_historico;
    }
    
    function setEscola_destino_historico($escola_destino_historico) {
        $this->escola_destino_historico = $escola_destino_historico;
    }
    
    function setStatus_historico($status_historico) {
        $this->status_historico = $status_historico;
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
