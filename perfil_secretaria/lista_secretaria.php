<?php
include_once '../classes/Usuario.php';

$pendentes = new Usuario();
$mostrar_pendentes = $pendentes->usuarios_pendente();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="../layout/css/local.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <script src="../layout/js/mascara_local.js"></script>
        <script src="../layout/js/validacao_local.js"></script>
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">
        <title>SECRETARIA ESCOLAR</title>
    </head>

    <body>
        <div class="cabecalho">
            <div class="banner">
                <img src="../imagens/logo.png">
            </div>
        </div>

        <nav class="navbar navbar-default"><!-- inicio menu -->
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_secretaria.php"> Início</a></li>
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_secretaria.php"> Cadastrar</a></li>
                        <li><a class="glyphicon glyphicon-pushpin" href="vincular_secretaria.php"> Vincular</a></li>
                        <li class="active"><a class="glyphicon glyphicon-list"> Listar<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../index.php"> Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- fim menu -->

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-list" href="#list_turmas" data-toggle="pill"> Listar Turmas</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_alunos" data-toggle="pill"> Listar Alunos</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_educadores" data-toggle="pill"> Listar Educadores</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_disciplinas" data-toggle="pill"> Listar Disciplinas</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="list_turmas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODAS AS TURMAS</div>
                            <div class="panel-body box_conteudo">

                                <table width="100%">
                                    <tr>
                                        <th data-field="teste">NOME</th>
                                        <th data-field="teste">TELEFONE</th>
                                        <th data-field="teste">PERFIL</th>
                                        <th data-field="teste">VISUALIZAR REGISTRO</th>
                                    </tr>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_alunos">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODOS OS ALUNO</div>
                            <div class="panel-body box_conteudo">

                                <table width="100%">
                                    <tr>
                                        <th data-field="teste">NOME</th>
                                        <th data-field="teste">TELEFONE</th>
                                        <th data-field="teste">PERFIL</th>
                                        <th data-field="teste">VISUALIZAR REGISTRO</th>
                                    </tr>

                                    <tbody> 
                                        <?php
                                        foreach ($mostrar_pendentes as $linha_pendente) {
                                            echo "<tr>"
                                            . "<form action='mostrardados.php' method='post'>" .
                                            "<td>" . $linha_pendente->nome_usuario . "</td>" .
                                            "<td>" . $linha_pendente->fone_usuario . "</td>" .
                                            "<td>" . $linha_pendente->perfil_usuario . "</td>" .
                                            "<td> <input type='hidden' name='escola' value=" . $linha_pendente->id_usuario . ">"
                                            . "<input type='submit' class='btn btn-success' value='ver'></td>" .
                                            "</form></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <label for="inputNivelDisciplina">Usuários</label><br>
                                <select class="form-control" name="id_aprovado">
                                    <?php
                                    foreach ($mostrar_pendentes as $linha_pendente) {
                                        echo "<option value='" . $linha_pendente->id_usuario . "'>" . $linha_pendente->id_usuario . " Nome: " . $linha_pendente->nome_usuario . " - Fone: " . $linha_pendente->fone_usuario . " - Perfil: " . $linha_pendente->perfil_usuario . "</option>";
                                    }
                                    ?>
                                </select>



                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_educadores">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODOS OS EDUCADORES</div>
                            <div class="panel-body box_conteudo">

                                <table width="100%">
                                    <tr>
                                        <th data-field="teste">NOME</th>
                                        <th data-field="teste">TELEFONE</th>
                                        <th data-field="teste">PERFIL</th>
                                        <th data-field="teste">VISUALIZAR REGISTRO</th>
                                    </tr>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_disciplinas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODAS AS DISCIPLINAS</div>
                            <div class="panel-body box_conteudo">

                                <table width="100%">
                                    <tr>
                                        <th data-field="teste">NOME</th>
                                        <th data-field="teste">TELEFONE</th>
                                        <th data-field="teste">PERFIL</th>
                                        <th data-field="teste">VISUALIZAR REGISTRO</th>
                                    </tr>

                                </table>

                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </body>
</html>
