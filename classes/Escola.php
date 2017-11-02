<?php

require_once '../conexao/Crud.php';

/**
 * @author Silvarney
 */
class Escola extends Crud {

    private $inep_escola;
    private $cpf_gestor;
    private $nome_gestor;
    private $cargo_gestor;
    private $email_gestor;
    private $situacao_escola;
    private $nome_escola;
    private $cep_escola;
    private $polo_escola;
    private $distrito_escola;
    private $endereco_escola;
    private $numero_escola;
    private $complemento_escola;
    private $bairro_escola;
    private $fone_escola;
    private $outro_fone_escola;
    private $email_escola;
    private $localizacao_escola;
    private $regulamentacao_escola;
    private $portaria_escola;
    private $autorizacao_escola;

    function setInep_escola($inep_escola) {
        $this->inep_escola = $inep_escola;
    }

    function setCPF_gestor($cpf_gestor) {
        $this->cpf_gestor = $cpf_gestor;
    }

    function setNome_gestor($nome_gestor) {
        $this->nome_gestor = $nome_gestor;
    }

    function setCargo_gestor($cargo_gestor) {
        $this->cargo_gestor = $cargo_gestor;
    }

    function setEmail_gestor($email_gestor) {
        $this->email_gestor = $email_gestor;
    }

    function setSituacao_escola($situacao_escola) {
        $this->situacao_escola = $situacao_escola;
    }

    function setNome_escola($nome_escola) {
        $this->nome_escola = $nome_escola;
    }

    function setCEP_escola($cep_escola) {
        $this->cep_escola = $cep_escola;
    }

    function setPolo_escola($polo_escola) {
        $this->polo_escola = $polo_escola;
    }

    function setDistrito_escola($distrito_escola) {
        $this->distrito_escola = $distrito_escola;
    }

    function setEndereco_escola($endereco_escola) {
        $this->endereco_escola = $endereco_escola;
    }

    function setNumero_escola($numero_escola) {
        $this->numero_escola = $numero_escola;
    }

    function setComplemento_escola($complemento_escola) {
        $this->complemento_escola = $complemento_escola;
    }

    function setBairro_escola($bairro_escola) {
        $this->bairro_escola = $bairro_escola;
    }

    function setFone_escola($fone_escola) {
        $this->fone_escola = $fone_escola;
    }

    function setOutro_fone_escola($outro_fone_escola) {
        $this->outro_fone_escola = $outro_fone_escola;
    }

    function setEmail_escola($email_escola) {
        $this->email_escola = $email_escola;
    }

    function setLocalizacao_escola($localizacao_escola) {
        $this->localizacao_escola = $localizacao_escola;
    }

    function setRegulamentacao_escola($regulamentacao_escola) {
        $this->regulamentacao_escola = $regulamentacao_escola;
    }

    function setPortaria_escola($portaria_escola) {
        $this->portaria_escola = $portaria_escola;
    }

    function setAutorizacao_escola($autorizacao_escola) {
        $this->autorizacao_escola = $autorizacao_escola;
    }

    public function inserir_escola() {
        try {
            $sql = "INSERT INTO escola(inep_escola, cpf_gestor_escola, nome_gestor_escola, cargo_gestor_escola, email_gestor_escola, situacao_escola, nome_escola, cep_escola, polo_escola, distrito_escola, endereco_escola, numero_escola, complemento_escola, bairro_escola, fone_escola, outro_fone_escola, email_escola, localizacao_escola, regulamentacao_escola, portaria_escola, autorizacao_escola) "
                    . "VALUES (:inep_escola, :cpf_gestor, :nome_gestor, :cargo_gestor, :email_gestor, :situacao_escola, :nome_escola, :cep_escola, :polo_escola, :distrito_escola, :endereco_escola, :numero_escola, :complemento_escola, "
                    . ":bairro_escola, :fone_escola, :outro_fone_escola, :email_escola, :localizacao_escola, :regulamentacao_escola, :portaria_escola, :autorizacao_escola)";

            $stmt = DB::prepare($sql);
            $stmt->bindParam(':inep_escola', $this->inep_escola);
            $stmt->bindParam(':cpf_gestor', $this->cpf_gestor);
            $stmt->bindParam(':nome_gestor', $this->nome_gestor);
            $stmt->bindParam(':cargo_gestor', $this->cargo_gestor);
            $stmt->bindParam(':email_gestor', $this->email_gestor);
            $stmt->bindParam(':situacao_escola', $this->situacao_escola);
            $stmt->bindParam(':nome_escola', $this->nome_escola);
            $stmt->bindParam(':cep_escola', $this->cep_escola);
            $stmt->bindParam(':polo_escola', $this->polo_escola);
            $stmt->bindParam(':distrito_escola', $this->distrito_escola);
            $stmt->bindParam(':endereco_escola', $this->endereco_escola);
            $stmt->bindParam(':numero_escola', $this->numero_escola);
            $stmt->bindParam(':complemento_escola', $this->complemento_escola);
            $stmt->bindParam(':bairro_escola', $this->bairro_escola);
            $stmt->bindParam(':fone_escola', $this->fone_escola);
            $stmt->bindParam(':outro_fone_escola', $this->outro_fone_escola);
            $stmt->bindParam(':email_escola', $this->email_escola);
            $stmt->bindParam(':localizacao_escola', $this->localizacao_escola);
            $stmt->bindParam(':regulamentacao_escola', $this->regulamentacao_escola);
            $stmt->bindParam(':portaria_escola', $this->portaria_escola);
            $stmt->bindParam(':autorizacao_escola', $this->autorizacao_escola);
            return $stmt->execute();
        } catch (Exception $ex) {
            echo 'Falha ao inserir Escola<br>';
            echo $ex->getMessage();
        }
    }

}
