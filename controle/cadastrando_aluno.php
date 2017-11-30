<script language="JavaScript">
    function confirmacao()
    {
        alert("Aluno(a) cadastrado(a) com sucesso!");
        history.back(-1);
    }
</script>

<?php
session_start();

include_once '../classes/Aluno.php';
include 'verificacao_de_campos.php';


$inep_aluno = 0;
$nome_aluno = isset($_POST['cad_nome_aluno']) ? $_POST['cad_nome_aluno'] : '';
$nascimento_aluno = isset($_POST['cad_nasc_aluno']) ? $_POST['cad_nasc_aluno'] : '';
$sexo_aluno = isset($_POST['cad_sexo_aluno']) ? $_POST['cad_sexo_aluno'] : '';
$nis_aluno = isset($_POST['cad_nis_aluno']) ? $_POST['cad_nis_aluno'] : '';
$raca_aluno = isset($_POST['cad_raca_aluno']) ? $_POST['cad_raca_aluno'] : '';
$mae_aluno = isset($_POST['cad_mae_aluno']) ? $_POST['cad_mae_aluno'] : '';
$pai_aluno = isset($_POST['cad_pai_aluno']) ? $_POST['cad_pai_aluno'] : '';
$nacionalidade_aluno = isset($_POST['cad_nacionalidade_aluno']) ? $_POST['cad_nacionalidade_aluno'] : '';
$pais_nasc_aluno = isset($_POST['cad_pais_nasc_aluno']) ? $_POST['cad_pais_nasc_aluno'] : '';
$estado_nasc_aluno = isset($_POST['cad_estadonasc_aluno']) ? $_POST['cad_estadonasc_aluno'] : '';
$fone_aluno = isset($_POST['cad_telefone_aluno']) ? $_POST['cad_telefone_aluno'] : '';
$municipio_nasc_aluno = isset($_POST['cad_municipionasc_aluno']) ? $_POST['cad_municipionasc_aluno'] : '';
$deficiencia_aluno = isset($_POST['cad_deficiencia_aluno']) ? $_POST['cad_deficiencia_aluno'] : '';
$tipos_deficiencia_aluno = isset($_POST['cad_tipo_deficiencia_aluno']) ? $_POST['cad_tipo_deficiencia_aluno'] : '';
$tipo_deficiencia_aluno = validar_array($tipos_deficiencia_aluno);
$identidade_aluno = isset($_POST['cad_identidade_aluno']) ? $_POST['cad_identidade_aluno'] : '';
$complemento_identidade_aluno = isset($_POST['cad_complemento_identidade_aluno']) ? $_POST['cad_complemento_identidade_aluno'] : '';
$orgao_identidade_aluno = isset($_POST['cad_orgao_identidade_aluno']) ? $_POST['cad_orgao_identidade_aluno'] : '';
$estado_identidade_aluno = isset($_POST['cad_estado_identidade_aluno']) ? $_POST['cad_estado_identidade_aluno'] : '';
$data_identidade_aluno = isset($_POST['cad_data_identidade_aluno']) ? $_POST['cad_data_identidade_aluno'] : '';
$dados_certidao_civil_aluno = isset($_POST['cad_certidaocivil_aluno']) ? $_POST['cad_certidaocivil_aluno'] : '';
$certidao_civil_aluno = validar_array($dados_certidao_civil_aluno);
$cpf_aluno = isset($_POST['cad_cpf_aluno']) ? $_POST['cad_cpf_aluno'] : '';
$passaporte_aluno = isset($_POST['cad_passaporte_aluno']) ? $_POST['cad_passaporte_aluno'] : '';
$justificativa_aluno = isset($_POST['cad_justificativa_aluno']) ? $_POST['cad_justificativa_aluno'] : '';
$localizacao_aluno = isset($_POST['cad_localizacao_aluno']) ? $_POST['cad_localizacao_aluno'] : '';
$cep_aluno = isset($_POST['cad_cep_aluno']) ? $_POST['cad_cep_aluno'] : '';
$endereco_aluno = isset($_POST['cad_endereco_aluno']) ? $_POST['cad_endereco_aluno'] : '';
$numero_aluno = isset($_POST['cad_numero_aluno']) ? $_POST['cad_numero_aluno'] : '';
$complemento_aluno = isset($_POST['cad_complemento_aluno']) ? $_POST['cad_complemento_aluno'] : '';
$bairro_aluno = isset($_POST['cad_bairro_aluno']) ? $_POST['cad_complemento_aluno'] : '';
$estado_aluno = isset($_POST['cad_estado_aluno']) ? $_POST['cad_estado_aluno'] : '';
$municipio_aluno = isset($_POST['cad_municipio_aluno']) ? $_POST['cad_municipio_aluno'] : '';
$escolarizacao_aluno = isset($_POST['cad_escolarizacao_espaco_aluno']) ? $_POST['cad_escolarizacao_espaco_aluno'] : '';
$transporte_aluno = isset($_POST['cad_transporte_aluno']) ? $_POST['cad_transporte_aluno'] : '';
$responsavel_transporte_aluno = isset($_POST['cad_responsavel_transporte_aluno']) ? $_POST['cad_responsavel_transporte_aluno'] : '';
$tipos_transporte_aluno = isset($_POST['cad_tipo_transporte_aluno']) ? $_POST['cad_tipo_transporte_aluno'] : '';
$tipo_transporte_aluno = validar_array($tipos_transporte_aluno);
$status_aluno = "aguardando";
$id_escola_aluno = $_SESSION['id_escola'];

