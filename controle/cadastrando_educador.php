<?php

include_once '../classes/Educador.php';
include 'verificacao_de_campos.php';

$nome_turma = isset($_POST['cad_nome_turma']) ? $_POST['cad_nome_turma'] : '';