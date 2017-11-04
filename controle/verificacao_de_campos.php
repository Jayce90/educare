<?php

function validar_array($conteudo) {
    if ($conteudo == "") {
        $resposta = ' ';
        return $resposta;
    } else {
        $resposta = implode("; ", $conteudo);
        return $resposta;
    }
}