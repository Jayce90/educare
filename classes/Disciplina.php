<?php
require_once '../conexao/Crud.php';

class Disciplina extends Crud{
    private $nome;
    private $cargaHoraria;
    private $nivel;
    private $ano;
    
    function setNome($nome) {
        $this-> nome = $nome;
    }
    
    function setCargaHoraria($carga_horaria) {
        $this-> cargaHoraria = $carga_horaria;
    }
    
    function setNivel($nivel) {
        $this-> nivel = $nivel;
    }
    
    function setAno($ano) {
        $this-> ano = $ano;
    }
    
}
