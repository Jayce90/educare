<?php
require_once '../conexao/Crud.php';

class Turma extends Crud{
    private $nome_turma;
    private $ano_turma;
    private $horario_turma;
    private $turno_turma;
    private $dias_turma;
    private $tipo_turma;
    private $programa_turma;
    private $aee_turma;
    private $modalidade_turma;
    private $nivel_turma;
    private $etapa_turma;
    private $descricao_turma;
    private $id_escola;
    
    function setNome_turma($nome_turma) {
        $this->nome_turma = $nome_turma;
    }
    
    function setAno_turma($ano_turma) {
        $this->ano_turma = $ano_turma;
    }
    
    function setHorario_turma($horario_turma) {
        $this->horario_turma = $horario_turma;
    }
    
    function setTurno_turma($turno_turma) {
        $this->turno_turma = $turno_turma;
    }
    
    function setDias_turma($dias_turma) {
        $this->dias_turma = $dias_turma;
    }
    
    function setTipo_turma($tipo_turma) {
        $this->tipo_turma = $tipo_turma;
    }
    
    function setPrograma_turma($programa_turma) {
        $this->programa_turma = $programa_turma;
    }
    
    function setAEE_turma($aee_turma) {
        $this->aee_turma = $aee_turma;
    }
    
    function setModalidade_turma($modalidade_turma) {
        $this->modalidade_turma = $modalidade_turma;
    }
    
    function setNivel_turma($nivel_turma) {
        $this->nivel_turma = $nivel_turma;
    }
    
    function setEtapa_turma($etapa_turma) {
        $this->etapa_turma = $etapa_turma;
    }
    
    function setDescricao_turma($descricao_turma) {
        $this->descricao_turma= $descricao_turma;
    }
    
    function setId_escola($id_escola) {
        $this->id_escola= $id_escola;
    }
    
    
}
