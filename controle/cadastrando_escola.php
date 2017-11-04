<script language="JavaScript">
    function confirmacao()
    {
        alert("Escola cadastrada com sucesso!");
        history.back(-1);
    }
</script>

<?php
include_once '../classes/Escola.php';
include 'verificacao_de_campos.php';

$inep_escola = isset($_POST['cad_inep_escola']) ? $_POST['cad_inep_escola'] : '';
$cpf_gestor = isset($_POST['cad_cpf_gestor_escola']) ? $_POST['cad_cpf_gestor_escola'] : '';
$nome_gestor = isset($_POST['cad_nome_gestor_escola']) ? $_POST['cad_nome_gestor_escola'] : '';
$cargo_gestor = isset($_POST['cad_cargo_gestor_escola']) ? $_POST['cad_cargo_gestor_escola'] : '';
$email_gestor = isset($_POST['cad_email_gestor_escola']) ? $_POST['cad_email_gestor_escola'] : '';
$situacao_escola = isset($_POST['cad_funcionamento_escola']) ? $_POST['cad_funcionamento_escola'] : '';
$nome_escola = isset($_POST['cad_nome_escola']) ? $_POST['cad_nome_escola'] : '';
$cep_escola = isset($_POST['cad_cep_escola']) ? $_POST['cad_cep_escola'] : '';
$polo_escola = isset($_POST['cad_polo_escola']) ? $_POST['cad_polo_escola'] : '';
$distrito_escola = isset($_POST['cad_distrito_escola']) ? $_POST['cad_distrito_escola'] : '';
$endereco_escola = isset($_POST['cad_endereco_escola']) ? $_POST['cad_endereco_escola'] : '';
$numero_escola = isset($_POST['cad_numero_escola']) ? $_POST['cad_numero_escola'] : '';
$complemento_escola = isset($_POST['cad_complemento_endereco_escola']) ? $_POST['cad_complemento_endereco_escola'] : '';
$bairro_escola = isset($_POST['cad_bairro_escola']) ? $_POST['cad_bairro_escola'] : '';
$fone_escola = isset($_POST['cad_fone_escola']) ? $_POST['cad_fone_escola'] : '';
$outro_fone_escola = isset($_POST['cad_outro_fone_escola']) ? $_POST['cad_outro_fone_escola'] : '';
$email_escola = isset($_POST['cad_email_escola']) ? $_POST['cad_email_escola'] : '';
$localizacao_escola = isset($_POST['cad_localizacao_escola']) ? $_POST['cad_localizacao_escola'] : '';
$regulamentacao_escola = isset($_POST['cad_regulamentacao_escola']) ? $_POST['cad_regulamentacao_escola'] : '';
$portaria_escola = isset($_POST['cad_portaria_escola']) ? $_POST['cad_portaria_escola'] : '';
$autorizacao_escola = isset($_POST['cad_autorizacao_escola']) ? $_POST['cad_autorizacao_escola'] : '';

$escola = new Escola();

$escola ->setInep_escola($inep_escola);
$escola ->setCPF_gestor($cpf_gestor);
$escola ->setNome_gestor($nome_gestor);
$escola ->setCargo_gestor($cargo_gestor);
$escola ->setEmail_gestor($email_gestor);
$escola ->setSituacao_escola($situacao_escola);
$escola ->setNome_escola($nome_escola);
$escola ->setCEP_escola($cep_escola);
$escola ->setPolo_escola($polo_escola);
$escola ->setDistrito_escola($distrito_escola);
$escola ->setEndereco_escola($endereco_escola);
$escola ->setNumero_escola($numero_escola);
$escola ->setComplemento_escola($complemento_escola);
$escola ->setBairro_escola($bairro_escola);
$escola ->setFone_escola($fone_escola);
$escola ->setOutro_fone_escola($outro_fone_escola);
$escola ->setEmail_escola($email_escola);
$escola ->setLocalizacao_escola($localizacao_escola);
$escola ->setRegulamentacao_escola($regulamentacao_escola);
$escola ->setPortaria_escola($portaria_escola);
$escola ->setAutorizacao_escola($autorizacao_escola);

try {
    $escola->inserir_escola();
    echo "<script>confirmacao()</script>";
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}