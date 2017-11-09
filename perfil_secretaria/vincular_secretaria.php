<?php
session_start();
require '../controle/autenticacao.php';
include_once '../classes/Disciplinaealuno.php';
include_once '../classes/Aluno.php';
include_once '../classes/Educador.php';

Secretaria();

$id_escola = $_SESSION['id_escola'];

$alunos = new Aluno();
$mostrar_aluno = $alunos->ler_todos_alunos_escola();

$disciplinaealuno = new Disciplinaealuno();

if (isset($_POST['listar_turma_vincular'])) {

    $ano_vincular_aluno = isset($_POST['ano_vincular_aluno']) ? $_POST['ano_vincular_aluno'] : '';
    $nivel_vincular_aluno = isset($_POST['nivel_vincular_aluno']) ? $_POST['nivel_vincular_aluno'] : '';
    $etapa_vincular_aluno = isset($_POST['etapa_vincular_aluno']) ? $_POST['etapa_vincular_aluno'] : '';


    $mostrar_turma = $disciplinaealuno->ler_turmas_vincular($ano_vincular_aluno, $nivel_vincular_aluno, $etapa_vincular_aluno, $id_escola);
} elseif (!isset($_POST['listar_turma_vincular'])) {
    $_POST['etapa'] = "";
}

if (isset($_POST['listar_disciplina_vincular'])) {

    $id_turma_vincular_aluno = isset($_POST['id_turma_vincular']) ? $_POST['id_turma_vincular'] : '';
    
    $mostrar_disciplinas = $disciplinaealuno->ler_disciplinas_vincular($id_turma_vincular_aluno, $id_escola);
} elseif (!isset($_POST['listar_disciplina_vincular'])) {
    $_POST['etapa'] = "";
}




