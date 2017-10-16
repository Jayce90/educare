<?php

$id_aluno = isset($_POST['cad_id_aluno']) ? $_POST['cad_id_aluno'] : '';
$nome_aluno = isset($_POST['cad_nome_aluno']) ? $_POST['cad_nome_aluno'] : '';
$nascimento_aluno = isset($_POST['cad_nasc_aluno']) ? $_POST['cad_nasc_aluno'] : '';
$sexo_aluno = isset($_POST['cad_sexo_aluno']) ? $_POST['cad_sexo_aluno'] : '';
$nis_aluno = isset($_POST['cad_nis_aluno']) ? $_POST['cad_nis_aluno'] : '';
$raca_aluno = isset($_POST['cad_raca_aluno']) ? $_POST['cad_raca_aluno'] : '';
$mae_aluno = isset($_POST['cad_mae_aluno']) ? $_POST['cad_mae_aluno'] : '';
$nacionalidade_aluno = isset($_POST['cad_nacionalidade_aluno']) ? $_POST['cad_nacionalidade_aluno'] : '';
$pais_aluno = isset($_POST['cad_pais_aluno']) ? $_POST['cad_pais_aluno'] : '';
$estado_nasc_aluno = isset($_POST['cad_estadonasc_aluno']) ? $_POST['cad_estadonasc_aluno'] : '';
$fone_aluno = isset($_POST['cad_telefone_aluno']) ? $_POST['cad_telefone_aluno'] : '';
$municipio_nasc_aluno = isset($_POST['cad_municipionasc_aluno']) ? $_POST['cad_municipionasc_aluno'] : '';
$tipos_deficiencia_aluno = isset($_POST['cad_tipo_deficiencia_aluno']) ? $_POST['cad_tipo_deficiencia_aluno'] : '';
$tipo_deficiencia_aluno = implode("; ", $tipos_deficiencia_aluno);
$identidade_aluno = isset($_POST['cad_identidade_aluno']) ? $_POST['cad_identidade_aluno'] : '';
$complemento_identidade_aluno = isset($_POST['cad_complemento_identidade_aluno']) ? $_POST['cad_complemento_identidade_aluno'] : '';
$orgao_identidade_aluno = isset($_POST['cad_orgao_identidade_aluno']) ? $_POST['cad_orgao_identidade_aluno'] : '';
$estado_identidade_aluno = isset($_POST['cad_estado_identidade_aluno']) ? $_POST['cad_estado_identidade_aluno'] : '';
$data_identidade_aluno = isset($_POST['cad_data_identidade_aluno']) ? $_POST['cad_data_identidade_aluno'] : '';