<?php
require_once '../conexao/Crud.php';

class Nota {
    private $id_turma;
    private $id_aluno;
    private $id_disciplina;
    private $id_professor;
    private $avaliacao_1;
    private $avaliacao_2;
    private $avaliacao_3;
    private $avaliacao_4;
    private $recuperacao_1;
    private $recuperacao_2;
    private $media_anual;
    
    function setId_turma($id_turma) {
        $this-> id_turma = $id_turma;
    }
    
    function setId_aluno($id_aluno) {
        $this-> id_aluno = $id_aluno;
    }
    
    function setId_disciplina($id_disciplina) {
        $this-> id_disciplina = $id_disciplina;
    }
    
    function setId_professor($id_professor) {
        $this-> id_professor = $id_professor;
    }
    
    function setAvaliacao_1($avaliacao_1) {
        $this-> avaliacao_1 = $avaliacao_1;
    }
    
    function setAvaliacao_2($avaliacao_2) {
        $this-> avaliacao_2 = $avaliacao_2;
    }
    
    function setAvaliacao_3($avaliacao_3) {
        $this-> avaliacao_3 = $avaliacao_3;
    }
    
    function setAvaliacao_4($avaliacao_4) {
        $this-> avaliacao_4 = $avaliacao_4;
    }
    
    function setRecuperacao_1($recuperacao_1) {
        $this-> recuperacao_1 = $recuperacao_1;
    }
    
    function setRecuperacao_2($recuperacao_2) {
        $this-> recuperacao_2 = $recuperacao_2;
    }
    
    function setMedia_anual($media_anual) {
        $this-> media_anual = $media_anual;
    }
    
}