$listar_educador = new Educador();
$mostrar_educador = $listar_educador->ler_todos("professor");
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

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_secretaria.php"> Início</a></li>
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_secretaria.php"> Cadastrar</a></li>
                        <li class="active"><a class="glyphicon glyphicon-pushpin"> Vincular<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-list" href="lista_secretaria.php"> Listar</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pushpin" href="#vincular_aluno" data-toggle="pill"> Vincular Aluno(a)</a></li>
                    <li><a class="glyphicon glyphicon-pushpin" href="#vincular_educador" data-toggle="pill"> Lotar Educador(a)</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">


                    <div class="tab-pane active" id="vincular_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">VINCULAR ALUNO(A)</div>
                            <div class="panel-body box_conteudo">
                                <form action="vincular_secretaria.php" method="post">

                                    <div class="row">

                                        <div class="col-md-2">
                                            <label for="inputMaiseducacao">Ano (Atual)</label><br>

                                            <select class="form-control" name="ano_vincular_aluno">
                                                <option value="">Selecione</option>                                               
                                                <option value="2017" selected>2017</option>                                               
                                                <option value="2018">2018</option>                                        
                                                <option value="2019">2019</option>                                        
                                                <option value="2020">2020</option>                                        
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="inputNivel">Nivel de ensino</label><br>

                                            <select class="form-control" name="nivel_vincular_aluno">
                                                <option value="">Selecione</option>                                               
                                                <option value="Educação Infantil">Educação Infantil</option>                                               
                                                <option value="Ensino Fundamental">Ensino Fundamental</option>                                        
                                                <option value="EJA">EJA</option>                                        
                                            </select>
                                        </div>

                                        <div class="col-md-7">
                                            <label for="">Etapa </label><br>
                                            <select class="form-control" name="etapa_vincular_aluno">
                                                <option value="">Selecione</option>                                               
                                                <option value="Creche 2">Creche 2</option>                                               
                                                <option value="Creche 3">Creche 3</option>                                               
                                                <option value="Pré - Escola 1">Pré - Escola 1</option>                                        
                                                <option value="Pré - Escola 2">Pré - Escola 2</option>                                        
                                                <option value="1º ano">1º ano</option>                                        
                                                <option value="2º ano">2º ano</option>                                        
                                                <option value="3º ano">3º ano</option>                                        
                                                <option value="4º ano">4º ano</option>                                        
                                                <option value="5º ano">5º ano</option>                                        
                                                <option value="6º ano">6º ano</option>                                        
                                                <option value="7º ano">7º ano</option>                                        
                                                <option value="8º ano">8º ano</option>                                        
                                                <option value="9º ano">9º ano</option>                                        
                                                <option value="EJA - Ensino Fundamental anos iniciais">EJA - Ensino Fundamental anos iniciais</option>                                        
                                                <option value="EJA - Ensino Fundamental anos finais">EJA - Ensino Fundamental anos finais</option>                                        
                                                <option value="EJA - Ensino Fundamental anos iniciais e anos finais">EJA - Ensino Fundamental anos iniciais e anos finais</option>                                        
                                                <option value="EJA - EJA integrada à Educação Profissional de Nível Fundamental (FIC)">EJA - EJA integrada à Educação Profissional de Nível Fundamental (FIC)</option>                                        
                                            </select>  
                                        </div>
                                    </div>

                                    <br>
                                    <input type="hidden" name="listar_turma_vincular" value="true">
                                    <button type="submit" class="btn btn-primary btn-lg" >Pesquisar</button>
                                </form>

                                <hr>

                                <!--listas das turmas - vincular-->
                                <?php
                                if (isset($_POST['listar_turma_vincular'])) {
                                    echo " <table width = '100%'>
                                <tr>
                                <th data-field = 'turma'>TURMA</th>
                                <th data-field = 'turma'>CAPACIDADE</th>
                                <th data-field = 'turma'>TURNO</th>
                                <th data-field = 'turma'>HORÁRIO</th>
                                <th data-field = 'turma'>NÍVEL</th>
                                <th data-field = 'turma'>ETAPA</th>
                                <th data-field = 'turma'>DIAS</th>
                                <th data-field = 'turma'>VISUALIZAR</th>
                                </tr>
                                <tbody>";
                                    foreach ($mostrar_turma as $linha_turma) {
                                        echo "<tr>"
                                        . "<form action='vincular_secretaria.php' method='post'>" .
                                        "<td>" . $linha_turma->nome_turma . "</td>" .
                                        "<td>" . $linha_turma->capacidade_turma . "</td>" .
                                        "<td>" . $linha_turma->turno_turma . "</td>" .
                                        "<td>" . $linha_turma->horario_turma . "</td>" .
                                        "<td>" . $linha_turma->nivel_turma . "</td>" .
                                        "<td>" . $linha_turma->etapa_turma . "</td>" .
                                        "<td>" . $linha_turma->dias_turma . "</td>" .
                                        "<td  style='text-align:center;'> <input type='hidden' name='id_turma_vincular' value=" . $linha_turma->id_turma . ">" .
                                        "<input type='hidden' name='listar_disciplina_vincular' value='true'>" .
                                        "<input type='submit' class='btn btn-success' value='Selecionar'></td>" .
                                        "</form></tr>";
                                    }
                                }
                                ?>
                                </tbody>
                                </table>

                                <hr>
                                <!--listas das disciplinas por turma - vincular-->
                                <?php
                                if (isset($_POST['listar_disciplina_vincular'])) {
                                    echo "<table width = '100%'>
                                    <tr>
                                    <th data-field = 'disciplina'>DISCIPLINA</th>
                                    <th data-field = 'disciplina'>H/A</th>
                                    <th data-field = 'disciplina'>DESCRIÇÃO</th>
                                    <th data-field = 'disciplina'>PROFESSOR</th>
                                    <th data-field = 'disciplina'>SELECIONAR</th>
                                    </tr>
                                    <tbody>";
                                    foreach ($mostrar_disciplinas as $linha_disciplina) {

                                        echo "<tr>"
                                        . "<form action='../controle/vinculando_disciplina_aluno.php' method='post'>" .
                                        "<td>" . $linha_disciplina->nome_disciplina . "</td>" .
                                        "<td>" . $linha_disciplina->cargaHoraria_disciplina . "</td>" .
                                        "<td>" . $linha_disciplina->descricao_disciplina . "</td>" .
                                        "<td>" . $linha_disciplina->nome_professor . "</td>" .
                                        "<td style='text-align:center;'><input type='hidden' name='listar_disciplina_vincular' value='true'>" .
                                        "<input type='checkbox' name='id_disciplina_vincular[]' value=" . $linha_disciplina->id_disciplina . " style='width:20px;height:20px;'></td>" .
                                        "</tr>";
                                    }
                                }
                                ?>
                                </tbody>
                                </table><br>

                                <?php
                                if (isset($_POST['listar_disciplina_vincular'])) {

                                    echo "<label for='inputVincularTurmaAluno'>Aluno(a) :</label><br>";

                                    echo "<select class='form-control' name='vincular_id_aluno'>";

                                    foreach ($mostrar_aluno as $linha_aluno) {
                                        echo "<option value='" . $linha_aluno->id_aluno . "'>" . $linha_aluno->nome_aluno . " - Mãe: " . $linha_aluno->mae_aluno . " - Bairro: " . $linha_aluno->bairro_aluno . " - Portador de deficiência: " . $linha_aluno->deficiencia_aluno . " - Transporte Público: " . $linha_aluno->transporte_aluno . "</option>";
                                    }
                                }
                                ?>                                              
                                </select>

                                <?php
                                if (isset($_POST['listar_disciplina_vincular'])) {
                                    echo "<button type='submit' class='btn btn-primary btn-lg' >Vincular</button>"
                                    . "</form>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane" id="vincular_educador">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LOTAR EDUCADOR(A)</div>
                            <div class="panel-body box_conteudo">
                                <form action="../controle/lotando_educador.php" method="post">

                                    <label for="inputVincularTurmaEducador">Educador(a) :</label><br>

                                    <select class="form-control" name="vincular_id_educador">
                                        <?php
                                        foreach ($mostrar_educador as $linha_educador) {
                                            echo "<option value='" . $linha_educador->id_professor . "'>" . $linha_educador->nome_professor . "</option>";
                                        }
                                        ?>                                              
                                    </select><br>

                                    <div class="row">
                                        <div class="col-md-2">

                                            <label for="inputMaiseducacao">Ano (Atual)</label><br>

                                            <select class="form-control" name="ano_vincular_educador">
                                                <option value="">Selecione</option>                                               
                                                <option value="2017" selected>2017</option>                                               
                                                <option value="2018">2018</option>                                        
                                                <option value="2019">2019</option>                                        
                                                <option value="2020">2020</option>                                        
                                            </select>
                                        </div>

                                        <div class="col-md-2">

                                            <label for="inputCargaHorariaDisciplina">Carga Horária</label>
                                            <input type="text" name="vincular_cargaHoraria_educador" class="form-control" id="inputCargaHorariaDisciplina" placeholder="carga horária">                                            
                                        </div>
                                    </div><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Vincular</button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
