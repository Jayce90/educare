<?php
session_start();
require '../controle/autenticacao.php';
include_once '../classes/Disciplina.php';

Secretaria();

$id_escola = $_SESSION['id_escola'];

$listar_disciplina = new Disciplina();
$mostrar_disciplina = $listar_disciplina->ler_professor_turma($id_escola);
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="../layout/css/local.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <script src="../layout/js/mascara_local.js"></script>
        <script src="../layout/js/validacao_local.js"></script>
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">

        <script>
            $(function () {
                var availableTags = [
                    "ActionScript",
                    "AppleScript",
                    "Asp",
                    "BASIC",
                    "C",
                    "C++",
                    "Clojure",
                    "COBOL",
                    "ColdFusion",
                    "Erlang",
                    "Fortran",
                    "Groovy",
                    "Haskell",
                    "Java",
                    "JavaScript",
                    "Lisp",
                    "Perl",
                    "PHP",
                    "Python",
                    "Ruby",
                    "Scala",
                    "Scheme"
                ];
                $("#tags").autocomplete({
                    source: availableTags
                });
            });
        </script>

        <title>NOTAS - ALUNO(A)</title>
    </head>

    <body>
        <div class="cabecalho">
            <div class="banner">
                <img src="../imagens/logo.png">
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_secretaria.php"> Início</a></li>
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_secretaria.php"> Cadastrar</a></li>
                        <li><a class="glyphicon glyphicon-pushpin" href="vincular_secretaria.php"> Vincular</a></li>
                        <li><a class="glyphicon glyphicon-list" href="lista_secretaria.php"> Listar</a></li>
                        <li class="active"><a class="glyphicon glyphicon-pushpin"> Notas<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2"></div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="vincular_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">INSERIR NOTAS ALUNO (A)</div>
                            <div class="panel-body box_conteudo">

                                <select class="form-control" id="disciplina">
                                    <option value="">Selecione</option>
                                    <?php
                                    foreach ($mostrar_disciplina as $linha_disciplina) {
                                        echo "<option value=' $linha_disciplina->id_disciplina '>" . $linha_disciplina->nome_disciplina . " - Educador(a): " . $linha_disciplina->nome_professor . " - Nível: " . $linha_disciplina->nivel_turma . " - Etapa: " . $linha_disciplina->etapa_turma . "</option>"
                                        ;
                                    }
                                    ?>
                                </select>

                                <div class="ui-widget">
                                    <label for="tags">Tags: </label>
                                    <input id="tags">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </body>
</html>
