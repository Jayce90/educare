<script language="JavaScript" charset="utf-8">
    function falhaLogin()
    {
        alert("Usuario n\u00e3o cadastrado no sistema!");
        location.href="../index.php";
    }
</script>

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
    $_SESSION['id_escola'] = $login->escola_id_escola;
    if ($_SESSION['status'] == "aguardando") {
        header("location:../aguardandoConfirmacao.php");
    } elseif ($_SESSION['status'] == "aprovado" && $_SESSION['perfil'] == "Secretário(a)") {
        header("location:../perfil_secretaria/index_secretaria.php");
    } elseif ($_SESSION['status'] == "aprovado" && $_SESSION['perfil'] == "Semed") {
        header("location:../perfil_semed/index_semed.php");
    } else {
        echo "<script>falhaLogin()</script>";
    }
} else {
    echo "<script>falhaLogin()</script>";
}

