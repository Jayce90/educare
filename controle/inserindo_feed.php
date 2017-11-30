<?php
session_start();

include_once '../classes/Feed.php';

$titulo_feed = isset($_POST['titulo_feed']) ? $_POST['titulo_feed'] : '';
$texto_feed = isset($_POST['texto_feed']) ? $_POST['texto_feed'] : '';
$perfil_feed = isset($_POST['perfil_feed']) ? $_POST['perfil_feed'] : '';
$imagem_feed = '';
$data_feed = date("H:i:s d-m-Y");
$id_escola = $_SESSION['id_escola'];

$feed = new Feed();

$feed->setTitulo_feed(mb_strtoupper($titulo_feed));
$feed->setTexto_feed($texto_feed);
$feed->setPerfil_feed($perfil_feed);
$feed->setImagem_feed($imagem_feed);
$feed->setData_feed($data_feed);
$feed->setId_escola($id_escola);

$feed->inserir_feed();

echo 'inserindo feed';

