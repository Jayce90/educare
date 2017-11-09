<script language="JavaScript">
    function confirmacao()
    {
        alert("Aluno vinculado com sucesso!");
        location.href="../perfil_secretaria/vincular_secretaria.php";
    }
</script>


<?php
include_once '../classes/Disciplinaealuno.php';

$obj_disciplina = new Disciplinaealuno();


$id_disciplina_vincular = isset($_POST['id_disciplina_vincular']) ? $_POST['id_disciplina_vincular'] : '';
$id_aluno_vincular = isset($_POST['vincular_id_aluno']) ? $_POST['vincular_id_aluno'] : '';
$ano_vincular_aluno = "2017";

foreach ($id_disciplina_vincular as $linha_disciplina) {

    $lido_ids = $obj_disciplina->ler_ids_disciplinas($linha_disciplina);

    $obj_disciplina->setAno_disciplinaealuno($ano_vincular_aluno);
    $obj_disciplina->setId_disciplina($lido_ids->id_disciplina);
    $obj_disciplina->setId_turma($lido_ids->turma_id_turma);
    $obj_disciplina->setId_professor($lido_ids->lotacao_professor_id_professor);
    $obj_disciplina->setId_escola($lido_ids->lotacao_escola_id_escola);
    $obj_disciplina->setId_aluno($id_aluno_vincular);
    
    $obj_disciplina ->vincular_aluno();
}

echo "<script>confirmacao()</script>";