$aluno = new Aluno();

$aluno->setInep_Aluno($inep_aluno);
$aluno->setNome(mb_strtoupper($nome_aluno));
$aluno->setNascimento($nascimento_aluno);
$aluno->setSexo($sexo_aluno);
$aluno->setNis($nis_aluno);
$aluno->setRaca($raca_aluno);
$aluno->setMae(mb_strtoupper($mae_aluno));
$aluno->setPai(mb_strtoupper($pai_aluno));
$aluno->setNacionalidade($nacionalidade_aluno);
$aluno->setPais_nasc($pais_nasc_aluno);
$aluno->setEstado_nasc($estado_nasc_aluno);
$aluno->setFone($fone_aluno);
$aluno->setMunicipio_nasc($municipio_nasc_aluno);
$aluno->setDeficiencia($deficiencia_aluno);
$aluno->setTipo_deficiencia($tipo_deficiencia_aluno);
$aluno->setIdentidade($identidade_aluno);
$aluno->setComplemento_identidade($complemento_identidade_aluno);
$aluno->setOrgao_identidade($orgao_identidade_aluno);
$aluno->setEstado_identidade($estado_identidade_aluno);
$aluno->setData_identidade($data_identidade_aluno);
$aluno->setCertidao_civil($certidao_civil_aluno);
$aluno->setCPF($cpf_aluno);
$aluno->setPassaporte($passaporte_aluno);
$aluno->setJustificativa($justificativa_aluno);
$aluno->setLocalizacao($localizacao_aluno);
$aluno->setCEP($cep_aluno);
$aluno->setEndereco($endereco_aluno);
$aluno->setNumero($numero_aluno);
$aluno->setComplemento($complemento_aluno);
$aluno->setBairro($bairro_aluno);
$aluno->setEstado($estado_aluno);
$aluno->setMunicipio($municipio_aluno);
$aluno->setEscolarizacao($escolarizacao_aluno);
$aluno->setTransporte($transporte_aluno);
$aluno->setResponsavel_transporte($responsavel_transporte_aluno);
$aluno->setTipo_transporte($tipo_transporte_aluno);
$aluno->setStatus($status_aluno);
$aluno->setId_escola($id_escola_aluno);

$aluno->inserir_aluno();

echo "<script>confirmacao()</script>";
