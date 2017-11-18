<?php

require_once '../conexao/Crud.php';

class Educador extends Crud {

    private $inep_professor;
    private $cpf_professor;
    private $fone_professor;
    private $nome_professor;
    private $nascimento_professor;
    private $mae_professor;
    private $pai_professor;
    private $email_professor;
    private $nis_professor;
    private $sexo_professor;
    private $raca_professor;
    private $nacionalidade_professor;
    private $pais_nasc_professor;
    private $estado_nasc_professor;
    private $municipio_nasc_professor;
    private $deficiencia_professor;
    private $tipo_deficiencia_professor;
    private $localizacao_professor;
    private $cep_professor;
    private $endereco_professor;
    private $numero_professor;
    private $complemento_professor;
    private $bairro_professor;
    private $municipio_professor;
    private $escolaridade_professor;
    private $curso_professor;
    private $instituicao_curso_professor;
    private $situacao_curso_professor;
    private $pos_graduacao_professor;
    private $outro_curso_professor;
    private $funcao_professor;
    private $vinculo_professor;

    function setInep_professor($inep_professor) {
        $this->inep_professor = $inep_professor;
    }

    function setCPF_professor($cpf_professor) {
        $this->cpf_professor = $cpf_professor;
    }
    
    function setFone_professor($fone_professor) {
        $this->fone_professor = $fone_professor;
    }

    function setNome_professor($nome_professor) {
        $this->nome_professor = $nome_professor;
    }

    function setNascimento_professor($nascimento_professor) {
        $this->nascimento_professor = $nascimento_professor;
    }

    function setMae_professor($mae_professor) {
        $this->mae_professor = $mae_professor;
    }

    function setPai_professor($pai_professor) {
        $this->pai_professor = $pai_professor;
    }

    function setEmail_professor($email_professor) {
        $this->email_professor = $email_professor;
    }

    function setNis_professor($nis_professor) {
        $this->nis_professor = $nis_professor;
    }

    function setSexo_professor($sexo_professor) {
        $this->sexo_professor = $sexo_professor;
    }

    function setRaca_professor($raca_professor) {
        $this->raca_professor = $raca_professor;
    }

    function setNacionalidade_professor($nacionalidade_professor) {
        $this->nacionalidade_professor = $nacionalidade_professor;
    }

    function setPais_nasc_professor($pais_nasc_professor) {
        $this->pais_nasc_professor = $pais_nasc_professor;
    }

    function setEstado_nasc_professor($estado_nasc_professor) {
        $this->estado_nasc_professor = $estado_nasc_professor;
    }

    function setMunicipio_nasc_professor($municipio_nasc_professor) {
        $this->municipio_nasc_professor = $municipio_nasc_professor;
    }

    function setDeficiencia_professor($deficiencia_professor) {
        $this->deficiencia_professor = $deficiencia_professor;
    }

    function setTipo_deficiencia_professor($tipo_deficiencia_professor) {
        $this->tipo_deficiencia_professor = $tipo_deficiencia_professor;
    }

    function setLocalizacao_professor($localizacao_professor) {
        $this->localizacao_professor = $localizacao_professor;
    }

    function setCEP_professor($cep_professor) {
        $this->cep_professor = $cep_professor;
    }

    function setEndereco_professor($endereco_professor) {
        $this->endereco_professor = $endereco_professor;
    }

    function setNumero_professor($numero_professor) {
        $this->numero_professor = $numero_professor;
    }

    function setComplemento_professor($complemento_professor) {
        $this->complemento_professor = $complemento_professor;
    }

    function setBairro_professor($bairro_professor) {
        $this->bairro_professor = $bairro_professor;
    }

    function setMunicipio_professor($municipio_professor) {
        $this->municipio_professor = $municipio_professor;
    }

    function setEscolaridade_professor($escolaridade_professor) {
        $this->escolaridade_professor = $escolaridade_professor;
    }

    function setCurso_professor($curso_professor) {
        $this->curso_professor = $curso_professor;
    }

    function setInstituicao_curso_professor($instituicao_curso_professor) {
        $this->instituicao_curso_professor = $instituicao_curso_professor;
    }

    function setSituacao_curso_professor($situacao_curso_professor) {
        $this->situacao_curso_professor = $situacao_curso_professor;
    }

    function setPos_graducacao_professor($pos_graducao_professor) {
        $this->pos_graduacao_professor = $pos_graducao_professor;
    }

    function setOutro_curso_professor($outro_curso_professor) {
        $this->outro_curso_professor = $outro_curso_professor;
    }

    function setFuncao_professor($funcao_professor) {
        $this->funcao_professor = $funcao_professor;
    }

