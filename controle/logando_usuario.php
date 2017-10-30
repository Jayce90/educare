<?php

session_start();
require_once '../classes/Escola.php';
require_once '../classes/Usuario.php';

$apelido_login = isset($_POST['apelido_login']) ? $_POST['apelido_login'] : '';
$senha_login = isset($_POST['senha_login']) ? $_POST['senha_login'] : '';

$usuario_login = new Usuario();

$login = $usuario_login->login_usuario($apelido_login, $senha_login);

if (isset($login)) {
    $_SESSION['id'] = $login->id_usuario;
    $_SESSION['nome'] = $login->nome_usuario;
    $_SESSION['email'] = $login->email_usuario;
    $_SESSION['perfil'] = $login->perfil_usuario;
    $_SESSION['status'] = $login->status_usuario;
    if ($_SESSION['status'] == "aguardando") {
        header("location:../aguardandoConfirmacao.php");
    } elseif ($_SESSION['status'] == "aprovado" && $_SESSION['perfil'] == "Secretário(a)") {
        header("location:../perfil_secretaria/index_secretaria.php");
    } elseif ($_SESSION['status'] == "aprovado" && $_SESSION['perfil'] == "Semed") {
        header("location:../perfil_semed/index_semed.php");
    } else {
        echo "<script>falha_login()</script>";
    }
} else {
    echo "<script>falha_login()</script>";
}

