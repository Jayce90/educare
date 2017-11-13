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
$mostrar_pendentes = $pendentes->usuarios_pendente($id_escola);

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
        <title>SECRETARIA ESCOLAR</title>
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
                        <li><a class="glyphicon glyphicon-pencil glyphicon" href="editar_semed.php"> Editar</a></li>
                        <li><a class="glyphicon glyphicon-remove" href="#"> Apagar</a></li>
                        <li><a class="glyphicon glyphicon-alert" href="../controle/sair.php"> Sair</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="row">
            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_escola" data-toggle="pill"> Cadastro Escola</a></li>
                    <li><a class="glyphicon glyphicon-book" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#cad_disciplina" data-toggle="pill"> Cadastro Disciplina</a></li>
                    <li><a class="glyphicon glyphicon-briefcase" href="#cad_professor" data-toggle="pill"> Cadastro Educador(a)</a></li>
                    <li><a class="glyphicon glyphicon-user" href="#cad_aluno" data-toggle="pill"> Cadastro Aluno(a)</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#cad_inep" data-toggle="pill"> Cadastro INEP</a></li>
                    <li><a class="glyphicon glyphicon-ok" href="#aprovacao" data-toggle="pill"> Aprovar Usuário</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_escola">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DA ESCOLA</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/cadastrando_escola.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputNomeGestorEscola">1. Nome do Gestor(a) Escolar</label>
                                                <input type="text" name="cad_nome_gestor_escola" class="form-control" id="inputNomeGestorEscola" placeholder="digite o nome" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputCpfGestorEscola">2. Número do CPF do Gestor(a) Escolar</label>
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

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()">Imprimir Página</button>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DA TURMA</div>
                            <div class="panel-body box_conteudo">

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

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()">Imprimir Página</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_disciplina">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DE DISCIPLINA</div>
                            <div class="panel-body box_conteudo">
                                <form action="../controle/cadastrando_disciplina.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputNomeDisciplina">1. Nome da disciplina</label>
                                            <input type="text" name="cad_nome_disciplina" class="form-control" id="inputNomeDisciplina" placeholder="nome da disciplina" required="">
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputCargaHorariaDisciplina">2. Carga Horária</label>
                                            <input type="text" name="cad_carga_horaria_disciplina" class="form-control" id="inputCargaHorariaDisciplina" placeholder="carga horária">                                            
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputNivelDisciplina">3. Nivel da disciplina</label><br>

                                            <select class="form-control" name="cad_nivel_disciplina">
                                                <option value="">Selecione</option>                                               
                                                <option value="Educação Infantil">Educação Infantil</option>                                               
                                                <option value="Ensino Fundamental">Ensino Fundamental</option>                                        
                                                <option value="EJA">EJA</option>                                        
                                            </select>                                             
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputEtapaDisciplina">4. Etapa da disciplina</label><br>

                                            <select class="form-control" name="cad_etapa_disciplina">
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

                                        <div class="col-md-4">

                                            <label for="inputProfessorDisciplina">5. Professor da disciplina</label><br>

                                            <select class="form-control" name="cad_professor_disciplina">
                                                <?php
                                                foreach ($mostrar_dados_disciplina as $linha_disciplina) {
                                                    echo "<option value=' $linha_disciplina->id_professor '>" . $linha_disciplina->nome_professor . " - Email: " . $linha_disciplina->email_professor . "</option>"
                                                    ;
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputTurmaDisciplina">6. Turma da disciplina</label><br>

                                            <select class="form-control" name="cad_turma_disciplina">
                                                <?php
                                                foreach ($mostrar_dados_disciplina as $linha_disciplina) {
                                                    echo "<option value=' $linha_disciplina->id_turma '>ID: " . $linha_disciplina->id_turma . " NOME: " . $linha_disciplina->nome_turma . " - QTD: " . $linha_disciplina->capacidade_turma . "</option>"
                                                    ;
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div><br>

                                    <label for="inputDescricaoDisciplina">7. Descrição da disciplina</label><br>
                                    <textarea class="form-control" rows="6"></textarea><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()">Imprimir Página</button>

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_professor">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DO EDUCADOR(A)</div>
                            <div class="panel-body box_conteudo">

                                <form id="cadastro_educador" action="../controle/cadastrando_educador.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNomeProfessor">1. Nome do Educador(a)</label>
                                                <input type="text" name="cad_nome_professor" class="form-control" id="inputNomeProfessor" placeholder="digite nome do educador(a)" required="">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNascimentoProfessor">2. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_professor" class="form-control" id="inputNascimentoProfessor" placeholder="00/00/0000" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputCpfProfessor">3. CPF</label>
                                                <input type="text" name="cad_cpf_professor" class="form-control" id="inputCpfProfessor" placeholder="digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()" required="">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNisProfessor">4. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_professor" class="form-control" id="inputNisProfessor" placeholder="digite o NIS" maxlength="11" onkeypress="formatar('###########', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputTelefoneProfessor">5. Telefone</label>
                                                <input type="text" name="cad_fone_professor" class="form-control" id="inputTelefoneProfessor" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()" required="">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEmailProfessor">6.  Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_professor" class="form-control" id="inputEmailProfessor" placeholder="digite o Email">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputMaeProfessor">7. Nome da mãe</label>
                                                <input type="text" name="cad_mae_professor" class="form-control" id="inputMaeProfessor" placeholder="digite nome da mãe">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputPaiProfessor">8. Nome do pai</label>
                                                <input type="text" name="cad_pai_professor" class="form-control" id="inputPaiProfessor" placeholder="digite nome do pai">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexoProfessor">9. Sexo</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_professor" id="inputSexoProfessor" value="masculino" checked=""> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_professor" id="inputSexoProfessor" value="feminino"> Feminino
                                                </label>

                                            </div>

                                        </div>

                                        <div class="col-md-8">

                                            <label for="inputNacionalidadeProfessor">10. Nacionalidade</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="brasileira"checked=""> Brasileiro
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="Naturalizado"> Naturalizado
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="Estrangeiro"> Estrangeiro
                                            </label>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputPaisorigemProfessor">11. País de origem</label>
                                                <input type="text" name="cad_pais_nasc_professor" class="form-control" id="inputPaisorigemProfessor" placeholder="digite o país de origem">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputUfdenascimentoProfessor">12. UF de nascimento</label>
                                                <select class="form-control" name="cad_estado_nasc_professor">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option selected="" value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputMunidenascimentoProfessor">13. Município de nascimento</label>
                                                <input type="text" name="cad_municipio_nasc_professor" class="form-control" id="inputMunidenascimentoProfessor" placeholder="digite o município de nascimento">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">

                                            <div class="form-group">
                                                <label for="inputRacaProfessor">14. Cor/Raça</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="branca"> Branca
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="preta"> Preta
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="parda"> Parda
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="amarela"> Amarela
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="indigena"> Indígena
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="Não Declarada"> Não Declarada
                                                </label>
                                            </div>

                                        </div>
                                        <div class="col-md-5">

                                            <div class="form-group">
                                                <label for="inputNecessidadeEspecialProfessor">15. Profissional Escolar com deficiência</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="Sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="Não" checked=""> Não
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <label for="inputTipoDeficienciaProfessor">15a. Tipo de deficiência</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Deficiência Intelectual"> Deficiência Intelectual
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Baixa Visão"> Baixa Visão
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Surdez"> Surdez
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Deficiência Auditiva"> Deficiência Auditiva
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Surdocegueira"> Surdocegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Deficiência Física"> Deficiência Física
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Cegueira"> Cegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="Deficiência Múltipla"> Deficiência Múltipla
                                            </label>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputLocalizacaoProfessor">16. Local da Residência</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_professor" id="inputLocalizacaoProfessor" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_professor" id="inputLocalizacaoProfessor" value="rural"> Rural
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="inputCepProfessor">17. CEP</label>
                                                <input type="text" name="cad_cep_professor" class="form-control" id="inputCepProfessor" placeholder="digite o CEP" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEnderecoProfessor">18. Endereço</label>
                                                <input type="text" name="cad_endereco_professor" class="form-control" id="inputEnderecoProfessor" placeholder="digite o endereco">

                                            </div>
                                        </div>

                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroEnderecoProfessor">19. Número</label>
                                                <input type="text" name="cad_numero_professor" class="form-control" id="inputNumeroEnderecoProfessor" placeholder="número" onkeypress="return SomenteNumero(event);">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoProfessor">20. Complemento</label>
                                                <input type="text" name="cad_complemento_professor" class="form-control" id="inputComplementoEnderecoProfessor" placeholder="complemento">

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputBairroProfessor">21. Bairro</label>
                                                <input type="text" name="cad_bairro_professor" class="form-control" id="inputBairroProfessor" placeholder="bairro">

                                            </div>
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputMunicipioProfessor">22. Município</label>
                                            <input type="text" name="cad_municipio_professor" class="form-control" id="inputMunicipioProfessor" placeholder="município">

                                        </div>

                                    </div><br>                                

                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputEscolaridade">23. Escolaridade</label><br>

                                            <select class="form-control" name="cad_escolaridade_professor">
                                                <option value="">Selecione</option>                                               
                                                <option value="Fundamental incompleto">Fundamental incompleto</option>                                               
                                                <option value="Fundamental completo">Fundamental completo</option>                                        
                                                <option value="Ensino Médio – Normal/Magistério">Ensino Médio – Normal/Magistério</option>                                        
                                                <option value="Ensino Médio – Normal/Magistério Específico Indígena">Ensino Médio – Normal/Magistério Específico Indígena</option>                                        
                                                <option value="Ensino Médio">Ensino Médio</option>                                        
                                                <option value="Superior">Superior</option>                                        
                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputCursoProfessor">24. Curso</label>
                                            <input type="text" name="cad_curso_professor" class="form-control" id="inputCursoProfessor" placeholder="curso">
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputInstituicaoProfessor">25. Nome da instituição</label>
                                            <input type="text" name="cad_instituicao_professor" class="form-control" id="inputInstituicaoProfessor" placeholder="instituição">

                                        </div>

                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputEscolaridade">25a. Situação do curso superior</label><br>

                                            <select class="form-control" name="cad_situacao_curso_professor">
                                                <option value="">Selecione</option>                                               
                                                <option selected="" value="concluido">Concluído</option>                                               
                                                <option value="em andamento">Em andamento</option>                                       
                                            </select>

                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputPosProfessor">26. Pós-graduação</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Especialização"> Especialização
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Mestrado"> Mestrado
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Doutorado"> Doutorado
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_pos_graduacao_professor" id="inputPosProfessor" value="Nenhum"> Nenhum
                                            </label>

                                        </div>
                                    </div><br>

                                    <label for="inputOutrosCursosProfessor">27. Outros cursos específicos (formação continuada com no mínimo 80 horas)</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Creche (0 a 3 anos)"> Creche (0 a 3 anos)
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Pré-escola (4 e 5 anos)"> Pré-escola (4 e 5 anos)
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Anos iniciais do ensino fundamental"> Anos iniciais do ensino fundamental
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Anos finais do ensino fundamental"> Anos finais do ensino fundamental
                                            </label>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Ensino médio"> Ensino médio
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação de jovens e adultos"> Educação de jovens e adultos
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação especial"> Educação especial
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação indígena"> Educação indígena
                                            </label>                                            
                                        </div>

                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação do campo"> Educação do campo
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação ambiental"> Educação ambiental
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Educação em direitos humanos"> Educação em direitos humanos
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Gênero e diversidade sexual"> Gênero e diversidade sexual
                                            </label>
                                        </div>

                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Direitos de criança e adolescente"> Direitos de criança e adolescente
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Relações etnorraciais e história e cultura afro-brasileira e africana"> Relações etnorraciais e história e cultura afro-brasileira e africana
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Outros"> Outros
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="Nenhum"> Nenhum
                                            </label>
                                        </div>
                                    </div><br>

                                    <label for="inputFuncaoProfessor">28. Função que exerce</label><br>

                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Docente"> Docente
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Auxiliar/Assistente Educacional"> Auxiliar/Assistente Educacional
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Profissional/Monitor de Atividade"> Profissional/Monitor de Atividade
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Tradutor Intérprete de Libras"> Tradutor Intérprete de Libras
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="DocenteTitular – coordenador de tutoria (de módulo ou disciplina) – EAD"> DocenteTitular – coordenador de tutoria (de módulo ou disciplina) – EAD
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cad_funcao_professor[]" id="inputFuncaoProfessor" value="Docente tutor – Auxiliar (de módulo ou disciplina) – EAD"> Docente tutor – Auxiliar (de módulo ou disciplina) – EAD
                                    </label><br><br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputFuncaoProfessor">29. Vínculo</label>                                    

                                            <select class="form-control" name="cad_vinculo_professor">
                                                <option value="">Selecione</option>                                               
                                                <option value="Concursado/efetivo/estável">Concursado/efetivo/estável</option>                                               
                                                <option value="Contrato temporário">Contrato temporário</option>                                       
                                                <option value="Contrato terceirizado">Contrato terceirizado</option>                                       
                                                <option value="Contrato CLT">Contrato CLT</option>                                       
                                            </select>
                                        </div>                   
                                    </div><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()">Imprimir Página</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DO ALUNO(A)</div>
                            <div class="panel-body box_conteudo">

                                <form id="cadastro_aluno" action="../controle/cadastrando_aluno.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNomeAluno">1. Nome do aluno(a)</label>
                                                <input type="text" name="cad_nome_aluno" class="form-control" id="inputNomeAluno" placeholder="digite nome do aluno(a)" required="">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNascimentoAluno">2. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimentoAluno" placeholder="00/00/0000" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexoAluno">3. Sexo</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexoAluno" value="masculino" checked=""> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexoAluno" value="feminino"> Feminino
                                                </label>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="form-group">
                                                <label for="inputNisAluno">4. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_aluno" class="form-control" id="inputNisAluno" placeholder="digite o NIS" maxlength="11" onkeypress="formatar('###########', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                        <div class="col-xs-6 col-md-8">

                                            <div class="form-group">
                                                <label for="inputRacaAluno">5. Cor/Raça</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="branca"> Branca
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="preta"> Preta
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="parda"> Parda
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="amarela"> Amarela
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="indigena"> Indígena
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputRacaAluno" value="nao declarada"> Não Declarada
                                                </label>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputMaeAluno">6. Nome da mãe</label>
                                                <input type="text" name="cad_mae_aluno" class="form-control" id="inputMaeAluno" placeholder="digite nome da mãe" required="">
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputPaiAluno">7. Nome do pai</label>
                                                <input type="text" name="cad_pai_aluno" class="form-control" id="inputPaiAluno" placeholder="digite nome do pai">
                                            </div>                                      

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNacionalidadeAluno">8. Nacionalidade do aluno</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="brasileira" checked=""> Brasileiro
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="naturalizado"> Naturalizado
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="extrangeiro"> Extrangeiro
                                        </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputPaisOrigemAluno">9. País de origem</label>
                                                <input type="text" name="cad_pais_nasc_aluno" class="form-control" id="inputPaisOrigemAluno" placeholder="digite o país de origem">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputEstadoNascAluno">10. UF de nascimento</label>

                                                <select class="form-control" name="cad_estadonasc_aluno">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option selected="" value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputMunicipioNascAluno">11. Município de nascimento</label>
                                                <input type="text" name="cad_municipionasc_aluno" class="form-control" id="inputMunicipioNascAluno" placeholder="digite o município de nascimento">
                                            </div>

                                        </div>                                        

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputTelefoneAluno">12. Telefone</label>
                                                <input type="text" name="cad_telefone_aluno" class="form-control" id="inputTelefoneAluno" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="inputNecessidadeEspecialAluno">13. Aluno(a) com deficiência</label><br>

                                            <select class="form-control" name="cad_deficiencia_aluno" id="inputNecessidadeEspecialAluno">
                                                <option value="">Selecione</option>
                                                <option value="Sim">Sim</option>                                               
                                                <option selected="" value="Não">Não</option>
                                            </select>

                                        </div>

                                        <div class="col-md-3">

                                            <label for="inputTipoDeficienciaAluno">13a. Deficiência</label><br>

                                            <select class="form-control" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficienciaAluno">
                                                <option value="">Selecione</option>
                                                <option value="Cegueira">Cegueira</option>                                               
                                                <option value="Baixa Visao">Baixa Visão</option>
                                                <option value="Surdez">Surdez</option>
                                                <option value="Deficiência Auditiva">Deficiência Auditiva</option>
                                                <option value="Surdocegueira">Surdocegueira</option>
                                                <option value="Deficiência Física">Deficiência Física</option>
                                                <option value="Deficiência Intelectual">Deficiência Intelectual</option>
                                                <option value="Deficiência Múltipla">Deficiência Múltipla</option>
                                            </select>                                              

                                        </div>

                                        <div class="col-md-3">

                                            <label for="inputTranstornoGloAluno">13b. Transtorno global</label><br>

                                            <select class="form-control" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornoGloAluno">
                                                <option value="">Selecione</option>
                                                <option value="Autismo Infantil">Autismo Infantil</option>                                               
                                                <option value="Síndrome de Asperger">Síndrome de Asperger</option>
                                                <option value="Síndrome de Rett">Síndrome de Rett</option>
                                                <option value="Transtorno desintegrativo da infância">Transtorno desintegrativo da infância</option>                                                
                                            </select>

                                        </div>

                                        <div class="col-md-3">

                                            <label for="inputSuperdotacaoAluno">13c. Altas Habilidades</label><br>

                                            <select class="form-control" name="cad_tipo_deficiencia_aluno[]" id="inputSuperdotacaoAluno">
                                                <option value="">Selecione</option>
                                                <option value="Altas Habilidades/Superdotação">Altas Habilidades/Superdotação</option>                                              
                                            </select>

                                        </div>
                                    </div><br>                                   

                                    <div class="row">
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputIdentidadeAluno">14. Identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputIdentidadeAluno" placeholder="digite o número da identidade" maxlength="20" onkeypress="formatar('####################', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>
                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputOrgaoIdentidadeAluno">14a. Orgão Emissor</label>
                                                <input type="text" name="cad_orgao_identidade_aluno" class="form-control" id="inputOrgaoIdentidadeAluno" placeholder="digite o orgão emissor">

                                            </div>
                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputEstadoIdentidadeAluno">14b. UF da identidade</label>

                                                <select class="form-control" name="cad_estado_identidade_aluno">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option selected="" value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputDataIdentidadeAluno">14c. Data da expedição</label>
                                                <input type="text" name="cad_data_identidade_aluno" class="form-control" id="inputDataIdentidadeAluno" placeholder="00/00/0000" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>

                                    </div><br>


                                    <div class="row">
                                        <div class="col-md-2">

                                            <label for="inputCertidaoCivilAluno">15. Certidão Civil</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="">Selecione</option>
                                                <option value="Modelo Novo">Modelo Novo</option>                                               
                                                <option value="Modelo Antigo">Modelo Antigo</option>
                                            </select> 

                                        </div>

                                        <div class="col-md-2">

                                            <label for="inputTipoCertidaoAluno">15a. Tipo</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="">Selecione</option>
                                                <option value="Certidão de nascimento">Certidão de nascimento</option>                                               
                                                <option value="Certidão de casamento">Certidão de casamento</option>
                                            </select>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputTermoCertidaoAluno">15b. Termo</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputTermoCertidaoAluno" placeholder="termo" maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>

                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputFolhaCertidaoAluno">15c. Folha</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputFolhaCertidaoAluno" placeholder="folha" maxlength="4" onkeypress="formatar('####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputLivroCertidaoAluno">15d. Livro</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputLivroCertidaoAluno" placeholder="livro" maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>

                                    </div><br>                          


                                    <div class="row">
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputDataCertidaoAluno">15e. Data de Emissão</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputDataCertidaoAluno" placeholder="00/00/0000" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputEstadoCartorioAluno">15f. UF do cartório</label>

                                                <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option selected="" value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputMunicipioCartorioAluno">15g. Município do cartório</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputMunicipioCartorioAluno" placeholder="município do cartório">

                                            </div>
                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputNomeCartorioAluno">15h. Nome do cartório</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNomeCartorioAluno" placeholder="digite o nome do cartório">

                                            </div>
                                        </div>

                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNumeroMatriculaAluno">15i. Registro civil - Certidão Nova</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNumeroMatriculaAluno" placeholder="número da matricula" maxlength="40" onkeypress="formatar('###### ## ## #### # ##### ### ####### ##', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputCpfAluno">16. Número do CPF</label>
                                            <input type="text" name="cad_cpf_aluno" class="form-control" id="inputCpfAluno" placeholder="digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">

                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputPassaporteAluno">17. Documento extrangeiro/Passaporte</label>
                                            <input type="text" name="cad_passaporte_aluno" class="form-control" id="inputPassaporteAluno" placeholder="digite o passaporte" maxlength="8" onkeypress="formatar('########', this)" onblur="showhide()">

                                        </div>
                                    </div><br>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputJustificativaAluno">Justificativa da falta de informação de documento do aluno :</label><br>

                                            <select class="form-control" name="cad_justificativa_aluno">
                                                <option value="">Selecione</option>
                                                <option value="Aluno não possui documento">Aluno não possui documento</option>                                               
                                                <option value="Escola não possui informação de documento do aluno">Escola não possui informação de documento do aluno</option>
                                            </select>

                                        </div>

                                        <div class="col-md-3">

                                            <label for="inputDocumentacaoPedenteAluno">Documentação Pedente :</label><br>

                                            <select class="form-control" name="cad_documentacao_pedente_aluno">
                                                <option value="">Selecione</option>
                                                <option value="Sim">Sim</option>                                               
                                                <option value="Não">Não</option>
                                            </select>

                                        </div>

                                    </div><br>                                    

                                    <div class="row">
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputLocalizacaoAluno">18. Local da Residência</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacaoAluno" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacaoAluno" value="rural"> Rural
                                                </label>

                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputCepAluno">19. CEP</label>
                                                <input type="text" name="cad_cep_aluno" class="form-control" id="inputCepAluno" placeholder="digite o CEP" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEnderecoAluno">20. Endereço</label>
                                                <input type="text" name="cad_endereco_aluno" class="form-control" id="inputEnderecoAluno" placeholder="digite o endereco">

                                            </div>
                                        </div>

                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroEnderecoAluno">21. Número</label>
                                                <input type="text" name="cad_numero_aluno" class="form-control" id="inputNumeroEnderecoAluno" placeholder="número" onkeypress="return SomenteNumero(event);">

                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoAluno">22. Complemento</label>
                                                <input type="text" name="cad_complemento_aluno" class="form-control" id="inputComplementoEnderecoAluno" placeholder="complemento">

                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputBairroAluno">23. Bairro</label>
                                                <input type="text" name="cad_bairro_aluno" class="form-control" id="inputBairroAluno" placeholder="bairro">

                                            </div>

                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputEstadoEnderecoAluno">24. UF</label>
                                                <select class="form-control" name="cad_estado_aluno">
                                                    <option value="">Selecione</option>
                                                    <option value="AC">AC</option>
                                                    <option value="AL">AL</option>
                                                    <option value="AM">AM</option>
                                                    <option value="AP">AP</option>
                                                    <option value="BA">BA</option>
                                                    <option value="CE">CE</option>
                                                    <option value="DF">DF</option>
                                                    <option value="ES">ES</option>
                                                    <option value="GO">GO</option>
                                                    <option value="MA">MA</option>
                                                    <option value="MG">MG</option>
                                                    <option value="MS">MS</option>
                                                    <option value="MT">MT</option>
                                                    <option selected="" value="PA">PA</option>
                                                    <option value="PB">PB</option>
                                                    <option value="PE">PE</option>
                                                    <option value="PI">PI</option>
                                                    <option value="PR">PR</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="RN">RN</option>
                                                    <option value="RS">RS</option>
                                                    <option value="RO">RO</option>
                                                    <option value="RR">RR</option>
                                                    <option value="SC">SC</option>
                                                    <option value="SE">SE</option>
                                                    <option value="SP">SP</option>
                                                    <option value="TO">TO</option>
                                                </select> 

                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputMunicipioAluno">25. Município</label>
                                                <input type="text" name="cad_municipio_aluno" class="form-control" id="inputMunicipioAluno" placeholder="município">

                                            </div>
                                        </div>
                                    </div>


                                    <label for="inputEscolarizacaoEspacoAluno">26. Rececebe escolarização em outro espaço :</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspacoAluno" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspacoAluno" value="nao" checked=""> Não
                                    </label><br>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputTransporteEscolarAluno">27. Transporte escolar público :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteEscolarAluno" value="utiliza"> Utiliza
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteEscolarAluno" value="não utiliza" checked=""> Não Utiliza
                                            </label>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputPoderPublicoAluno">27a. Poder público responsável pelo transporte :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderPublicoAluno" value="municipal" checked=""> Municipal
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderPublicoAluno" value="estadual"> Estadual
                                            </label>

                                        </div>
                                    </div><br>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputTipoveiculoAluno">27b. Rodoviário :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Van/Kombi">Van/Kombi</option>                                               
                                                <option value="Micro - Ônibus">Micro - Ônibus</option>                                       
                                                <option value="Ônibus">Ônibus</option>                                       
                                                <option value="Bicicleta">Bicicleta</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputTipoveiculoAluno">27c. Aquaviário/Embarcação :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Barco">Barco</option>                                               
                                                <option value="Lancha">Lancha</option>                                                                             
                                            </select>
                                        </div>
                                    </div><br>

                                    <input type="submit" class="btn btn-primary btn-lg" value="Enviar">

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()">Imprimir Página</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_inep">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO INEP</div>
                            <div class="panel-body box_conteudo">

                                <form action="" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputInepAluno">1. INEP do Aluno(a)</label>
                                            <input type="text" name="cad_inep_aluno" class="form-control" id="inputInepAluno" placeholder="inep do aluno(a)" maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputInepProfessor">2. INEP do Educador(a)</label>
                                            <input type="text" name="cad_inep_professor" class="form-control" id="inputInepProfessor" placeholder="inep do educador(a)"maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputInepEscola">3. INEP da Escola</label>
                                            <input type="text" name="cad_inep_escola" class="form-control" id="inputInepEscola" placeholder="inep da escola"maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                        </div>

                                    </div><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>                                  

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
                                                    echo "<option value='" . $linha_pendente->id_usuario . "'>" . $linha_pendente->id_usuario . " Nome: " . $linha_pendente->nome_usuario . " - Fone: " . $linha_pendente->fone_usuario . " - Perfil: " . $linha_pendente->perfil_usuario . "</option>";
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
