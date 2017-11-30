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
        <title>CADASTRO</title>
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
                        <li class="active"><a class="glyphicon glyphicon-plus"> Cadastrar<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-list" href="lista_semed.php"> Listar</a></li>
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
            <div class="col-md-2" id="noprint">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_escola" data-toggle="pill"> Cadastro Escola</a></li>
                    <li><a class="glyphicon glyphicon-book" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#cad_inep" data-toggle="pill"> Cadastro INEP</a></li>
                    <li><a class="glyphicon glyphicon-ok" href="#aprovacao" data-toggle="pill"> Aprovar Usuário</a></li>
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

                    <div class="tab-pane" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading" id="noprint">CADASTRO DA TURMA</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form action="../controle/cadastrando_turma.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputTurma">1. Nome da Turma</label>
                                                <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma" required="">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputCapacidadeTurma">2. Número de alunos</label>
                                                <input type="text" name="cad_capacidade_turma" class="form-control" id="inputCapacidadeTurma" placeholder="digite capacidade da turma">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputMaiseducacao">3. Ano da turma</label><br>

                                            <select class="form-control" name="cad_ano_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="2017">2017</option>                                               
                                                <option selected="" value="2018">2018</option>                                        
                                                <option value="2019">2019</option>                                        
                                                <option value="2020">2020</option>                                        
                                            </select>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputiniciofuncionamento">4. Horário de funcionamento Inicio</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputiniciofuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputfinalfuncionamento">4. Horário de funcionamento Fim</label>
                                                <input type="text" name="cad_horario_turma[]" class="form-control" id="inputfinalfuncionamento" placeholder="00:00" required="" maxlength="5" onkeypress="formatar('##:##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="inputTurno">4a. Turno</label><br>

                                            <select class="form-control" name="cad_turno_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Manhã">Manhã</option>                                               
                                                <option value="Tarde">Tarde</option>                                        
                                                <option value="Noite">Noite</option>                                        
                                                <option value="Intermediário">Intermediário</option>                                        
                                                <option value="Integral">Integral</option>                                        
                                            </select>
                                        </div>
                                    </div>


                                    <label for="inputDiassemana">5. Dias da semana da turma</label><br>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="segunda, terça, quarta, quinta e sexta" checked=""> Segunda a Sexta
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="segunda"> Segunda
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="terca"> Terça
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="quarta"> Quarta
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="quinta"> Quinta
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="sexta"> Sexta
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_diassemana_turma[]" id="inputDiassemana" value="sabado"> Sábado
                                    </label><br><br>


                                    <label for="inputAtendimento">6. Tipo de atendimento</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Classe Hospitalar"> Classe Hospitalar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Unidade de Internação Socioeducativa"> Unidade de Internação Socioeducativa
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Unidade Prisional"> Unidade Prisional
                                    </label>                                      
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Atividade Complementar"> Atividade Complementar
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Atendimento Educacional Especializado (AEE)"> Atendimento Educacional Especializado (AEE)
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_tipo_turma" id="inputAtendimento" value="Não se Aplica"> Não se Aplica
                                    </label><br>

                                    <label for="inputMaiseducacao">7. Turma participante do programa mais educação/Ensino médio inovador</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="Sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_programa_turma" id="inputMaiseducacao" value="Não" checked=""> Não
                                    </label><br><br>


                                    <div class="form-group">
                                        <label for="inputAeeatividades">8. Atividades do atendimento educacional especializado (AEE)</label><br>


                                        <div class="row">
                                            <div class="col-md-6">

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do sistema braile"> Ensino do sistema braile
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da língua brasileira de sinais (libras)"> Ensino da língua brasileira de sinais (libras)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da usabilidade e das funcionalidades"> Ensino da usabilidade e das funcionalidades de informática acessível
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso de recursos ópticos e não ópticos"> Ensino do uso de recursos ópticos e não ópticos
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso da comunicação alternativa e aumentativa (CAA)"> Ensino do uso da comunicação alternativa e aumentativa (CAA)
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino da língua portuguesa na modalidade escrita"> Ensino da língua portuguesa na modalidade escrita
                                                </label>

                                            </div>
                                            <div class="col-md-6">
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para o desenvolvimento de processos mentais"> Estratégias para o desenvolvimento de processos mentais
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para o enriquecimento curricular"> Estratégias para o enriquecimento curricular
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Estratégias para autonomia no ambiente escolar"> Estratégias para autonomia no ambiente escolar
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Técnicas de orientação e mobilidade"> Técnicas de orientação e mobilidade
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_aeeatividades_turma" id="inputAeeatividades" value="Ensino do uso do Soroban"> Ensino do uso do Soroban
                                                </label>

                                            </div>
                                        </div>
                                    </div><br>


                                    <label for="inputModalidade">9. Modalidade</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Ensino Regular"> Ensino Regular
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Educação Especial - Modalidade Substitutiva"> Educação Especial - Modalidade Substitutiva
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_modalidade_turma" id="inputModalidade" value="Educação de Jovens e Adultos (EJA)"> Educação de Jovens e Adultos (EJA)
                                    </label><br><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputNivel">10. Nivel de ensino</label><br>

                                            <select class="form-control" name="cad_nivel_turma">
                                                <option value="">Selecione</option>                                               
                                                <option value="Educação Infantil">Educação Infantil</option>                                               
                                                <option value="Ensino Fundamental">Ensino Fundamental</option>                                        
                                                <option value="EJA">EJA</option>                                         
                                            </select>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputEtapa">10a. Etapa</label><br>

                                            <select class="form-control" name="cad_etapa_turma">
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
                                    </div><br>

                                    <div class="form-group">
                                        <label for="inputVincularTurmaEducador">11. Escola:</label><br>

                                        <select class="form-control" name="cad_id_escola_turma">
                                            <?php
                                            foreach ($mostrar_escola as $linha_escola) {
                                                echo "<option value='" . $linha_escola->id_escola . "'>" . $linha_escola->nome_escola . "</option>";
                                            }
                                            ?>                                              
                                        </select>
                                    </div>

                                    <label for="inputDescricaodaturma">12. Descrição da turma</label><br>
                                    <textarea class="form-control" name="cad_descricao_turma" rows="6"></textarea><br>

                                    <button type="submit" class="btn btn-primary btn-lg" id="noprint">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir Página</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_inep">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO INEP</div>
                            <div class="panel-body box_conteudo">

                                <form name="inepAluno" action="../controle/inserindo_inep_aluno.php" method="post">
                                    <div class="row">

                                        <div class="col-md-8">
                                            <label for='inputInserirInepAluno'>Aluno(a):</label><br>
                                            <select class='form-control' name='numero_inep'>
                                                <option value="">Selecione</option>                                               
                                                <?php
                                                foreach ($mostrar_aluno_sem_inep as $linha_aluno_sem_inep) {
                                                    echo "<option value='" . $linha_aluno_sem_inep->id_aluno . "'>" . $linha_aluno_sem_inep->nome_aluno . "</option>";
                                                }
                                                ?>                                              
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputInepProfessor">INEP do Aluno(a):</label>
                                            <input type="text" name="id_aluno" class="form-control" id="inputInepProfessor" placeholder="insira o numero do inep do Aluno(a)"maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">
                                        </div>
                                    </div><br>

                                    <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                                </form>

                                <hr>

                                <form name="inepEducador" action="" method="post">
                                    <div class="row">

                                        <div class="col-md-8">
                                            <label for="inputInserirInepEducador">Educador(a):</label><br>
                                            <select class="form-control" name="vincular_id_educador">
                                                <option value="">Selecione</option>
                                                <?php
                                                foreach ($mostrar_educador_sem_inep as $linha_educador_sem_inep) {
                                                    echo "<option value='" . $linha_educador_sem_inep->id_professor . "'>" . $linha_educador_sem_inep->nome_professor . "</option>";
                                                }
                                                ?>                                              
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputInepProfessor">INEP do Educador(a):</label>
                                            <input type="text" name="cad_inep_professor" class="form-control" id="inputInepProfessor" placeholder="insira o numero do inep do Educador(a)"maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">
                                        </div>
                                    </div><br>

                                    <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                                </form>

                                <hr>

                                <form name="inepEscola" action="" method="post">
                                    <div class="row">

                                        <div class="col-md-8">
                                            <label for="inputInserirInepEscola">Escola:</label><br>
                                            <select class="form-control" name="vincular_id_educador">
                                                <option value="">Selecione</option>
                                                <?php
                                                foreach ($mostrar_educador_sem_inep as $linha_educador_sem_inep) {
                                                    echo "<option value='" . $linha_educador_sem_inep->id_professor . "'>" . $linha_educador_sem_inep->nome_professor . "</option>";
                                                }
                                                ?>                                              
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputInepEscola">INEP da Escola:</label>
                                            <input type="text" name="cad_inep_escola" class="form-control" id="inputInepEscola" placeholder="insira o numero do inep da escola"maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">
                                        </div>
                                    </div><br>

                                    <button type="button" class="btn btn-primary btn-lg">Enviar</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="aprovacao">
                        <div class="panel panel-primary">
                            <div class="panel-heading">APROVAÇÃO DE USUÁRIOS PENDENTES</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/aprovando_usuario.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="inputNivelDisciplina">Usuários</label><br>
                                            <select class="form-control" name="id_aprovado">
                                                <?php
                                                foreach ($mostrar_pendentes as $linha_pendente) {
                                                    echo "<option value='" . $linha_pendente->id_usuario . "'> Nome: " . $linha_pendente->nome_usuario . " - Fone: " . $linha_pendente->fone_usuario . " - Perfil: " . $linha_pendente->perfil_usuario . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <br><button type="submit" class="btn btn-primary btn-lg">Aprovar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
