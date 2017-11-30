<script language="JavaScript">
    function confirmacao()
    {
        alert("Mensagem enviada com sucesso!");
    }
</script>

<?php
session_start();

include_once '../classes/Chat.php';

$assunto_chat = isset($_POST['assunto_chat']) ? $_POST['assunto_chat'] : '';
$texto_chat = isset($_POST['texto_chat']) ? $_POST['texto_chat'] : '';
$perfil_chat = isset($_POST['perfil_chat']) ? $_POST['perfil_chat'] : '';
$avatar_chat = $_SESSION['avatar'];
$id_usuario = $_SESSION['id'];
$data_chat = date("H:i:s d-m-Y");

$chat = new Chat();

$chat->setAssunto_chat($assunto_chat);
$chat->setTexto_chat($texto_chat);
$chat->setAvatar_chat($avatar_chat);
$chat->setPerfil_chat($perfil_chat);
$chat->setData_chat($data_chat);
$chat->setId_usuario($id_usuario);

$chat->inserir_chat();

echo "<script>confirmacao()</script>";