    function setVinculo_professor($vinculo_professor) {
        $this->vinculo_professor = $vinculo_professor;
    }

    public function inserir_professor() {
        try {
            $sql = "INSERT INTO professor(inep_professor, cpf_professor, fone_professor, nome_professor, nascimento_professor, "
                    . "mae_professor, pai_professor, email_professor, nis_professor, sexo_professor, raca_professor, "
                    . "nacionalidade_professor, pais_nasc_professor, estado_nasc_professor, municipio_nasc_professor, "
                    . "deficiencia_professor, tipo_deficiencia_professor, localizacao_professor, cep_professor, "
                    . "endereco_professor, numero_professor, complemento_professor, bairro_professor, municipio_professor, "
                    . "escolaridade_professor, curso_professor, instituicao_curso_professor, situacao_curso_professor, "
                    . "pos_graduacao_professor, outro_curso_professor, funcao_professor, vinculo_professor) "
                    . ""
                    . "VALUES (:inep_professor, :cpf_professor, :fone_professor, :nome_professor, :nascimento_professor, "
                    . ":mae_professor, :pai_professor, :email_professor, :nis_professor, :sexo_professor, :raca_professor, "
                    . ":nacionalidade_professor, :pais_nasc_professor, :estado_nasc_professor, :municipio_nasc_professor, "
                    . ":deficiencia_professor, :tipo_deficiencia_professor, :localizacao_professor, :cep_professor, "
                    . ":endereco_professor, :numero_professor, :complemento_professor, :bairro_professor, :municipio_professor, "
                    . ":escolaridade_professor, :curso_professor, :instituicao_curso_professor, :situacao_curso_professor, "
                    . ":pos_graduacao_professor, :outro_curso_professor, :funcao_professor, :vinculo_professor)";

            $stmt = DB::prepare($sql);
            $stmt->bindParam(':inep_professor', $this->inep_professor);
            $stmt->bindParam(':cpf_professor', $this->cpf_professor);
            $stmt->bindParam(':fone_professor', $this->fone_professor);
            $stmt->bindParam(':nome_professor', $this->nome_professor);
            $stmt->bindParam(':nascimento_professor', $this->nascimento_professor);
            $stmt->bindParam(':mae_professor', $this->mae_professor);
            $stmt->bindParam(':pai_professor', $this->pai_professor);
            $stmt->bindParam(':email_professor', $this->email_professor);
            $stmt->bindParam(':nis_professor', $this->nis_professor);
            $stmt->bindParam(':sexo_professor', $this->sexo_professor);
            $stmt->bindParam(':raca_professor', $this->raca_professor);
            $stmt->bindParam(':nacionalidade_professor', $this->nacionalidade_professor);
            $stmt->bindParam(':pais_nasc_professor', $this->pais_nasc_professor);
            $stmt->bindParam(':estado_nasc_professor', $this->estado_nasc_professor);
            $stmt->bindParam(':municipio_nasc_professor', $this->municipio_nasc_professor);
            $stmt->bindParam(':deficiencia_professor', $this->deficiencia_professor);
            $stmt->bindParam(':tipo_deficiencia_professor', $this->tipo_deficiencia_professor);
            $stmt->bindParam(':localizacao_professor', $this->localizacao_professor);
            $stmt->bindParam(':cep_professor', $this->cep_professor);
            $stmt->bindParam(':endereco_professor', $this->endereco_professor);
            $stmt->bindParam(':numero_professor', $this->numero_professor);
            $stmt->bindParam(':complemento_professor', $this->complemento_professor);
            $stmt->bindParam(':bairro_professor', $this->bairro_professor);
            $stmt->bindParam(':municipio_professor', $this->municipio_professor);
            $stmt->bindParam(':escolaridade_professor', $this->escolaridade_professor);
            $stmt->bindParam(':curso_professor', $this->curso_professor);
            $stmt->bindParam(':instituicao_curso_professor', $this->instituicao_curso_professor);
            $stmt->bindParam(':situacao_curso_professor', $this->situacao_curso_professor);
            $stmt->bindParam(':pos_graduacao_professor', $this->pos_graduacao_professor);
            $stmt->bindParam(':outro_curso_professor', $this->outro_curso_professor);
            $stmt->bindParam(':funcao_professor', $this->funcao_professor);
            $stmt->bindParam(':vinculo_professor', $this->vinculo_professor);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir Educador<br>';
            echo $ex->getMessage();
        }
    }

    public function ler_todos_professores() {
        try {
            $sql = "SELECT * FROM professor ORDER BY nome_professor";
            $stmt = DB::prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos Professores <br>';
            echo $exc->getMessage();
        }

    }
   
    
}
