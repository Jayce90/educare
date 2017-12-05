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
        <title>EDUCADOR(A)</title>
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
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_professor" data-toggle="pill"> Cadastrar</a></li>
                    <li><a class="glyphicon glyphicon-edit" href="#editar_professor" data-toggle="pill"> Editar</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#lista_professor" data-toggle="pill"> Listar</a></li>
                    <li><a class="glyphicon glyphicon-ban-circle" href="#desabilitar_professor" data-toggle="pill"> Desabilitar</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_professor">
                        <div class="panel panel-primary">
                            <div class="panel-heading" id="noprint">CADASTRO DO EDUCADOR (A)</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form id="cadastro_educador" name="cadastroEducador" action="../controle/cadastrando_educador.php" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNomeProfessor">1. Nome do Educador(a) *</label>
                                                <input type="text" name="cad_nome_professor" class="form-control" id="inputNomeProfessor" placeholder="digite nome do educador(a)">
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
                                                <label for="inputCpfProfessor">3. CPF *</label>
                                                <input type="text" name="cad_cpf_professor" class="form-control" id="inputCpfProfessor" placeholder="digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">
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
                                                <label for="inputTelefoneProfessor">5. Telefone *</label>
                                                <input type="text" name="cad_fone_professor" class="form-control" id="inputTelefoneProfessor" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
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

                                    <button type="submit" class="btn btn-primary btn-lg" onclick="return validar_cadastro_educador()" id="noprint">Enviar</button>

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir Página</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="editar_professor">
                        <div class="panel panel-primary">
                            <div class="panel-heading"id="noprint">EDITAR</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form id="cadastro_educador" name="editarEducador" action="" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNomeProfessor">1. Nome do Educador(a) *</label>
                                                <input type="text" name="cad_nome_professor" class="form-control" id="inputNomeProfessor" placeholder="digite nome do educador(a)">
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
                                                <label for="inputCpfProfessor">3. CPF *</label>
                                                <input type="text" name="cad_cpf_professor" class="form-control" id="inputCpfProfessor" placeholder="digite o CPF" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">
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
                                                <label for="inputTelefoneProfessor">5. Telefone *</label>
                                                <input type="text" name="cad_fone_professor" class="form-control" id="inputTelefoneProfessor" placeholder="91 000000000" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
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

                                    <button type="submit" class="btn btn-primary btn-lg" id="noprint">Editar</button>
                                  

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="lista_professor">
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

                    <div class="tab-pane" id="desabilitar_professor">
                        <div class="panel panel-primary">
                            <div class="panel-heading">DESABILITAR</div>
                            <div class="panel-body box_conteudo">

                                <label for="inputDesabilitarProfessor">Desabilitar Educador (a)</label>
                                <input type="text" class="form-control" id="inputDesabilitarProfessor" placeholder="digite o nome do educador (a)"><br>

                                <button type="submit" class="btn btn-danger btn-lg">Desabilitar</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
