<?php
session_start();
require '../controle/autenticacao.php';
include_once '../classes/Turma.php';
include_once '../classes/Aluno.php';
include_once '../classes/Lotacao.php';
include_once '../classes/Disciplina.php';
include_once '../classes/Disciplinaealuno.php';

Semed();

$id_escola = $_SESSION['id_escola'];
$ano_lotacao = "2017";

$listar_turmas = new Turma();
$mostrar_turma = $listar_turmas->listagem_por_escola($id_escola, "turma");

$listar_alunos = new Aluno();
$mostrar_aluno = $listar_alunos->ler_todos_alunos_escola($id_escola);

$listar_educador = new Lotacao();
$mostrar_educador = $listar_educador->listagem_lotacao($id_escola, $ano_lotacao);

$listar_disciplina = new Disciplina();
$mostrar_disciplina = $listar_disciplina->ler_professor_turma($id_escola);

$listar_alunos_turma = new Disciplinaealuno();

if (isset($_POST['listar_alunos_turma'])) {

    $id_lista_turma = isset($_POST['id_lista_turma']) ? $_POST['id_lista_turma'] : '';

    $mostrar_alunos_turma = $listar_alunos_turma->ler_alunos_turma($id_lista_turma, $id_escola);
    echo "<script>abrirmodal()</script>";
} elseif (!isset($_POST['listar_alunos_turma'])) {
    unset($mostrar_disciplinas);
    $mostrar = FALSE;
}
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
        <title>LISTAS</title>
    </head>

    <body>
        <div class="cabecalho">
            <div class="banner">
                <div class="imagem_banner">
                    <img src="../imagens/logo.png">
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_semed.php"> Início</a></li>
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_semed.php"> Cadastrar</a></li>
                        <li class="active"><a class="glyphicon glyphicon-list"> Listar<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-list-alt" href="impressao.php"> Imprimir</a></li>
                        <li><a class="glyphicon glyphicon-pencil" href="feed_semed.php"> Feed</a></li>
                        <li><a class="glyphicon glyphicon-comment" href="chat_semed.php"> Chat</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-list" href="#list_turmas" data-toggle="pill"> Listar Turmas</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_alunos" data-toggle="pill"> Listar Alunos</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_educadores" data-toggle="pill"> Listar Educadores</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_disciplinas" data-toggle="pill"> Listar Disciplinas</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_aluno_turmas" data-toggle="pill"> Listar Aluno/Turma</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#list_aluno_disciplinas" data-toggle="pill"> Listar Aluno/Disciplina</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="list_turmas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODAS AS TURMAS</div>
                            <div class="panel-body box_conteudo">

                                <table class="table table-condensed">
                                    <tr class="fontsize">
                                        <th data-field="teste">NOME</th>
                                        <th data-field="teste">CAPACIDADE</th>
                                        <th data-field="teste">TURNO</th>
                                        <th data-field="teste">HORÁRIO</th>
                                        <th data-field="teste">NÍVEL</th>
                                        <th data-field="teste">ETAPA</th>
                                        <th data-field="teste">DIAS</th>
                                        <th data-field="teste">VISUALIZAR</th>
                                    </tr>
                                    <tbody> 
                                        <?php
                                        foreach ($mostrar_turma as $linha_turma) {
                                            echo "<tr class='fontsize'>"
                                            . "<form action='' method='post'>" .
                                            "<td>" . $linha_turma->nome_turma . "</td>" .
                                            "<td>" . $linha_turma->capacidade_turma . "</td>" .
                                            "<td>" . $linha_turma->turno_turma . "</td>" .
                                            "<td>" . $linha_turma->horario_turma . "</td>" .
                                            "<td>" . $linha_turma->nivel_turma . "</td>" .
                                            "<td>" . $linha_turma->etapa_turma . "</td>" .
                                            "<td>" . $linha_turma->dias_turma . "</td>" .
                                            "<td> <input type='hidden' name='list_turma' value=" . $linha_turma->id_turma . ">"
                                            . "<input type='button' class='btn btn-success' value='Ver Registro'></td>" .
                                            "</form></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_alunos">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODOS OS ALUNOS</div>
                            <div class="panel-body box_conteudo">

                                <table class="table table-condensed">
                                    <tr class="fontsize">
                                        <th data-field="aluno">NOME</th>
                                        <th data-field="aluno">NASCIMENTO</th>
                                        <th data-field="aluno">SEXO</th>
                                        <th data-field="aluno">MÃE</th>
                                        <th data-field="aluno">DEFICIÊNCIA</th>
                                        <th data-field="aluno">TRANSPORTE PÚBLICO</th>
                                        <th data-field="teste">VISUALIZAR</th>
                                    </tr>

                                    <tbody> 
                                        <?php
                                        foreach ($mostrar_aluno as $linha_aluno) {
                                            echo "<tr class='fontsize'>"
                                            . "<form action='' method='post'>" .
                                            "<td>" . $linha_aluno->nome_aluno . "</td>" .
                                            "<td>" . $linha_aluno->nascimento_aluno . "</td>" .
                                            "<td>" . $linha_aluno->sexo_aluno . "</td>" .
                                            "<td>" . $linha_aluno->mae_aluno . "</td>" .
                                            "<td>" . $linha_aluno->deficiencia_aluno . "</td>" .
                                            "<td>" . $linha_aluno->transporte_aluno . "</td>" .
                                            "<td> <input type='hidden' name='list_aluno' value=" . $linha_aluno->id_aluno . ">"
                                            . "<input type='button' class='btn btn-success' value='Ver Registro'></td>" .
                                            "</form></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_educadores">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODOS OS EDUCADORES</div>
                            <div class="panel-body box_conteudo">

                                <table class="table table-condensed">
                                    <tr class="fontsize">
                                        <th data-field="educador">NOME</th>
                                        <th data-field="educador">CURSO</th>
                                        <th data-field="educador">PÓS GRADUAÇÃO</th>
                                        <th data-field="educador">OUTRO CURSO</th>
                                        <th data-field="educador">FUNÇÃO</th>
                                        <th data-field="educador">VINCULO</th>
                                        <th data-field="educador">VISUALIZAR</th>
                                    </tr>

                                    <tbody> 
                                        <?php
                                        foreach ($mostrar_educador as $linha_educador) {
                                            echo "<tr class='fontsize'>"
                                            . "<form action='' method='post'>" .
                                            "<td>" . $linha_educador->nome_professor . "</td>" .
                                            "<td>" . $linha_educador->curso_professor . "</td>" .
                                            "<td>" . $linha_educador->pos_graduacao_professor . "</td>" .
                                            "<td>" . $linha_educador->outro_curso_professor . "</td>" .
                                            "<td>" . $linha_educador->funcao_professor . "</td>" .
                                            "<td>" . $linha_educador->vinculo_professor . "</td>" .
                                            "<td> <input type='hidden' name='list_educador' value=" . $linha_educador->id_professor . ">"
                                            . "<input type='button' class='btn btn-success' value='Ver Registro'></td>" .
                                            "</form></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_disciplinas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE TODAS AS DISCIPLINAS</div>
                            <div class="panel-body box_conteudo">

                                <table class="table table-condensed">
                                    <tr class="fontsize">
                                        <th data-field="disciplina">DISCIPLINA</th>
                                        <th data-field="disciplina">H/A</th>
                                        <th data-field="disciplina">PROFESSOR</th>
                                        <th data-field="disciplina">TURMA</th>
                                        <th data-field="disciplina">QT. ALUNOS</th>
                                        <th data-field="disciplina">TURNO</th>
                                        <th data-field="disciplina">NÍVEL</th>
                                        <th data-field="disciplina">ETAPA</th>
                                        <th data-field="disciplina">VISUALIZAR</th>
                                    </tr>

                                    <tbody> 
                                        <?php
                                        foreach ($mostrar_disciplina as $linha_disciplina) {
                                            echo "<tr class='fontsize'>"
                                            . "<form action='' method='post'>" .
                                            "<td>" . $linha_disciplina->nome_disciplina . "</td>" .
                                            "<td>" . $linha_disciplina->cargaHoraria_disciplina . "</td>" .
                                            "<td>" . $linha_disciplina->nome_professor . "</td>" .
                                            "<td>" . $linha_disciplina->nome_turma . "</td>" .
                                            "<td>" . $linha_disciplina->capacidade_turma . "</td>" .
                                            "<td>" . $linha_disciplina->turno_turma . "</td>" .
                                            "<td>" . $linha_disciplina->nivel_turma . "</td>" .
                                            "<td>" . $linha_disciplina->etapa_turma . "</td>" .
                                            "<td> <input type='hidden' name='list_disciplina' value=" . $linha_disciplina->id_disciplina . ">"
                                            . "<input type='button' class='btn btn-success' value='Ver Registro'></td>" .
                                            "</form></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_aluno_turmas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE ALUNOS POR TURMA</div>
                            <div class="panel-body box_conteudo">

                                <select class="form-control" id="turma">
                                    <option value="">Selecione</option>
                                    <?php
                                    foreach ($mostrar_turma as $linha_turma) {
                                        echo "<option value=' $linha_turma->id_turma '>" . $linha_turma->nome_turma . " - Nível: " . $linha_turma->nivel_turma . " - Etapa: " . $linha_turma->etapa_turma . "</option>"
                                        ;
                                    }
                                    ?>
                                </select><br>

                                <button class="btn btn-primary btn-lg" id="buscar" type="button" onclick="listar_alunosTurmas(document.getElementById('turma').value)">Listar Alunos</button>

                                <hr>

                                <div id="dados"></div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="list_aluno_disciplinas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAGEM DE ALUNOS POR DISCIPLINA</div>
                            <div class="panel-body box_conteudo">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select class="form-control" id="turma_disciplina">
                                            <option value="">Selecione</option>
                                            <?php
                                            foreach ($mostrar_turma as $linha_turma) {
                                                echo "<option value=' $linha_turma->id_turma '>" . $linha_turma->nome_turma . " - Nível: " . $linha_turma->nivel_turma . " - Etapa: " . $linha_turma->etapa_turma . "</option>"
                                                ;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-control" id="disciplina">
                                            <option value="">Selecione</option>
                                            <?php
                                            foreach ($mostrar_disciplina as $linha_disciplina) {
                                                echo "<option value=' $linha_disciplina->id_disciplina '>" . $linha_disciplina->nome_disciplina . " - Educador(a): " . $linha_disciplina->nome_professor . " - Total Aluno: " . $linha_disciplina->capacidade_turma . "</option>"
                                                ;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div><br>
                                <button class="btn btn-primary btn-lg" id="buscar" type="button" onclick="listar_alunosDisciplina(document.getElementById('turma_disciplina').value, document.getElementById('disciplina').value)">Listar Alunos</button>

                                <hr>

                                <div id="dados_lista_aluno"></div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </body>
</html>
