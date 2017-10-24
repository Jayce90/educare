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
        <link href="layout/css/local.css" rel="stylesheet">
        <script src="layout/js/bootstrap.min.js"></script>
        <script src="layout/js/componente_local.js"></script>
        <script src="layout/js/mascara_local.js"></script>
        <script src="layout/js/validacao_local.js"></script>
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
                            <img src="imagens/loginusuarios.png" alt="..." class="img-circle imagem_box cursor_alterado" data-toggle="modal" data-target="#modalLogin"><br>
                            <a class="cursor_alterado" data-toggle="modal" data-target="#modalLogin">Login</a>
                        </div>
                        <div class="col-md-4">
                            <img src="imagens/cadastrarusuarios.png" alt="..." class="img-circle imagem_box cursor_alterado" data-toggle="modal" data-target="#modalCadastro"><br>
                            <a class="cursor_alterado" data-toggle="modal" data-target="#modalCadastro">Novo Usuário</a>
                        </div>
                        <div class="col-md-4">
                            <img src="imagens/listavagas.png" alt="..." class="img-circle imagem_box cursor_alterado"><br>
                            <a class="cursor_alterado" href="perfil_semed/index_semed.php">Lista de Vagas</a>
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
            <a href="https://www.facebook.com/cadcorporation/">
                <img src="imagens/banner_cad.png" class="imagem_banner_box">
            </a>
        </div>


        <!-- Modal - Login -->
        <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Login - Usuário</h4>
                    </div>
                    <div class="modal-body">
                        <form name="loginUsuario" action="controle/autenticacao.php" method="post">

                            <div class="form-group">
                                <label for="inputUsuario">Usuário</label>
                                <input type="text" name="login_usuario" class="form-control" id="inputUsuario" placeholder="digite o usuário">
                            </div>

                            <div class="form-group">
                                <label for="inputSenha">Senha</label>
                                <input type="password" name="senha_usuario" class="form-control" id="inputSenha" placeholder="digite a senha">
                            </div> 

                            <button type="submit" class="btn btn-primary btn-lg" onclick="return validar_login()">Enviar</button>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal - Login -->
        <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Cadastro - Usuário</h4>
                    </div>
                    <div class="modal-body">
                        <form action="controle/cadastrando_usuario.php" method="post">
                            <div class="form-group">
                                <label for="inputNomeusuario">Nome</label>
                                <input type="text" name="cad_nome_usuario" class="form-control" id="inputNomeusuario" placeholder="nome completo">
                            </div>

                            <div class="form-group">
                                <label for="inputEmailusuario">Email</label>
                                <input type="text" name="cad_email_usuario" class="form-control" id="inputEmailusuario" placeholder="digite o email">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputTelefoneUsuario">Telefone</label>
                                        <input type="text" name="cad_fone_usuario" class="form-control" id="inputTelefoneUsuario" placeholder="91 000000000" required="" maxlength="12" onkeypress="formatar('## #########', this)" onblur="showhide()">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputCpfUsuario">CPF</label>
                                        <input type="text" name="cad_cpf_usuario" class="form-control" id="inputCpfUsuario" placeholder="digite o CPF" required="" maxlength="14" onkeypress="formatar('###.###.###-##', this)" onblur="showhide()">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputApelidoUsuario">Apelido</label>
                                <input type="text" name="cad_apelido_usuario" class="form-control" id="inputApelidoUsuario" placeholder="apelido de usuário">
                            </div>

                            <div class="form-group">
                                <label for="inputSenhaUsuario">Senha</label>
                                <input type="password" name="cad_senha_usuario" class="form-control" id="inputSenhaUsuario" placeholder="digite a senha">
                            </div>

                            <div class="form-group">
                                <label for="inputConfirmarSenhaUsuario">Confirme a senha</label>
                                <input type="password" name="cad_confirmar_senha_usuario" class="form-control" id="inputConfirmarSenhaUsuario" placeholder="confirme a senha"><br>

                                <label for="inputPerfilUsuario">Perfil</label>
                                <select class="form-control" name="cad_perfil_usuario">
                                    <option value="">Selecione</option>
                                    <option value="Aluno">Aluno</option>
                                    <option value="Professor(a)">Professor(a)</option>
                                    <option value="Secretário(a)">Secretário(a)</option>
                                </select>

                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
