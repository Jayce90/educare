<?php

include_once '../classes/Usuario.php';

$nome_usuario = isset($_POST['']) ? $_POST[''] : '';
$email_usuario = isset($_POST['']) ? $_POST[''] : '';
$fone_usuario = isset($_POST['']) ? $_POST[''] : '';
$cpf_usuario = isset($_POST['']) ? $_POST[''] : '';
$apelido_usuario = isset($_POST['']) ? $_POST[''] : '';
$senha_usuario = isset($_POST['']) ? $_POST[''] : '';
$perfil_usuario = isset($_POST['']) ? $_POST[''] : '';
$status_usuario = "aguardando";
$id_escola = 1001;

$usuario = new Usuário();

$usuario->setNome($nome_usuario);
$usuario->setEmail($email_usuario);
$usuario->setFone($fone_usuario);
$usuario->setCPF($cpf_usuario);
$usuario->setApelido($apelido_usuario);
$usuario->setSenha($senha_usuario);
$usuario->setPerfil($perfil_usuario);
$usuario->setStatus($status_usuario);
$usuario->setId_escola($id_escola);

$usuario->inserir_usuario();