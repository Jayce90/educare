<script language="JavaScript">
    function confirmacao()
    {
        alert("INEP inserido com sucesso!");
        history.back(-1);
    }
</script>


<?php
include_once '../classes/Aluno.php';

$numero_inep = isset($_POST['numero_inep']) ? $_POST['numero_inep'] : '';
$id_entidade = isset($_POST['id_aluno']) ? $_POST['id_aluno'] : '';

$aluno_inep = new Aluno();

$aluno_inep ->setInep_Aluno($numero_inep);
$aluno_inep ->setId_Aluno($id_entidade);

$aluno_inep ->inserir_inep();

echo $numero_inep;
echo $id_entidade;

//echo "<script>confirmacao()</script>";
