<?php
require_once '../conexao/Crud.php';

class Disciplina extends Crud{
    private $nome_disciplina;
    private $descricao_disciplina;
    private $cargaHoraria_disciplina;
    private $nivel_disciplina;
    private $etapa_disciplina;
    private $id_professor;
    private $id_turma;
    private $id_escola;
    
    function setNome_disciplina($nome_disciplina) {
        $this->nome_disciplina = $nome_disciplina;
    }
    
    function setDescricao_disciplina($descricao_disciplina) {
        $this->descricao_disciplina = $descricao_disciplina;
    }
    
    function setCargaHoraria_disciplina($cargaHoraria_disciplina) {
        $this->cargaHoraria_disciplina = $cargaHoraria_disciplina;
    }
    
    function setNivel_disciplina($nivel_disciplina) {
        $this->nivel_disciplina = $nivel_disciplina;
    }
    
    function setEtapa_disciplina($etapa_disciplina) {
        $this->etapa_disciplina = $etapa_disciplina;
    }
    
    function setId_professor($id_professor) {
        $this->id_professor = $id_professor;
    }
    
    function setId_turma($id_turma) {
        $this->id_turma = $id_turma;
    }
    
    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }
    
}
