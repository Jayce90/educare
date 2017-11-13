<?php
include_once '../classes/Escola.php';

$escola = new Escola();
$mostrar_escola = $escola->ler_todos_org();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="../layout/css/local.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <script src="../layout/js/componente_local.js"></script>
        <script src="../layout/js/mascara_local.js"></script>
        <script src="../layout/js/validacao_local.js"></script>
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">
        <title>Cadastro Usuário</title>
    </head>
    <body id="fundo_index">

        <div class="cabecalho">
            <div class="banner">
                <img src="../imagens/logo.png">
            </div>
        </div>


        <div class="panel panel-primary box_cadastro">
            <div class="panel-heading"> <a href="../index.php"><button class="btn btn-default btn-sm">Voltar</button></a> &nbsp;&nbsp;&nbsp; CADASTRO USUÁRIO</div>
            <div class="panel-body box_conteudo">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form action="../controle/cadastrando_usuario.php" method="post">
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
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="inputVincularTurmaEducador">Escola:</label><br>

                                <select class="form-control" name="cad_id_escola_usuario">
                                    <?php
                                    foreach ($mostrar_escola as $linha_escola) {
                                        echo "<option value='" . $linha_escola->id_escola . "'>" . $linha_escola->nome_escola . "</option>";
                                    }
                                    ?>                                              
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </form>
                    </div>
                    <div class="col-md-4"></div>
                </div>

            </div>

        </div>

        <div class="banner_box">
            <a href="http://www.prefeituratomeacu.pa.gov.br/">
                <img src="../imagens/banner_prefeitura.png" class="imagem_banner_box">
            </a>
            <a href="https://www.facebook.com/Secretaria-Municipal-de-Educa%C3%A7%C3%A3o-e-Desporto-Tom%C3%A9-A%C3%A7u-1431109870283496/">
                <img src="../imagens/banner_semed.png" class="imagem_banner_box">
            </a>
            <a href="../imagens/banner_cad.png">
                <img src="../imagens/banner_cad.png" class="imagem_banner_box">
            </a>
        </div>






    </body>
</html>
