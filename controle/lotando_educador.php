<script language="JavaScript" charset="utf-8">
    function sucessoLotacao()
    {
        alert("Educador cadastrado com sucesso no sistema!");
        history.back(-1);
    }
    function falhaLotacao()
    {
        alert("Error: Educador já cadastrado nesta escola!");
        history.back(-1);
    }
</script>

<?php
session_start();
require_once '../classes/Lotacao.php';

$id_professor = isset($_POST['vincular_id_educador']) ? $_POST['vincular_id_educador'] : '';
$id_escola = 1;
$ano_lotacao = isset($_POST['ano_vincular_educador']) ? $_POST['ano_vincular_educador'] : '';
$cargaHoraria_lotacao = isset($_POST['vincular_cargaHoraria_educador']) ? $_POST['vincular_cargaHoraria_educador'] : '';

$lotacao = new Lotacao();

$lotacao->setId_professor($id_professor);
$lotacao->setId_escola($id_escola);
$lotacao->setAno_lotacao($ano_lotacao);
$lotacao->setCargaHoraria_lotacao($cargaHoraria_lotacao);

$retorno = $lotacao->lotar_educador();

if (!isset($retorno)) {
    echo "<script>falhaLotacao()</script>";
} else {
    echo "<script>sucessoLotacao()</script>";
}
