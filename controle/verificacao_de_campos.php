<?php

function validar_array($conteudo) {
    if ($conteudo == "") {
        $resposta = 'NÃO CONSTA';
        return $resposta;
    } else {
        $resposta = implode("; ", $conteudo);
        return $resposta;
    }
}