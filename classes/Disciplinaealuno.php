<?php

require_once '../conexao/Crud.php';

class Disciplinaealuno extends Crud {

    private $ano_disciplinaEaluno;
    private $id_disciplina;
    private $id_turma;
    private $id_professor;
    private $id_escola;
    private $id_aluno;

    function setAno_disciplinaealuno($ano_disciplinaealuno) {
        $this->ano_disciplinaEaluno = $ano_disciplinaealuno;
    }

    function setId_disciplina($id_disciplina) {
        $this->id_disciplina = $id_disciplina;
    }

    function setId_turma($id_turma) {
        $this->id_turma = $id_turma;
    }

    function setId_professor($id_professor) {
        $this->id_professor = $id_professor;
    }

    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }

    function setId_aluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }

    public function vincular_aluno() {
        try {
            $sql = "INSERT INTO disciplinaealuno(ano_disciplinaEaluno, disciplina_id_disciplina, disciplina_turma_id_turma, "
                    . "disciplina_lotacao_professor_id_professor, disciplina_lotacao_escola_id_escola, aluno_id_aluno) "
                    . "VALUES (:ano_disciplinaEaluno, :id_disciplina, :id_turma, :id_professor, :id_escola, :id_aluno)";

            $stmt = DB::prepare($sql);
            $stmt->bindParam(':ano_disciplinaEaluno', $this->ano_disciplinaEaluno);
            $stmt->bindParam(':id_disciplina', $this->id_disciplina);
            $stmt->bindParam(':id_turma', $this->id_turma);
            $stmt->bindParam(':id_professor', $this->id_professor);
            $stmt->bindParam(':id_escola', $this->id_escola);
            $stmt->bindParam(':id_aluno', $this->id_aluno);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao Vincular Aluno<br>';
            echo $ex->getMessage();
        }
    }

    public function ler_ids_disciplinas($id_disciplina) {
        try {
            $sql = "SELECT D.id_disciplina, D.turma_id_turma, D.lotacao_professor_id_professor, D.lotacao_escola_id_escola FROM disciplina AS D WHERE D.id_disciplina = :id_disciplina";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_disciplina', $id_disciplina);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os IDs de Disciplina<br>';
            echo $exc->getMessage();
        }
    }

    public function ler_turmas_vincular($ano_turma, $nivel_turma, $etapa_turma, $id_escola) {

        try {
            $sql = "SELECT *  FROM turma WHERE ano_turma = :ano_turma AND nivel_turma = :nivel_turma AND etapa_turma = :etapa_turma AND escola_id_escola = :id_escola";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':ano_turma', $ano_turma);
            $stmt->bindParam(':nivel_turma', $nivel_turma);
            $stmt->bindParam(':etapa_turma', $etapa_turma);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os IDs de Disciplina<br>';
            echo $exc->getMessage();
        }
    }
    
    public function ler_disciplinas_vincular($id_turma, $id_escola) {
        try {
            $sql = "SELECT Resultado.nome_professor, Resultado.id_disciplina, Resultado.nome_disciplina, Resultado.cargaHoraria_disciplina, Resultado.descricao_disciplina FROM (SELECT * FROM professor P INNER JOIN disciplina D ON P.id_professor = D.lotacao_professor_id_professor) as Resultado WHERE Resultado.turma_id_turma = :id_turma AND Resultado.lotacao_escola_id_escola = :id_escola";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_turma', $id_turma);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os dados <br>';
            echo $exc->getMessage();
        }

    }
    
    public function ler_alunos_turma($id_turma, $id_escola) {
        try {
            $sql = "SELECT DISTINCT A.nome_aluno, A.sexo_aluno, A.nascimento_aluno, A.mae_aluno, A.deficiencia_aluno, A.transporte_aluno FROM aluno A INNER JOIN disciplinaealuno D ON A.id_aluno = D.aluno_id_aluno AND D.disciplina_turma_id_turma = :id_turma AND D.disciplina_lotacao_escola_id_escola = :id_escola ORDER BY A.nome_aluno";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_turma', $id_turma);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os alunos por turma <br>';
            echo $exc->getMessage();
        }

    }
    
    public function ler_alunos_disciplina($id_disciplina, $id_turma, $id_escola) {
        try {
            $sql = "SELECT A.nome_aluno FROM aluno A INNER JOIN disciplinaealuno D ON A.id_aluno = D.aluno_id_aluno AND D.disciplina_id_disciplina = :id_disciplina AND D.disciplina_turma_id_turma = :id_turma AND D.disciplina_lotacao_escola_id_escola = :id_escola ORDER BY A.nome_aluno";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_disciplina', $id_disciplina);
            $stmt->bindParam(':id_turma', $id_turma);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os alunos por turma <br>';
            echo $exc->getMessage();
        }

    }
    
    
}
