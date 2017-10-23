<script language="JavaScript">
    function secretariaLogado()
    {
        alert("Usuario (Secretaria) logado com sucesso!");
        location.href="../perfil_secretaria/index_secretaria.php";
    }
    
    function semedLogado()
    {
        alert("Usuario (SEMED) logado com sucesso!");
        location.href="../perfil_semed/index_semed.php";
    }
    
    function falhaLogado()
    {
        alert("Usuario não cadastrado no sistema!");
        location.href="../index.php";
    }
</script>

<?php

$login_usuario = isset($_POST['login_usuario']) ? $_POST['login_usuario'] : '';
$senha_usuario = isset($_POST['senha_usuario']) ? $_POST['senha_usuario'] : '';

if ($login_usuario =="secretaria" && $senha_usuario == "123") {
    echo "<script>secretariaLogado()</script>";
} elseif ($login_usuario =="semed" && $senha_usuario == "123") {
    echo "<script>semedLogado()</script>";
} else {
    echo "<script>falhaLogado()</script>";
}