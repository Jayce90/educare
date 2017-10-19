<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="layout/css/web_escola.css" rel="stylesheet">
        <script src="layout/js/bootstrap.min.js"></script>
        <script src="layout/js/local.js"></script>
        <link rel="shortcut icon" href="imagens/icone.png" type="image/x-icon">
        <title>Bem Vindo</title>
    </head>
    <body id="fundo_index">

        <div class="cabecalho">
            <div class="banner">
                <img src="imagens/logo.png">
            </div>
        </div>


        <div class="panel panel-default" id="box_login">
            <div class="panel-body">
                <div class="grupo_login">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="imagens/loginusuarios.png" alt="..." class="img-circle imagem_box cursor_alterado" data-toggle="modal" data-target="#myModal"><br>
                            <a class="cursor_alterado" data-toggle="modal" data-target="#myModal">Login</a>
                        </div>
                        <div class="col-md-4">
                            <img src="imagens/cadastrarusuarios.png" alt="..." class="img-circle imagem_box"><br>
                            <a href="perfil_semed/index_semed.php">Novo Usuário</a>
                        </div>
                        <div class="col-md-4">
                            <img src="imagens/listavagas.png" alt="..." class="img-circle imagem_box"><br>
                            <a href="perfil_semed/index_semed.php">Lista de Vagas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner_box">
            <a href="http://www.prefeituratomeacu.pa.gov.br/">
                <img src="imagens/banner_prefeitura.png" class="imagem_banner_box">
            </a>
            <a href="https://www.facebook.com/Secretaria-Municipal-de-Educa%C3%A7%C3%A3o-e-Desporto-Tom%C3%A9-A%C3%A7u-1431109870283496/">
                <img src="imagens/banner_semed.png" class="imagem_banner_box">
            </a>
            <a href="imagens/banner_cad.png">
                <img src="imagens/banner_cad.png" class="imagem_banner_box">
            </a>
        </div>

        
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
