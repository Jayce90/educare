<?php

require_once '../conexao/Crud.php';

class Aluno extends Crud {

    private $inep_aluno;
    private $nome;
    private $nascimento;
    private $sexo;
    private $nis;
    private $raca;
    private $mae;
    private $pai;
    private $nacionalidade;
    private $pais_nasc;
    private $estado_nasc;
    private $fone;
    private $municipio_nasc;
    private $deficiencia;
    private $tipo_deficiencia;
    private $identidade;
    private $complemento_identidade;
    private $orgao_identidade;
    private $estado_identidade;
    private $data_identidade;
    private $certidao_civil;
    private $cpf;
    private $passaporte;
    private $justificativa;
    private $localizacao;
    private $cep;
    private $endereco;
    private $numero;
    private $complemento;
    private $bairro;
    private $estado;
    private $municipio;
    private $escolarizacao;
    private $transporte;
    private $responsavel_transporte;
    private $tipo_transporte;
    private $status;
    private $id_escola;

    function setInep_Aluno($inep_aluno) {
        $this->inep_aluno = $inep_aluno;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setNis($nis) {
        $this->nis = $nis;
    }

    function setRaca($raca) {
        $this->raca = $raca;
    }

    function setMae($mae) {
        $this->mae = $mae;
    }

    function setPai($pai) {
        $this->pai = $pai;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setPais_nasc($pais_nasc) {
        $this->pais_nasc = $pais_nasc;
    }

    function setEstado_nasc($estado_nasc) {
        $this->estado_nasc = $estado_nasc;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function setMunicipio_nasc($municipio_nasc) {
        $this->municipio_nasc = $municipio_nasc;
    }

    function setDeficiencia($deficiencia) {
        $this->deficiencia = $deficiencia;
    }

    function setTipo_deficiencia($tipo_deficiencia) {
        $this->tipo_deficiencia = $tipo_deficiencia;
    }

    function setIdentidade($identidade) {
        $this->identidade = $identidade;
    }

    function setComplemento_identidade($complemento_identidade) {
        $this->complemento_identidade = $complemento_identidade;
    }

    function setOrgao_identidade($orgao_identidade) {
        $this->orgao_identidade = $orgao_identidade;
    }

    function setEstado_identidade($estado_identidade) {
        $this->estado_identidade = $estado_identidade;
    }

    function setData_identidade($data_identidade) {
        $this->data_identidade = $data_identidade;
    }

    function setCertidao_civil($certidao_civil) {
        $this->certidao_civil = $certidao_civil;
    }

    function setCPF($cpf) {
        $this->cpf = $cpf;
    }

    function setPassaporte($passaporte) {
        $this->passaporte = $passaporte;
    }

    function setJustificativa($justificativa) {
        $this->justificativa = $justificativa;
    }

    function setLocalizacao($localizacao) {
        $this->localizacao = $localizacao;
    }

    function setCEP($cep) {
        $this->cep = $cep;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function setEscolarizacao($escolarizacao) {
        $this->escolarizacao = $escolarizacao;
    }

    function setTransporte($transporte) {
        $this->transporte = $transporte;
    }

    function setResponsavel_transporte($responsavel_transporte) {
        $this->responsavel_transporte = $responsavel_transporte;
    }

    function setTipo_transporte($tipo_transporte) {
        $this->tipo_transporte = $tipo_transporte;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setId_escola($id_escola) {
        $this->id_escola = $id_escola;
    }

    public function inserir_aluno() {
        try {
            $sql = "INSERT INTO aluno (inep_aluno, nome_aluno, nascimento_aluno, sexo_aluno, nis_aluno,"
                    . " raca_aluno, mae_aluno, pai_aluno, nacionalidade_aluno, pais_nasc_aluno,"
                    . " estado_nasc_aluno, fone_aluno, municipio_nasc_aluno, deficiencia_aluno,"
                    . " tipo_deficiencia_aluno, identidade_aluno, complemento_identidade_aluno,"
                    . " orgao_identidade_aluno, estado_identidade_aluno, data_identidade_aluno,"
                    . " certidao_civil_aluno, cpf_aluno, passaporte_aluno, justificativa_aluno,"
                    . " localizacao_aluno, cep_aluno, endereco_aluno, numero_aluno, complemento_aluno,"
                    . " bairro_aluno, estado_aluno, municipio_aluno, outra_escolarizacao_aluno, transporte_aluno,"
                    . " responsavel_transporte_aluno, tipo_transporte_aluno, status_aluno, escola_id_escola) "
                    
                    . "VALUES (:inep_aluno, :nome, :nascimento, :sexo, :nis, :raca, :mae, :pai, :nacionalidade, :pais_nasc,"
                    . " :estado_nasc, :fone, :municipio_nasc, :deficiencia, :tipo_deficiencia, :identidade, :complemento_identidade,"
                    . " :orgao_identidade, :estado_identidade, :data_identidade, :certidao_civil, :cpf, :passaporte,"
                    . " :justificativa, :localizacao, :cep, :endereco, :numero, :complemento, :bairro, :estado, :municipio,"
                    . " :escolarizacao, :transporte, :responsavel_transporte, :tipo_transporte, :status, :id_escola)";
            
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':inep_aluno', $this->inep_aluno);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':nascimento', $this->nascimento);
            $stmt->bindParam(':sexo', $this->sexo);
            $stmt->bindParam(':nis', $this->nis);
            $stmt->bindParam(':raca', $this->raca);
            $stmt->bindParam(':mae', $this->mae);
            $stmt->bindParam(':pai', $this->pai);
            $stmt->bindParam(':nacionalidade', $this->nacionalidade);
            $stmt->bindParam(':pais_nasc', $this->pais_nasc);
            $stmt->bindParam(':estado_nasc', $this->estado_nasc);
            $stmt->bindParam(':fone', $this->fone);
            $stmt->bindParam(':municipio_nasc', $this->municipio_nasc);
            $stmt->bindParam(':deficiencia', $this->deficiencia);
            $stmt->bindParam(':tipo_deficiencia', $this->tipo_deficiencia);
            $stmt->bindParam(':identidade', $this->identidade);
            $stmt->bindParam(':complemento_identidade', $this->complemento_identidade);
            $stmt->bindParam(':orgao_identidade', $this->orgao_identidade);
            $stmt->bindParam(':estado_identidade', $this->estado_identidade);
            $stmt->bindParam(':data_identidade', $this->data_identidade);
            $stmt->bindParam(':certidao_civil', $this->certidao_civil);
            $stmt->bindParam(':cpf', $this->cpf);
            $stmt->bindParam(':passaporte', $this->passaporte);
            $stmt->bindParam(':justificativa', $this->justificativa);
            $stmt->bindParam(':localizacao', $this->localizacao);
            $stmt->bindParam(':cep', $this->cep);
            $stmt->bindParam(':endereco', $this->endereco);
            $stmt->bindParam(':numero', $this->numero);
            $stmt->bindParam(':complemento', $this->complemento);
            $stmt->bindParam(':bairro', $this->bairro);
            $stmt->bindParam(':estado', $this->estado);
            $stmt->bindParam(':municipio', $this->municipio);
            $stmt->bindParam(':escolarizacao', $this->escolarizacao);
            $stmt->bindParam(':transporte', $this->transporte);
            $stmt->bindParam(':responsavel_transporte', $this->responsavel_transporte);
            $stmt->bindParam(':tipo_transporte', $this->tipo_transporte);
            $stmt->bindParam(':status', $this->status);
            $stmt->bindParam(':id_escola', $this->id_escola);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir Aluno<br>';
            echo $ex->getMessage();
        }
    }
    
    public function ler_todos_alunos_escola($id_escola) {
        try {
            $sql = "SELECT id_aluno, nome_aluno, mae_aluno, bairro_aluno, deficiencia_aluno, transporte_aluno FROM aluno WHERE escola_id_escola = :id_escola";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os Alunos por Escola <br>';
            echo $exc->getMessage();
        }

    }
    
    public function ler_alunos_sem_inep($id_escola) {
        try {
            $sql = "SELECT * FROM aluno WHERE inep_aluno = 0 AND escola_id_escola = :id_escola ORDER BY nome_aluno";
            $stmt = DB::prepare($sql);
            $stmt->bindParam(':id_escola', $id_escola);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $exc) {
            echo 'Falha ao ler todos os Alunos sem Inep <br>';
            echo $exc->getMessage();
        }

    }

}
