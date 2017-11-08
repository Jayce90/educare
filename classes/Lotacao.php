<?php

require_once '../conexao/Crud.php';

class Lotacao extends Crud {

    private $id_professor;
    private $id_escola;
    private $ano_lotacao;
    private $cargaHoraria_lotacao;

    function setId_professor($id_professor) {
        $this->id_professor = $id_professor;
    }

    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }

    function setAno_lotacao($ano_lotacao) {
        $this->ano_lotacao = $ano_lotacao;
    }

    function setCargaHoraria_lotacao($cargaHoraria_lotacao) {
        $this->cargaHoraria_lotacao = $cargaHoraria_lotacao;
    }

    public function lotar_educador() {
        
        $sql = "SELECT * FROM locacao WHERE professor_id_professor = :id_professor AND escola_id_escola = :id_escola AND ano_locacao = :ano_locacao AND cargaHoraria_locacao = :cargaHoraria_locacao";
        $stmt_1 = DB::prepare($sql);
        $stmt_1->bindParam(':id_professor', $this->id_professor);
        $stmt_1->bindParam(':id_escola', $this->id_escola);
        $stmt_1->bindParam(':ano_locacao', $this->ano_lotacao);
        $stmt_1->bindParam(':cargaHoraria_locacao', $this->cargaHoraria_lotacao);
        $stmt_1->execute();

        if ($stmt_1->rowCount() == 0) {
            
            try {
                $sql = "INSERT INTO locacao(professor_id_professor, escola_id_escola, ano_locacao, cargaHoraria_locacao) "
                        . "VALUES (:id_professor, :id_escola, :ano_locacao, :cargaHoraria_locacao)";
                $stmt_2 = DB::prepare($sql);
                $stmt_2->bindParam(':id_professor', $this->id_professor);
                $stmt_2->bindParam(':id_escola', $this->id_escola);
                $stmt_2->bindParam(':ano_locacao', $this->ano_lotacao);
                $stmt_2->bindParam(':cargaHoraria_locacao', $this->cargaHoraria_lotacao);
                return $stmt_2->execute();
                
            } catch (Exception $ex) {
                echo 'Falha ao lotar Educador(a)<br>';
                echo $ex->getMessage();
            }
        }elseif ($stmt_1->rowCount() > 0) {
            return FALSE;
        }
    }
    
    public function listagem_lotacao($id_escola, $ano_lotacao) {
        try {
            $sql = "SELECT * FROM professor AS P INNER JOIN locacao AS L ON P.id_professor = L.professor_id_professor AND L.escola_id_escola = :id_escola AND L.ano_locacao = :ano_lotacao";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->bindParam(':ano_lotacao', $ano_lotacao);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os dados <br>';
            echo $exc->getMessage();
        }

    }

}
