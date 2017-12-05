<?php
session_start();

require '../controle/autenticacao.php';
include_once '../classes/Usuario.php';
include_once '../classes/Disciplina.php';
include_once '../classes/Escola.php';

Semed();

$escola = new Escola();
$mostrar_escola = $escola->ler_todos_org();

$id_escola = $_SESSION['id_escola'];

$pendentes = new Usuario();
$mostrar_pendentes = $pendentes->usuarios_pendente_geral();

$dados_disciplina = new Disciplina();
$mostrar_dados_disciplina = $dados_disciplina->ler_professor_turma($_SESSION['id_escola']);
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
        <title>ESCOLA</title>
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
                        <li><a class="glyphicon glyphicon-home" href="index_semed.php"> Início<span class="sr-only">(current)</span></a></li>                        
                        <li><a class="glyphicon glyphicon-pencil" href="feed_semed.php"> Feed</a></li>
                        <li><a class="glyphicon glyphicon-comment" href="chat_semed.php"> Chat</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Navigation Buttons -->
            <div class="col-md-2" id="noprint">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_escola" data-toggle="pill"> Cadastrar</a></li>
                    <li><a class="glyphicon glyphicon-edit" href="#editar_escola" data-toggle="pill"> Editar</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#lista_escola" data-toggle="pill"> Listar</a></li>
                    <li><a class="glyphicon glyphicon-ban-circle" href="#desabilitar_escola" data-toggle="pill"> Desabilitar</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_escola">
                        <div class="panel panel-primary">
                            <div class="panel-heading"id="noprint">CADASTRO DA ESCOLA</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form action="../controle/cadastrando_escola.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputNomeGestorEscola">1. Nome do Gestor(a)</label>
                                                <input type="text" name="cad_nome_gestor_escola" class="form-control" id="inputNomeGestorEscola" placeholder="digite o nome" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputCpfGestorEscola">2. Número do CPF do Gestor(a)</label>
                                                <input type="text" name="cad_cpf_gestor_escola" class="form-control" id="inputCpfGestorEscola" placeholder="CPF gestor escolar" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputCargoGestorEscola">3. Cargo</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_cargo_gestor_escola" id="inputCargoGestorEscola" value="Diretor(a)" checked=""> Diretor(a)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_cargo_gestor_escola" id="inputCargoGestorEscola" value="Educador(a) Dirigente"> Educador(a) Dirigente
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-2">

                                            <label for="inputFoneGestorEscola">4. Telefone</label>
                                            <input type="text" name="cad_fone_gestor_escola" class="form-control" id="inputFoneGestorEscola" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()" required="">
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEmailGestorEscola">5. Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_gestor_escola" class="form-control" id="inputEmailGestorEscola" placeholder="digite o Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputNomeEscola">6. Nome da escola</label>
                                            <input type="text" name="cad_nome_escola" class="form-control" id="inputNomeEscola" placeholder="nome da escola" required="">

                                        </div>

                                    </div>

                                    <div class="row">                                        
                                        <div class="col-md-4">

                                            <label for="inputFuncionamentoEscola">7. Situação de funcionamento</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_funcionamento_escola" id="inputFuncionamentoEscola" value="Ativa" checked=""> Ativa
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_funcionamento_escola" id="inputFuncionamentoEscola" value="Inativa"> Inativa
                                            </label>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputCepEscola">8. CEP</label>
                                                <input type="text" name="cad_cep_escola" class="form-control" id="inputCepEscola" placeholder="digite o CEP" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="inputPoloEscola">9. Polo</label>

                                                <select class="form-control" name="cad_polo_escola">
                                                    <option value="">Selecione</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputDistritoEscola">10. Distrito</label>
                                                <input type="text" name="cad_distrito_escola" class="form-control" id="inputDistritoEscola" placeholder="digite o Distrito">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEnderecoEscola">11. Endereço</label>
                                                <input type="text" name="cad_endereco_escola" class="form-control" id="inputEnderecoEscola" placeholder="digite o endereço">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputNumeroEscola">12. Número</label>
                                                <input type="text" name="cad_numero_escola" class="form-control" id="inputNumeroEscola" placeholder="digite o numero" onkeypress="return SomenteNumero(event);">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoEscola">13. Complemento</label>
                                                <input type="text" name="cad_complemento_endereco_escola" class="form-control" id="inputComplementoEnderecoEscola" placeholder="digite o complemento">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputBairroEscola">14. Bairro</label>
                                                <input type="text" name="cad_bairro_escola" class="form-control" id="inputBairroEscola" placeholder="digite o bairro">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputFoneEscola">15. Telefone</label>
                                                <input type="text" name="cad_fone_escola" class="form-control" id="inputFoneEscola" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputEmailEscola">16. Email</label>
                                                <input type="text" name="cad_email_escola" class="form-control" id="inputEmailEscola" placeholder="digite o email">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputLocalizacaoescola">17. Localização/Espaço da escola</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_escola" id="inputLocalizacaoescola" value="Urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_escola" id="inputLocalizacaoescola" value="Rural"> Rural
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputRegulamentacaoEscola">18. Autorização no conselho ou órgão municipal de educação</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola[]" id="inputRegulamentacaoEscola" value="Sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola[]" id="inputRegulamentacaoEscola" value="Em tramitação"> Em tramitação
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola[]" id="inputRegulamentacaoEscola" value="Não"> Não
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <label for="inputPortariaEscola">18a. De acordo com a portaria:</label>
                                            <input type="text" name="cad_portaria_escola" class="form-control" id="inputPortariaEscola" placeholder="digite a portaria">
                                        </div>

                                        <div class="col-md-8">

                                            <div class="form-group">
                                                <label for="inputAutorizacaoEscola">19. Autorização para emitir/assinar documentos</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_autorizacao_escola" id="inputAutorizacaoEscola" value="Sim" checked=""> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_autorizacao_escola" id="inputAutorizacaoEscola" value="Não"> Não
                                                </label>

                                            </div>

                                        </div>

                                    </div><br>                                    

                                    <button type="submit" class="btn btn-primary btn-lg" id="noprint">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir Página</button>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="editar_escola">
                        <div class="panel panel-primary">
                            <div class="panel-heading"id="noprint">EDITAR</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form action="" method="post">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputNomeGestorEscola">1. Nome do Gestor(a)</label>
                                                <input type="text" name="cad_nome_gestor_escola" class="form-control" id="inputNomeGestorEscola" placeholder="digite o nome" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputCpfGestorEscola">2. Número do CPF do Gestor(a)</label>
                                                <input type="text" name="cad_cpf_gestor_escola" class="form-control" id="inputCpfGestorEscola" placeholder="CPF gestor escolar" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputCargoGestorEscola">3. Cargo</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_cargo_gestor_escola" id="inputCargoGestorEscola" value="Diretor(a)" checked=""> Diretor(a)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_cargo_gestor_escola" id="inputCargoGestorEscola" value="Educador(a) Dirigente"> Educador(a) Dirigente
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-2">

                                            <label for="inputFoneGestorEscola">4. Telefone</label>
                                            <input type="text" name="cad_fone_gestor_escola" class="form-control" id="inputFoneGestorEscola" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()" required="">
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEmailGestorEscola">5. Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_gestor_escola" class="form-control" id="inputEmailGestorEscola" placeholder="digite o Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputNomeEscola">6. Nome da escola</label>
                                            <input type="text" name="cad_nome_escola" class="form-control" id="inputNomeEscola" placeholder="nome da escola" required="">

                                        </div>

                                    </div>

                                    <div class="row">                                        
                                        <div class="col-md-4">

                                            <label for="inputFuncionamentoEscola">7. Situação de funcionamento</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_funcionamento_escola" id="inputFuncionamentoEscola" value="Ativa" checked=""> Ativa
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_funcionamento_escola" id="inputFuncionamentoEscola" value="Inativa"> Inativa
                                            </label>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputCepEscola">8. CEP</label>
                                                <input type="text" name="cad_cep_escola" class="form-control" id="inputCepEscola" placeholder="digite o CEP" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="inputPoloEscola">9. Polo</label>

                                                <select class="form-control" name="cad_polo_escola">
                                                    <option value="">Selecione</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputDistritoEscola">10. Distrito</label>
                                                <input type="text" name="cad_distrito_escola" class="form-control" id="inputDistritoEscola" placeholder="digite o Distrito">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputEnderecoEscola">11. Endereço</label>
                                                <input type="text" name="cad_endereco_escola" class="form-control" id="inputEnderecoEscola" placeholder="digite o endereço">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputNumeroEscola">12. Número</label>
                                                <input type="text" name="cad_numero_escola" class="form-control" id="inputNumeroEscola" placeholder="digite o numero" onkeypress="return SomenteNumero(event);">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoEscola">13. Complemento</label>
                                                <input type="text" name="cad_complemento_endereco_escola" class="form-control" id="inputComplementoEnderecoEscola" placeholder="digite o complemento">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputBairroEscola">14. Bairro</label>
                                                <input type="text" name="cad_bairro_escola" class="form-control" id="inputBairroEscola" placeholder="digite o bairro">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputFoneEscola">15. Telefone</label>
                                                <input type="text" name="cad_fone_escola" class="form-control" id="inputFoneEscola" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputEmailEscola">16. Email</label>
                                                <input type="text" name="cad_email_escola" class="form-control" id="inputEmailEscola" placeholder="digite o email">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputLocalizacaoescola">17. Localização/Espaço da escola</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_escola" id="inputLocalizacaoescola" value="Urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_escola" id="inputLocalizacaoescola" value="Rural"> Rural
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="inputRegulamentacaoEscola">18. Autorização no conselho ou órgão municipal de educação</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola[]" id="inputRegulamentacaoEscola" value="Sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola[]" id="inputRegulamentacaoEscola" value="Em tramitação"> Em tramitação
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_regulamentacao_escola[]" id="inputRegulamentacaoEscola" value="Não"> Não
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <label for="inputPortariaEscola">18a. De acordo com a portaria:</label>
                                            <input type="text" name="cad_portaria_escola" class="form-control" id="inputPortariaEscola" placeholder="digite a portaria">
                                        </div>

                                        <div class="col-md-8">

                                            <div class="form-group">
                                                <label for="inputAutorizacaoEscola">19. Autorização para emitir/assinar documentos</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_autorizacao_escola" id="inputAutorizacaoEscola" value="Sim" checked=""> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_autorizacao_escola" id="inputAutorizacaoEscola" value="Não"> Não
                                                </label>

                                            </div>

                                        </div>

                                    </div><br>                                    

                                    <button type="submit" class="btn btn-primary btn-lg" id="noprint">Editar</button>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="lista_escola">
                        <div class="panel panel-primary">
                            <div class="panel-heading">LISTAS</div>
                            <div class="panel-body box_conteudo">

                                <div class="row">
                                    <!-- Conteudo do Body -->
                                    <div class="col-md-1"></div>

                                    <div class="col-md-10" id="box_conteudo">
                                        <!-- Conteudo dentro do conteudo -->
                                        <div class="text-center">

                                            <div class="panel panel-default">                                                    
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-home cursor_alterado" id="listafonte"><h4> ESCOLA</h4></a>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-pencil cursor_alterado" id="listafonte"><h4> SECRETÁRIO(A)</h4></a>
                                                        </div>
                                                    </div>                                                    

                                                </div><br>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-folder-open cursor_alterado" id="listafonte"><h4> DISCIPLINAS</h4></a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div id="listafundo">
                                                            <a class="glyphicon glyphicon-briefcase cursor_alterado" id="listafonte"><h4> EDUCADOR(A)</h4></a>
                                                        </div>
                                                    </div>

                                                </div><br>                                                

                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="desabilitar_escola">
                        <div class="panel panel-primary">
                            <div class="panel-heading">DESABILITAR</div>
                            <div class="panel-body box_conteudo">

                                <label for="inputDesabilitarEscola">Desabilitar Escola</label>
                                <input type="text" class="form-control" id="inputDesabilitarEscola" placeholder="digite o nome da escola"><br>
                                
                                <button type="submit" class="btn btn-danger btn-lg">Desabilitar</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
