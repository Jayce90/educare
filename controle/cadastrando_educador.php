<script language="JavaScript">
    function confirmacao()
    {
        alert("Educador(a) cadastrado(a) com sucesso!");
        history.back(-1);
    }
</script>

<?php
include_once '../classes/Educador.php';
include 'verificacao_de_campos.php';

$inep_professor = 0;
$cpf_professor = isset($_POST['cad_cpf_professor']) ? $_POST['cad_cpf_professor'] : '';
$fone_professor = isset($_POST['cad_fone_professor']) ? $_POST['cad_fone_professor'] : '';
$nome_professor = isset($_POST['cad_nome_professor']) ? $_POST['cad_nome_professor'] : '';
$nascimento_professor = isset($_POST['cad_nasc_professor']) ? $_POST['cad_nasc_professor'] : '';
$mae_professor = isset($_POST['cad_mae_professor']) ? $_POST['cad_mae_professor'] : '';
$pai_professor = isset($_POST['cad_pai_professor']) ? $_POST['cad_pai_professor'] : '';
$email_professor = isset($_POST['cad_email_professor']) ? $_POST['cad_email_professor'] : '';
$nis_professor = isset($_POST['cad_nis_professor']) ? $_POST['cad_nis_professor'] : '';
$sexo_professor = isset($_POST['cad_sexo_professor']) ? $_POST['cad_sexo_professor'] : '';
$raca_professor = isset($_POST['cad_raca_professor']) ? $_POST['cad_raca_professor'] : '';
$nacionalidade_professor = isset($_POST['cad_nacionalidade_professor']) ? $_POST['cad_nacionalidade_professor'] : '';
$pais_nasc_professor = isset($_POST['cad_pais_nasc_professor']) ? $_POST['cad_pais_nasc_professor'] : '';
$estado_nasc_professor = isset($_POST['cad_estado_nasc_professor']) ? $_POST['cad_estado_nasc_professor'] : '';
$municipio_nasc_professor = isset($_POST['cad_municipio_nasc_professor']) ? $_POST['cad_municipio_nasc_professor'] : '';
$deficiencia_professor = isset($_POST['cad_deficiencia_professor']) ? $_POST['cad_deficiencia_professor'] : '';
$tipos_deficiencia_professor = isset($_POST['cad_tipo_deficiencia_professor']) ? $_POST['cad_tipo_deficiencia_professor'] : '';
$tipo_deficiencia_professor = validar_array($tipos_deficiencia_professor);
$localizacao_professor = isset($_POST['cad_localizacao_professor']) ? $_POST['cad_localizacao_professor'] : '';
$cep_professor = isset($_POST['cad_cep_professor']) ? $_POST['cad_cep_professor'] : '';
$endereco_professor = isset($_POST['cad_endereco_professor']) ? $_POST['cad_endereco_professor'] : '';
$numero_professor = isset($_POST['cad_numero_professor']) ? $_POST['cad_numero_professor'] : '';
$complemento_professor = isset($_POST['cad_complemento_professor']) ? $_POST['cad_complemento_professor'] : '';
$bairro_professor = isset($_POST['cad_bairro_professor']) ? $_POST['cad_bairro_professor'] : '';
$municipio_professor = isset($_POST['cad_municipio_professor']) ? $_POST['cad_municipio_professor'] : '';
$escolaridade_professor = isset($_POST['cad_escolaridade_professor']) ? $_POST['cad_escolaridade_professor'] : '';
$curso_professor = isset($_POST['cad_curso_professor']) ? $_POST['cad_curso_professor'] : '';
$instituicao_curso_professor = isset($_POST['cad_instituicao_professor']) ? $_POST['cad_instituicao_professor'] : '';
$situacao_curso_professor = isset($_POST['cad_situacao_curso_professor']) ? $_POST['cad_situacao_curso_professor'] : '';
$pos_graduacao_professor = isset($_POST['cad_pos_graduacao_professor']) ? $_POST['cad_pos_graduacao_professor'] : '';
$outros_curso_professor = isset($_POST['cad_outros_curso_professor']) ? $_POST['cad_outros_curso_professor'] : '';
$outro_curso_professor = validar_array($outros_curso_professor);
$funcoes_professor = isset($_POST['cad_funcao_professor']) ? $_POST['cad_funcao_professor'] : '';
$funcao_professor = validar_array($funcoes_professor);
$vinculo_professor = isset($_POST['cad_vinculo_professor']) ? $_POST['cad_vinculo_professor'] : '';

$professor = new Educador();

$professor->setInep_professor($inep_professor);
$professor->setCPF_professor($cpf_professor);
$professor->setFone_professor($fone_professor);
$professor->setNome_professor($nome_professor);
$professor->setNascimento_professor($nascimento_professor);
$professor->setMae_professor($mae_professor);
$professor->setPai_professor($pai_professor);
$professor->setEmail_professor($email_professor);
$professor->setNis_professor($nis_professor);
$professor->setSexo_professor($sexo_professor);
$professor->setRaca_professor($raca_professor);
$professor->setNacionalidade_professor($nacionalidade_professor);
$professor->setPais_nasc_professor($pais_nasc_professor);
$professor->setEstado_nasc_professor($estado_nasc_professor);
$professor->setMunicipio_nasc_professor($municipio_nasc_professor);
$professor->setDeficiencia_professor($deficiencia_professor);
$professor->setTipo_deficiencia_professor($tipo_deficiencia_professor);
$professor->setLocalizacao_professor($localizacao_professor);
$professor->setCEP_professor($cep_professor);
$professor->setEndereco_professor($endereco_professor);
$professor->setNumero_professor($numero_professor);
$professor->setComplemento_professor($complemento_professor);
$professor->setBairro_professor($bairro_professor);
$professor->setMunicipio_professor($municipio_professor);
$professor->setEscolaridade_professor($escolaridade_professor);
$professor->setCurso_professor($curso_professor);
$professor->setInstituicao_curso_professor($instituicao_curso_professor);
$professor->setSituacao_curso_professor($situacao_curso_professor);
$professor->setPos_graducacao_professor($pos_graduacao_professor);
$professor->setOutro_curso_professor($outro_curso_professor);
$professor->setFuncao_professor($funcao_professor);
$professor->setVinculo_professor($vinculo_professor);

$professor->inserir_professor();
 
echo "<script>confirmacao()</script>";

