<?php
require_once '../conexao/Crud.php';

class Turma extends Crud{
    private $nome;
    private $serie;
    private $turno;
    private $ano;
    private $id_escola;
    
    function setNome($nome) {
        $this->nome = $nome;
    }
    
    function setSerie($serie) {
        $this->serie = $serie;
    }
    
    function setTurno($turno) {
        $this->turno = $turno;
    }
    
    function setAno($ano) {
        $this->ano = $ano;
    }
    
    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }
    
}
