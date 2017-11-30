<script language="JavaScript">
    function confirmacao()
    {
        alert("Disciplina cadastrada com sucesso!");
        history.back(-1);
    }
</script>

<?php
session_start();
include_once '../classes/Disciplina.php';

$nome_disciplina = isset($_POST['cad_nome_disciplina']) ? $_POST['cad_nome_disciplina'] : '';
$descricao_disciplina = isset($_POST['cad_descricao_disciplina']) ? $_POST['cad_descricao_disciplina'] : '';
$cargaHoraria_disciplina = isset($_POST['cad_carga_horaria_disciplina']) ? $_POST['cad_carga_horaria_disciplina'] : '';
$nivel_disciplina = isset($_POST['cad_nivel_disciplina']) ? $_POST['cad_nivel_disciplina'] : '';
$etapa_disciplina = isset($_POST['cad_etapa_disciplina']) ? $_POST['cad_etapa_disciplina'] : '';
$id_professor = isset($_POST['cad_professor_disciplina']) ? $_POST['cad_professor_disciplina'] : '';
$id_turma = isset($_POST['cad_turma_disciplina']) ? $_POST['cad_turma_disciplina'] : '';
$id_escola = $_SESSION['id_escola'];

$disciplina = new Disciplina();

$disciplina ->setNome_disciplina(mb_strtoupper($nome_disciplina));
$disciplina ->setDescricao_disciplina($descricao_disciplina);
$disciplina ->setCargaHoraria_disciplina($cargaHoraria_disciplina);
$disciplina ->setNivel_disciplina($nivel_disciplina);
$disciplina ->setEtapa_disciplina($etapa_disciplina);
$disciplina ->setId_professor($id_professor);
$disciplina ->setId_turma($id_turma);
$disciplina ->setId_escola($id_escola);

$disciplina ->inserir_disciplina();

echo "<script>confirmacao()</script>";