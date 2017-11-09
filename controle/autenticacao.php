<script language="JavaScript">
    function naoLogado()
    {
        alert("Usuario não logado!");
        location.href="../index.php";
    }
    function erroNivel()
    {
        alert("Erro: você não tem permissão para acessar essa area!");
        location.href="../index.php";
    }
</script>

<?php

//function usuarioLogado() {
//    if (!isset($_SESSION["nivel"]) || !isset($_SESSION["nivel"])) {
//        echo "<script>naoLogado()</script>";
//    }
//}

function Secretaria() {
    if ($_SESSION['status']  != 'aprovado' || $_SESSION['perfil'] != "Secretário(a)") {
        echo "<script>erroNivel()</script>";
    }
}

function Semed() {
    if ($_SESSION['status']  != 'aprovado' || $_SESSION['perfil'] != "Semed") {
        echo "<script>erroNivel()</script>";
    }
}

function Admin() {
    if ($_SESSION["nivel"] != 'a') {
        echo "<script>erroNivel()</script>";
    }
}
