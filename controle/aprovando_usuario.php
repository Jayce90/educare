<script language="JavaScript">
    function confirmacao()
    {
        alert("Usuario aprovado com sucesso!");
        history.back(-1);
    }
</script>

<?php

require_once '../classes/Usuario.php';

$id_aprovado = isset($_POST['id_aprovado']) ? $_POST['id_aprovado'] : '';

$usuario_aprovado = new Usuario();
$usuario_aprovado->aprovando_usuarios_pendente($id_aprovado);

echo "<script>confirmacao()</script>";