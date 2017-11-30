<script language="JavaScript">
    function confirmacao()
    {
        alert("Usuario cadastrado com sucesso!");
        location.href="../index.php";
    }
</script>


<?php
//location.href = "../index.php";
include_once '../classes/Usuario.php';

$nome_usuario = isset($_POST['cad_nome_usuario']) ? $_POST['cad_nome_usuario'] : '';
$email_usuario = isset($_POST['cad_email_usuario']) ? $_POST['cad_email_usuario'] : '';
$fone_usuario = isset($_POST['cad_fone_usuario']) ? $_POST['cad_fone_usuario'] : '';
$cpf_usuario = isset($_POST['cad_cpf_usuario']) ? $_POST['cad_cpf_usuario'] : '';
$apelido_usuario = isset($_POST['cad_apelido_usuario']) ? $_POST['cad_apelido_usuario'] : '';
$senha_usuario = isset($_POST['cad_senha_usuario']) ? $_POST['cad_senha_usuario'] : '';
$avatar_usuario = 'secretarias.png';
$perfil_usuario = isset($_POST['cad_perfil_usuario']) ? $_POST['cad_perfil_usuario'] : '';
$status_usuario = "aguardando";
$id_escola = isset($_POST['cad_id_escola_usuario']) ? $_POST['cad_id_escola_usuario'] : '';

$senha_cript = sha1($senha_usuario);

$usuario = new Usuario();

$usuario->setNome(mb_strtoupper($nome_usuario));
$usuario->setEmail($email_usuario);
$usuario->setFone($fone_usuario);
$usuario->setCPF($cpf_usuario);
$usuario->setApelido($apelido_usuario);
$usuario->setSenha($senha_cript);
$usuario->setAvatar($avatar_usuario);
$usuario->setPerfil($perfil_usuario);
$usuario->setStatus($status_usuario);
$usuario->setId_escola($id_escola);

$usuario->inserir_usuario();
echo "<script>confirmacao()</script>";
