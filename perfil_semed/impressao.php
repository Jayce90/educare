<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <link type="text/css" href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="../layout/css/local.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <script src="../layout/js/mascara_local.js"></script>
        <script src="../layout/js/validacao_local.js"></script>
        <script language="javascript" type="text/javascript" src="../js_local/ajax_local.js"></script>
        <link rel="shortcut icon" href="../imagens/icone.png" type="image/x-icon">
        <title>IMPRESSÃO</title>
    </head>
    <body>
        <div class="cabecalho" id="noprint">
            <div class="banner">
                <img src="../imagens/logo.png">
            </div>
        </div>

        <nav class="navbar navbar-default"><!-- inicio menu -->
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_semed.php"> Início</a></li>
                        <li><a class="glyphicon glyphicon-plus" href="cadastro_semed.php"> Cadastrar</a></li>                        
                        <li><a class="glyphicon glyphicon-list" href="lista_semed.php"> Listar</a></li>
                        <li><a class="glyphicon glyphicon-pencil glyphicon" href="editar_semed.php"> Editar</a></li>
                        <li class="active"><a class="glyphicon glyphicon-list-alt"> Imprimir<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-remove" href="#"> Apagar</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- fim menu -->

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2" id="noprint">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-list-alt" href="#imprimir_boletim" data-toggle="pill"> Imprimir Boletim</a></li>
                    <li><a class="glyphicon glyphicon-list-alt" href="#imprimir_relatorio" data-toggle="pill"> Imprimir Relatório</a></li>
                    <li><a class="glyphicon glyphicon-list-alt" href="#imprimir_mapa" data-toggle="pill"> Imprimir Mapa</a></li>                    
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="imprimir_boletim">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">BOLETIM</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletimII">

                                    <table class="table table-bordered">

                                        <tr>
                                            <th>DISCIPLINA</th>
                                            <th>1ª AV.</th>                    
                                            <th>2ª AV.</th>
                                            <th>3ª AV.</th>
                                            <th>4ª AV.</th>
                                            <th>MÉDIA ANUAL</th>                
                                            <th>RESULTADO</th>                
                                        </tr>

                                        <tr>

                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>          

                                    </table>

                                    <div class="row">

                                        <div class="col-md-6">                
                                            FÓRMULA - PESO 6 - REGIME DE ANO <br><br>

                                            <fieldset class="formatar">
                                                <p>1. O aluno terá 4 Avaliações bimestrais;</p> 
                                                <p>2. A nota minima de aprovação é 6.0;</p> 
                                                <p>3. Exigência de 75% de frequência anual do aluno;</p> 
                                                <p>4. Serão oferecidas 2 recuperações semestrais; </p> 
                                                <p>a) 1º Semestre em todas as disciplinas onde o aluno não obtiver 18 pontos;</p> 
                                                <p>b) 2º Semestre somente em 4 discipinas onde o aluno não obtiver 60 pontos;</p>
                                                <P>FÓRMULA PARA CÁLCULO DA MÉDIA ANUAL</P>
                                                <P>MA=(1Av. x 1)+(2Av. x 2)+(3Av. x 3)+(4Av. x 4) = 60 / 10 = 6.0</P>

                                            </fieldset>

                                        </div>

                                        <div class="col-md-6">

                                            FÓRMULA - PESO 5 - REGIME DE SÉRIE <br><br>

                                            <fieldset class="formatar">
                                                <p>1. O aluno terá 4 Avaliações bimestrais;</p> 
                                                <p>2. A nota minima de aprovação é 5.0;</p> 
                                                <p>3. Exigência de 75% de frequência anual do aluno;</p> 
                                                <p>4. Serão oferecidas 2 recuperações semestrais; </p> 
                                                <p>a) 1º Semestre em todas as disciplinas onde o aluno não obtiver 15 pontos;</p> 
                                                <p>b) 2º Semestre somente em 4 discipinas onde o aluno não obtiver 50 pontos;</p>
                                                <P>FÓRMULA PARA CÁLCULO DA MÉDIA ANUAL</P>
                                                <P>MA=(1Av. x 2)+(2Av. x 3)+(3Av. x 2)+(4Av. x 3) = 50 / 10 = 5.0</P>

                                            </fieldset>

                                        </div>

                                    </div>

                                    <div class="row" id="fonte">

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            SECRETÁRIO(A)

                                        </div>

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            DIRETOR(A)

                                        </div>

                                    </div>

                                </div>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="imprimir_relatorio">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">RELATÓRIO</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <label>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</label><br>

                                    <label>ESCOLA MUNICIPAL DE ENSINO FUNDAMENTAL</label><br>   

                                    <div class="row">

                                        <div class="col-md-4">

                                            <label>NÍVEL DE ENSINO:</label>
                                        </div>

                                        <div class="col-md-4">

                                            <label>ENSINO FUNDAMENTAL – ANOS FINAIS:</label>

                                        </div>

                                        <div class="col-md-4">

                                            <label>MÉDIA DE APROVAÇÃO:</label>

                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">

                                            <label>ANO:</label>               

                                        </div>

                                        <div class="col-md-3">

                                            <label>TURMA:</label>

                                        </div>

                                        <div class="col-md-3">

                                            <label>TURNO:</label>

                                        </div>

                                        <div class="col-md-3">

                                            <label>ANO:</label>

                                        </div>

                                    </div>

                                    <div class="tituloboletim">

                                        <label>RELATÓRIO DE RESULTADO FINAL</label><br>

                                    </div>



                                    <table class="table table-bordered">

                                        <tr>
                                            <th>Nº</th>
                                            <th>Nome do Aluno(a)</th>                    
                                            <th>Língua Portuguesa</th>
                                            <th>História</th>
                                            <th>Geografia</th>
                                            <th>Ciências</th>
                                            <th>Matemática</th>
                                            <th>Ensino Religioso</th>
                                            <th>Artes</th>
                                            <th>Educação Física</th>
                                            <th>Inglês</th>
                                            <th>Estudos Amazônicos</th>
                                            <th>Observação</th>
                                        </tr>

                                        <tr>
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     
                                            <td></td>                                     

                                        </tr>

                                    </table>

                                    <div class="row" id="fonte">

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            SECRETÁRIO(A)

                                        </div>

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            DIRETOR(A)

                                        </div>

                                    </div><br>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="imprimir_mapa">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">MAPA</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidasmapao">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="text-center">  

                                                <img class="tomeacu" src="../imagens/tomeacu.png" alt="brasao">   

                                            </div>

                                        </div>


                                        <div class="col-md-4">

                                            <span class="prefeitura">PREFEITURA MUNICIPAL DE TOMÉ-AÇU</span><br>

                                            <span class="semed">SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</span><br>

                                            <span class="mapa">MAPA INFORMATIVO DE AVALIAÇÕES</span>

                                        </div>

                                        <div class="col-md-3">

                                            <label>Unidade Escolar:</label><br>           

                                            <label>Diretoria:</label><br>               

                                            <label>Professor(a):</label><br>              

                                            <label>Ano:</label><br>            

                                        </div>

                                        <div class="col-md-3">

                                            <label>Media Anual:</label><br>           

                                            <label>Localidade:</label><br>               

                                            <label>Etapa:</label><br>              

                                            <label>Polo:</label><br>

                                        </div>

                                    </div>

                                    <table class="table table-bordered">

                                        <tr>
                                            <th rowspan="2">Nº</th>
                                            <th rowspan="2">Nome do Aluno(a)</th>
                                            <th rowspan="2">Sexo</th>
                                            <th colspan="8">Artes</th>
                                            <th colspan="8">Ciências</th>
                                            <th colspan="8">Educação Física</th>
                                            <th colspan="8">Geografia</th>
                                            <th colspan="8">História</th>
                                            <th colspan="8">Inglês</th>
                                            <th colspan="8">Língua Portuguesa</th>
                                            <th colspan="8">Matemática</th>
                                            <th rowspan="2">Observação</th>
                                        </tr>

                                        <tr>
                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                            <td>1ª Av</td>
                                            <td>2ª Av</td>
                                            <td>R</td>
                                            <td>3ª Av</td>
                                            <td>4ª Av</td>
                                            <td>R</td>
                                            <td>T Pont.</td>
                                            <td>M Anual.</td>

                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                        </tr>

                                    </table>

                                    <div class="row" id="fonte">

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            SECRETÁRIO(A)

                                        </div>

                                        <div class="col-md-6">

                                            <p>_____________________________________</p>
                                            DIRETOR(A)

                                        </div>

                                    </div><br>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>

                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>

    </body>
</html>
