<?php

require_once '../conexao/Crud.php';

class Disciplina extends Crud {

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

    public function inserir_disciplina() {
        try {
            $sql = "INSERT INTO disciplina(nome_disciplina, descricao_disciplina, cargaHoraria_disciplina, "
                    . "nivel_disciplina, etapa_disciplina, turma_id_turma, lotacao_professor_id_professor, lotacao_escola_id_escola) "
                    . "VALUES (:nome_disciplina, :descricao_disciplina, :cargaHoraria_disciplina, "
                    . ":nivel_disciplina, :etapa_disciplina, :id_turma, :id_professor, :id_escola)";

            $stmt = DB::prepare($sql);
            $stmt->bindParam(':nome_disciplina', $this->nome_disciplina);
            $stmt->bindParam(':descricao_disciplina', $this->descricao_disciplina);
            $stmt->bindParam(':cargaHoraria_disciplina', $this->cargaHoraria_disciplina);
            $stmt->bindParam(':nivel_disciplina', $this->nivel_disciplina);
            $stmt->bindParam(':etapa_disciplina', $this->etapa_disciplina);
            $stmt->bindParam(':id_professor', $this->id_professor);
            $stmt->bindParam(':id_turma', $this->id_turma);
            $stmt->bindParam(':id_escola', $this->id_escola);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir Disciplina<br>';
            echo $ex->getMessage();
        }
    }

    public function ler_professor_turma($id_escola) {
        try {
            $sql = "SELECT Resultado.id_disciplina, Resultado.id_professor, Resultado.nome_professor, Resultado.curso_professor, Resultado.nome_disciplina, Resultado.cargaHoraria_disciplina, 
                    Resultado.id_turma, Resultado.nome_turma, Resultado.capacidade_turma, Resultado.nivel_turma, Resultado.etapa_turma, Resultado.turno_turma FROM 
                    (SELECT * FROM disciplina INNER JOIN professor ON professor.id_professor = disciplina.lotacao_professor_id_professor
                    INNER JOIN turma ON turma.id_turma = disciplina.turma_id_turma) as Resultado WHERE Resultado.lotacao_escola_id_escola = :id_escola";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os dados de Professor e Turma<br>';
            echo $exc->getMessage();
        }
    }

}
