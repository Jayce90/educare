<script language="JavaScript">
    function confirmacao()
    {
        alert("Turma cadastrada com sucesso!");
        history.back(-1);
    }
</script>

<?php

include_once '../classes/Turma.php';
include 'verificacao_de_campos.php';

$nome_turma = isset($_POST['cad_nome_turma']) ? $_POST['cad_nome_turma'] : '';
$capacidade_turma = isset($_POST['cad_capacidade_turma']) ? $_POST['cad_capacidade_turma'] : '';
$ano_turma = isset($_POST['cad_ano_turma']) ? $_POST['cad_ano_turma'] : '';
$horarios_turma = isset($_POST['cad_horario_turma']) ? $_POST['cad_horario_turma'] : '';
$horario_turma = validar_array($horarios_turma);
$turno_turma = isset($_POST['cad_turno_turma']) ? $_POST['cad_turno_turma'] : '';
$dias_semana_turma = isset($_POST['cad_diassemana_turma']) ? $_POST['cad_diassemana_turma'] : '';
$dias_turma = validar_array($dias_semana_turma);
$tipo_turma = isset($_POST['cad_tipo_turma']) ? $_POST['cad_tipo_turma'] : '';
$programa_turma = isset($_POST['cad_programa_turma']) ? $_POST['cad_programa_turma'] : '';
$aee_turma = isset($_POST['cad_aeeatividades_turma']) ? $_POST['cad_aeeatividades_turma'] : '';
$modalidade_turma = isset($_POST['cad_modalidade_turma']) ? $_POST['cad_modalidade_turma'] : '';
$nivel_turma = isset($_POST['cad_nivel_turma']) ? $_POST['cad_nivel_turma'] : '';
$etapa_turma = isset($_POST['cad_etapa_turma']) ? $_POST['cad_etapa_turma'] : '';
$descricao_turma = isset($_POST['cad_descricao_turma']) ? $_POST['cad_descricao_turma'] : '';
$id_escola = 1;

$turma = new Turma();

$turma ->setNome_turma($nome_turma);
$turma ->setCapacidade_turma($capacidade_turma);
$turma ->setAno_turma($ano_turma);
$turma ->setHorario_turma($horario_turma);
$turma ->setTurno_turma($turno_turma);
$turma ->setDias_turma($dias_turma);
$turma ->setTipo_turma($tipo_turma);
$turma ->setPrograma_turma($programa_turma);
$turma ->setAEE_turma($aee_turma);
$turma ->setModalidade_turma($modalidade_turma);
$turma ->setNivel_turma($nivel_turma);
$turma ->setEtapa_turma($etapa_turma);
$turma ->setDescricao_turma($descricao_turma);
$turma ->setId_escola($id_escola);

try {
    $turma ->inserir_turma();
    echo "<script>confirmacao()</script>";
} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}