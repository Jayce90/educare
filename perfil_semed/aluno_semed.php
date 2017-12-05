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
        <title>ALUNO(A)</title>
    </head>

    <body id="impressao">
        <div class="cabecalho" id="noprint">
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
                <ul class="nav nav-pills nav-stacked menu" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_aluno" data-toggle="pill"> Cadastrar</a></li>
                    <li><a class="glyphicon glyphicon-edit" href="#editar_aluno" data-toggle="pill"> Editar</a></li>
                    <li><a class="glyphicon glyphicon-list" href="#lista_aluno" data-toggle="pill"> Listar</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#" data-toggle="pill"> Documentos</a>
                        <ul>
                            <li><a class="glyphicon glyphicon-file" href="#declaracao_aluno" data-toggle="pill"> Declaração</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#ressalva_aluno" data-toggle="pill"> Ressalva</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#boletim_aluno" data-toggle="pill"> Boletim</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#ficha_individual1_aluno" data-toggle="pill"> Ficha Individual 1</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#ficha_individual2_aluno" data-toggle="pill"> Ficha Individual 2</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#ficha_individual3_aluno" data-toggle="pill"> Ficha Individual 3</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#historico1_aluno" data-toggle="pill"> Histórico 1</a></li>
                            <li><a class="glyphicon glyphicon-file" href="#historico2_aluno" data-toggle="pill"> Histórico 2</a></li>
                        </ul>
                    </li>
                    <li><a class="glyphicon glyphicon-ban-circle" href="#desabilitar_aluno" data-toggle="pill"> Desabilitar</a></li>
                </ul>
            </div>



            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading" id="noprint">CADASTRO DO ALUNO (A)</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form id="cadastro_aluno" name="cadastroAluno" action="../controle/cadastrando_aluno.php" method="post" class="impressao">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNomeAluno">1. Nome do aluno(a) *</label>
                                                <input type="text" name="cad_nome_aluno" class="form-control" id="inputNomeAluno" placeholder="digite nome do aluno(a)">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNascimentoAluno">2. Data de Nascimento *</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimentoAluno" placeholder="00/00/0000" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexoAluno">3. Sexo *</label><br>

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
                                                <label for="inputMaeAluno">6. Nome da mãe *</label>
                                                <input type="text" name="cad_mae_aluno" class="form-control" id="inputMaeAluno" placeholder="digite nome da mãe">
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

                                    <input type="submit" class="btn btn-primary btn-lg" value="Enviar" onclick="return validar_cadastro_aluno()" id="noprint">

                                    <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir Página</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="editar_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading"id="noprint">EDITAR</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <form id="cadastro_aluno" name="editarAluno" action="" method="post">

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNomeAluno">1. Nome do aluno(a) *</label>
                                                <input type="text" name="cad_nome_aluno" class="form-control" id="inputNomeAluno" placeholder="digite nome do aluno(a)">
                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputNascimentoAluno">2. Data de Nascimento *</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimentoAluno" placeholder="00/00/0000" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexoAluno">3. Sexo *</label><br>

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
                                                <label for="inputMaeAluno">6. Nome da mãe *</label>
                                                <input type="text" name="cad_mae_aluno" class="form-control" id="inputMaeAluno" placeholder="digite nome da mãe">
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

                                    <input type="submit" class="btn btn-primary btn-lg" value="Editar" id="noprint">

                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="lista_aluno">
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

                    <div class="tab-pane active" id="declaracao_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">DECLARAÇÃO</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletimII">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">
                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <span><h5><b>Escola Municipal de Ensino Infantil e Fundamental_____________</b></h5></span><br>

                                        <h3><b>DECLARAÇÃO</b></h3>

                                    </div>

                                    <div class="text-left">
                                        <p><b>Declaro para os devidos fins de direito que o aluno (a)___________________________, filho (a) do Sr. ___________________________ e da Sra.___________________________, está devidamente matriculado (a) neste Estabelecimento de Ensino cursando o Pré Escolar ____ ou o ____ Ano do Ensino Fundamental. Com Freqüência de _____%.<br>
                                                Secretaria da Escola Municipal de Ensino Infantil e Fundamental “BOM JESUS”.
                                            </b></p><br>
                                    </div>

                                    <div class="text-right">
                                        <p><b>Tomé-Açu (PA), _____ de _____________ de 201__.</b></p><br>
                                    </div>

                                    <div class="text-center" id="fonte">                


                                        <p>_____________________________________</p>
                                        <b>EDUCADOR(A) DIRIGENTE</b>                

                                    </div>

                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="ressalva_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">RESSALVA</div>
                            <div class="panel-body box_conteudo" id="yesprint">
                                <div class="medidaboletimII">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>


                                        <h3><b>RESSALVA</b></h3>

                                    </div>
                                    <p><b>Certifico que deu entrada na Secretaria deste Estabelecimento de Ensino o pedido de transferência do (a) aluno (a) ______________________________________
                                            que terá direito a uma vaga no ___ Ano ou Pré Escolar ___ da Educação Infantil.
                                            Seus documentos serão entregues no prazo de 30 (trinta) dias, a contar da presente data, servindo esta Ressalva como documento condicional à matrícula.<br> 

                                            Secretaria da Escola Municipal de Ensino Infantil e Fundamental 
                                            “BOM JESUS”
                                        </b></p><br>

                                    <div class="text-right">
                                        <p><b>Tomé-Açu (PA), _____ de _____________ de 201__.</b></p><br>
                                    </div>

                                    <div class="text-center" id="fonte">                


                                        <p>_____________________________________</p>
                                        <b>EDUCADOR(A) DIRIGENTE</b>                

                                    </div>

                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="boletim_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">BOLETIM</div>
                            <div class="panel-body box_conteudo" id="yesprint">
                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <span><h6><b>Resolução nº. 469/2009 CEE – Regimento Unificado</b></h6></span><br>


                                        <h3><b>BOLETIM ESCOLAR - ANO LETIVO "****"</b></h3><br>

                                    </div>

                                    <p class="text-justify"><h5><b>Escola Municipal de Ensino Infantil e Fundamental “________________”  INEP:_______ <br><br> 
                                            Aluno (a): __________________  Nascimento: ___/___/______ <br><br>
                                            Curso:___________ Regime: Ano _________<br><br>
                                            Turma: ________  Ano/Série/Etapa: ___________ Sexo: ____ Turno: _______<br><br>
                                        </b></h5></p>


                                    <table class="table table-bordered">

                                        <tr>
                                            <th>DISCIPLINAS</th>
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

                                    <table class="table table-bordered">

                                        <tr>
                                            <th>FREQUÊNCIA ANUAL :</th>
                                            <th>RESULTADO FINAL :</th>                    
                                        </tr>

                                        <tr>

                                            <td>FÓRMULA - PESO 6 - REGIME DE ANO<br>
                                                1. O aluno terá 4 Avaliações bimestrais;<br>
                                                2. A nota minima de aprovação é 6.0;<br>
                                                3. Exigência de 75% de frequência anual do aluno;<br>
                                                4. Serão oferecidas 2 recuperações semestrais;<br>
                                                a) 1º Semestre em todas as disciplinas onde o aluno não obtiver 18 pontos;<br>
                                                b) 2º Semestre somente em 4 discipinas onde o aluno não obtiver 60 pontos;<br>
                                                FÓRMULA PARA CÁLCULO DA MÉDIA ANUAL<br>
                                                MA=(1Av. x 1)+(2Av. x 2)+(3Av. x 3)+(4Av. x 4) = 60 / 10 = 6.0               

                                            </td>
                                            <td>
                                                FÓRMULA - PESO 6 - REGIME DE ANO<br>
                                                1. O aluno terá 4 Avaliações bimestrais;<br>
                                                2. A nota minima de aprovação é 5.0;<br>
                                                3. Exigência de 75% de frequência anual do aluno;<br>
                                                4. Serão oferecidas 2 recuperações semestrais;<br>
                                                a) 1º Semestre em todas as disciplinas onde o aluno não obtiver 15 pontos;<br>
                                                b) 2º Semestre somente em 4 discipinas onde o aluno não obtiver 50 pontos;<br>
                                                FÓRMULA PARA CÁLCULO DA MÉDIA ANUAL<br>
                                                MA=(1Av. x 2)+(2Av. x 3)+(3Av. x 2)+(4Av. x 3) = 50 / 10 = 5.0

                                            </td>

                                        </tr>          

                                    </table>


                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: __________________________    EDUCADOR(A): __________________________</p><br>


                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="ficha_individual1_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">FICHA INDIVIDUAL 1</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <span><h6><b>Resolução nº. 469/2009 CEE – Regimento Unificado</b></h6></span><br>


                                        <h3><b>FICHA INDIVIDUAL</b></h3><br>

                                    </div>

                                    <p class="text-justify"><b>Escola Municipal de Ensino Infantil e Fundamental “________________”  Localidade:_______ <br> 
                                            Aluno (a): __________________  Nascimento: ___/___/______  Estado: Pará   Cidade: Tomé - Açu <br>
                                            Filiação:<br>
                                            Pai: ____________________________
                                            Mãe: ____________________________
                                        </b></p>


                                    <div>
                                        <p><b>Ano/Serie:__________   Ano:___________</b> </p>


                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>Áreas de Estudos</th>
                                                <th>1ª AV.<br>Peso x1</th>
                                                <th>2ª AV.<br>Peso x2</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>3ª AV.<br>Peso x3</th>
                                                <th>4ª AV.<br>Peso x4</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>Total Pontos</th>
                                                <th>Média Anual</th>
                                            </tr>

                                            <tr>
                                                <td>Língua Portuguesa</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Artes</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Educação Física</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Matemática</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Ciências</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Ensino de Hist.Geog.</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Ensino Religioso</td>
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

                                    </div>


                                    <p class="text-right">Tomé-Açu/PA, ___ de ___________ de ______.</p><br><br>

                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: __________________________    EDUCADOR(A): __________________________</p><br>

                                    <p class="text-left">Observações: _____________________________________________________________________________________________________________________<br><br>
                                        _________________________________________________________________________________________________________________________________             
                                    </p>


                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="ficha_individual2_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">FICHA INDIVIDUAL 2</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <span><h6><b>Resolução nº. 469/2009 CEE – Regimento Unificado</b></h6></span><br>


                                        <h3><b>FICHA INDIVIDUAL</b></h3><br>

                                    </div>

                                    <p class="text-justify"><b>Escola Municipal de Ensino Infantil e Fundamental “________________”  INEP:_______ <br> 
                                            Aluno (a): __________________  Ano Letivo: _________      Ano Cursando: ______   Turma: __________  Nº:___ Turno: ______ <br>
                                            Curso/Habilitação: ____________
                                        </b></p>


                                    <div>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>DISCIPLINAS</th>
                                                <th>Carga Horária Anual</th>
                                                <th>1ª AV.</th>
                                                <th>2ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>Faltas 1º<br>Semestre</th>
                                                <th>3ª AV.</th>
                                                <th>4ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>Faltas 2º<br>Semestre</th>
                                                <th>Total Pontos</th>
                                                <th>Média Anual</th>
                                                <th>Total de Faltas</th>
                                            </tr>

                                            <tr>
                                                <td>Língua Portuguesa</td>
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

                                            <tr>
                                                <td>Língua Estrangeira Moderna(Inglês)</td>
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

                                            <tr>
                                                <td>Arte</td>
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

                                            <tr>
                                                <td>Educação Física</td>
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

                                            <tr>
                                                <td>Matemática</td>
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

                                            <tr>
                                                <td>Ciências</td>
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

                                            <tr>
                                                <td>Ensino da História/Geografia</td>
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

                                            <tr>
                                                <td>História</td>
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

                                            <tr>
                                                <td>Geografia</td>
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

                                            <tr>
                                                <td>Ensino Religioso</td>
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

                                            <tr>
                                                <td>Educação das Relações étnico-raciais</td>
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

                                            <tr>
                                                <td>Educação Ambiental</td>
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

                                            <tr>
                                                <td>Estudos Amazônicos</td>
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

                                            <tr>
                                                <td>Total de C/H do Ano Cursado</td>
                                                <td></td>
                                            </tr>

                                        </table>

                                    </div>


                                    <p class="text-left">Observações: _____________________________________________________________________________________________________________________<br><br>
                                        _________________________________________________________________________________________________________________________________             
                                    </p><br>

                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: __________________________    SECRETÁRIO(A): __________________________  ---- CURSANDO RESULTADO PARCIAL</p>


                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="ficha_individual3_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">FICHA INDIVIDUAL 3</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <span><h6><b>Resolução nº. 469/2009 CEE – Regimento Unificado</b></h6></span><br>


                                        <h3><b>FICHA INDIVIDUAL - EJA</b></h3><br>

                                    </div>

                                    <p class="text-justify"><b>Escola Municipal de Ensino Fundamental “________________”<br>
                                            Ato de Autorização ou Reconhecimento: 035/2012 COMED-Tomé-Açu/PA<br>
                                            Aluno (a): __________________ <br>
                                            Nascimento: ___/___/______  Estado: Pará   Cidade: Tomé - Açu<br>
                                            Filiação:<br>
                                            Pai: ____________________________
                                            Mãe: ____________________________
                                        </b></p><br>


                                    <div>

                                        <p><b>ETAPA:______ 1º:______- EDUCAÇÃO REGULAR</b> </p>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>DISCIPLINAS</th>
                                                <th>1ª AV.</th>
                                                <th>2ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>3ª AV.</th>
                                                <th>4ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>Total Pontos</th>
                                                <th>Média Anual</th>
                                            </tr>

                                            <tr>
                                                <td>LÍNGUA PORTUGUESA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td>ENSINO DA HISTÓRIA E GEOGRAFIA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>CIÊNCIAS</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>MATEMÁTICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>EDUCAÇÃO FÍSICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>ARTES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
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
                                            </tr>

                                            <tr>
                                                <td>FREQUÊNCIA SIMPLES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">APROVEITAMENTO:____________ MÉDIA ANUAL: 6,0  ANO:________ </td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">ESCOLA MUNICIPAL DE ENSINO INFANTIL E FUNDAMENTAL _____________________</td>
                                            </tr>                 

                                        </table>

                                    </div>

                                    <div>

                                        <p><b>ETAPA:______ 2º:______- EDUCAÇÃO REGULAR</b> </p>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>DISCIPLINAS</th>
                                                <th>1ª AV.</th>
                                                <th>2ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>3ª AV.</th>
                                                <th>4ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>Total Pontos</th>
                                                <th>Média Anual</th>
                                            </tr>

                                            <tr>
                                                <td>LÍNGUA PORTUGUESA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td>ENSINO DA HISTÓRIA E GEOGRAFIA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>CIÊNCIAS</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>MATEMÁTICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>EDUCAÇÃO FÍSICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>ARTES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
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
                                            </tr>

                                            <tr>
                                                <td>FREQUÊNCIA SIMPLES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">APROVEITAMENTO:____________ MÉDIA ANUAL: 6,0  ANO:________ </td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">ESCOLA MUNICIPAL DE ENSINO INFANTIL E FUNDAMENTAL _____________________</td>
                                            </tr>                 

                                        </table>

                                    </div>

                                    <div>

                                        <p><b>ETAPA:______ 3º:______- EDUCAÇÃO REGULAR</b> </p>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>DISCIPLINAS</th>
                                                <th>1ª AV.</th>
                                                <th>2ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>3ª AV.</th>
                                                <th>4ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>Total Pontos</th>
                                                <th>Média Anual</th>
                                            </tr>

                                            <tr>
                                                <td>LÍNGUA PORTUGUESA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td>HISTÓRIA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>GEOGRAFIA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>CIÊNCIAS</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>MATEMÁTICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>EDUCAÇÃO FISICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>LÍNGUA ESTRANGEIRA INGLÊS</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>ARTES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
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
                                            </tr>

                                            <tr>
                                                <td>FREQUÊNCIA SIMPLES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">APROVEITAMENTO:____________   ANO:________ </td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">ESCOLA MUNICIPAL DE ENSINO INFANTIL E FUNDAMENTAL _____________________</td>
                                            </tr>                 

                                        </table>

                                    </div><br>  

                                    <div>

                                        <p><b>ETAPA:______ 4º:______- EDUCAÇÃO REGULAR</b> </p>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>DISCIPLINAS</th>
                                                <th>1ª AV.</th>
                                                <th>2ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>3ª AV.</th>
                                                <th>4ª AV.</th>
                                                <th>Recup.<br> Semestral</th>
                                                <th>Total Pontos</th>
                                                <th>Média Anual</th>
                                            </tr>

                                            <tr>
                                                <td>LÍNGUA PORTUGUESA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td>HISTÓRIA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>GEOGRAFIA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>CIÊNCIAS</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>MATEMÁTICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>EDUCAÇÃO FISICA</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>LÍNGUA ESTRANGEIRA INGLÊS</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
                                            </tr>

                                            <tr>
                                                <td>ARTES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>                        
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
                                            </tr>

                                            <tr>
                                                <td>FREQUÊNCIA SIMPLES</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">APROVEITAMENTO:____________   ANO:________ </td>
                                            </tr>

                                            <tr>
                                                <td colspan="9">ESCOLA MUNICIPAL DE ENSINO INFANTIL E FUNDAMENTAL _____________________</td>
                                            </tr>                 

                                        </table>

                                    </div><br><br>

                                    <p class="text-right">Tomé-Açu/PA, ___ de ___________ de ______.</p><br><br>

                                    <p class="text-left">Observações: _____________________________________________________________________________________________________________________<br><br>
                                        _________________________________________________________________________________________________________________________________             
                                    </p><br>

                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: __________________________    SECRETÁRIO(A): __________________________</p>


                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="historico1_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">HISTÓRICO 1</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <h3><b>HISTÓRICO ESCOLAR ENSINO FUNDAMENTAL</b></h3><br>

                                    </div>

                                    <p class="text-justify"><b>Escola Municipal de Ensino Fundamental “________________”
                                            INEP:_________<br>
                                            Cidade: Tomé - Açu UF: Pará<br>
                                            Resolução nº. 469/2009 CEE – Regimento Unificado<br>
                                            Ato de Autorização ou Reconhecimento: ___________<br>
                                            Aluno (a): __________________ <br>                    
                                            Filiação:<br>
                                            Pai: ____________________________
                                            Mãe: ____________________________ <br>
                                            Data de Nascimento:__/__/____ Cidade: _________ Uf: ______<br>
                                        </b></p><br>              

                                    <div>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>COMPONENTES CURRICULARES</th>
                                                <th>1º Ano</th>
                                                <th>2º Ano</th>
                                                <th>3º Ano</th>
                                                <th>4º Ano</th>
                                                <th>5º Ano</th>
                                                <th>6º Ano</th>
                                                <th>7º Ano</th>
                                                <th>8º Ano</th>
                                                <th>9º Ano</th>
                                            </tr>

                                            <tr>
                                                <td>Língua Portuguesa</td>
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

                                            <tr>
                                                <td>Língua Estrangeira Moderna(Inglês)</td>
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

                                            <tr>
                                                <td>Artes</td>
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

                                            <tr>
                                                <td>Educação Física</td>
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

                                            <tr>
                                                <td>Matemática</td>
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

                                            <tr>
                                                <td>Ciências</td>
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

                                            <tr>
                                                <td>Ensino da História/Geografia</td>
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

                                            <tr>
                                                <td>História</td>
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

                                            <tr>
                                                <td>Geografia</td>
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

                                            <tr>
                                                <td>Ensino Religioso</td>
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

                                            <tr>
                                                <td>Estudos Amazonicos (PARTE DIVERSIFICADA)</td>
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

                                            <tr>
                                                <td colspan="10">Freqüência Anual %</td>

                                            </tr>

                                            <tr>
                                                <td colspan="10">Carga Horária Anual</td>

                                            </tr>

                                        </table>             

                                        <table class="table table-bordered">

                                            <tr>
                                                <th>ANOS</th>
                                                <th>ANO</th>
                                                <th>ESTABELECIMENTO DE ENSINO</th>
                                                <th>CIDADE/UF</th>
                                            </tr>

                                            <tr>
                                                <td>1º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>2º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>3º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>4º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>5º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>6º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>7º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>8º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>9º Ano</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        </table>

                                    </div><br>

                                    <p class="text-right">Tomé-Açu/PA, ___ de ___________ de ______.</p><br><br>

                                    <p class="text-left">Observações: _____________________________________________________________________________________________________________________<br><br>
                                        _________________________________________________________________________________________________________________________________             
                                    </p><br>

                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: __________________________    SECRETÁRIO(A): __________________________</p>

                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane active" id="historico2_aluno">
                        <div class="panel panel-primary" id="mapao">
                            <div class="panel-heading" id="noprint">HISTÓRICO 2</div>
                            <div class="panel-body box_conteudo" id="yesprint">

                                <div class="medidaboletim">

                                    <div class="text-center">  

                                        <img class="tomeacuboletim" src="../imagens/tomeacu.png" alt="brasao">   

                                    </div>

                                    <div class="text-center">

                                        <span><h4><b>GOVERNO DO ESTADO DO PARÁ</b></h4></span>

                                        <span><h4><b>PREFEITURA MUNICIPAL DE TOMÉ - AÇU</b></h4></span>

                                        <span><h4><b>SECRETARIA MUNICIPAL DE EDUCAÇÃO E DESPORTO - SEMED</b></h4></span>

                                        <span><h6><b>Resolução nº. 469/2009 CEE – Regimento Unificado</b></h6></span>


                                        <h3><b>HISTÓRICO ESCOLAR - EJA</b></h3><br>

                                    </div>

                                    <p class="text-justify"><b>Escola Municipal de Ensino Fundamental “________________”<br>
                                            INEP:_________<br>
                                            Ato de Autorização ou Reconhecimento: ___________<br>
                                            Aluno (a): __________________ <br>
                                            Nascimento: ___/___/______  Estado: Pará   Cidade: Tomé - Açu<br>
                                            Filiação:<br>
                                            Pai: ____________________________
                                            Mãe: ____________________________
                                        </b></p><br>


                                    <div>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>ETAPA</th>
                                                <th>ANO</th>
                                                <th></th>
                                                <th>Língua<br> Portuguesa</th>
                                                <th>Ensino da História<br> Geografia</th>
                                                <th>História</th>
                                                <th>Geografia</th>
                                                <th>Ciências</th>
                                                <th>Matemática</th>
                                                <th>Educação<br> Física</th>
                                                <th>Língua Estrangeira<br> (Inglês)</th>
                                                <th>Artes</th>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">1ª</td>
                                                <td></td>
                                                <td>"2017"</td>
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

                                            <tr>
                                                <td>Freq.</td>
                                                <td>90%</td>
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

                                            <tr>
                                                <td colspan="12">ESCOLA: _____________________________</td>
                                            </tr>

                                        </table>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>ETAPA</th>
                                                <th>ANO</th>
                                                <th></th>
                                                <th>Língua<br> Portuguesa</th>
                                                <th>Ensino da História<br> Geografia</th>
                                                <th>História</th>
                                                <th>Geografia</th>
                                                <th>Ciências</th>
                                                <th>Matemática</th>
                                                <th>Educação<br> Física</th>
                                                <th>Língua Estrangeira<br> (Inglês)</th>
                                                <th>Artes</th>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">2ª</td>
                                                <td></td>
                                                <td>"2017"</td>
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

                                            <tr>
                                                <td>Freq.</td>
                                                <td>90%</td>
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

                                            <tr>
                                                <td colspan="12">ESCOLA: _____________________________</td>
                                            </tr>

                                        </table>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>ETAPA</th>
                                                <th>ANO</th>
                                                <th></th>
                                                <th>Língua<br> Portuguesa</th>
                                                <th>Ensino da História<br> Geografia</th>
                                                <th>História</th>
                                                <th>Geografia</th>
                                                <th>Ciências</th>
                                                <th>Matemática</th>
                                                <th>Educação<br> Física</th>
                                                <th>Língua Estrangeira<br> (Inglês)</th>
                                                <th>Artes</th>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">3ª</td>
                                                <td></td>
                                                <td>"2017"</td>
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

                                            <tr>
                                                <td>Freq.</td>
                                                <td>90%</td>
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

                                            <tr>
                                                <td colspan="12">ESCOLA: _____________________________</td>
                                            </tr>

                                        </table>

                                        <table class="table table-bordered">

                                            <tr>                  

                                                <th>ETAPA</th>
                                                <th>ANO</th>
                                                <th></th>
                                                <th>Língua<br> Portuguesa</th>
                                                <th>Ensino da História<br> Geografia</th>
                                                <th>História</th>
                                                <th>Geografia</th>
                                                <th>Ciências</th>
                                                <th>Matemática</th>
                                                <th>Educação<br> Física</th>
                                                <th>Língua Estrangeira<br> (Inglês)</th>
                                                <th>Artes</th>
                                            </tr>

                                            <tr>
                                                <td rowspan="2">4ª</td>
                                                <td></td>
                                                <td>"2017"</td>
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

                                            <tr>
                                                <td>Freq.</td>
                                                <td>90%</td>
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

                                            <tr>
                                                <td colspan="12">ESCOLA: _____________________________</td>
                                            </tr>

                                        </table>

                                        <table class="table table-bordered">

                                            <tr>
                                                <td colspan="12" class="text-left">
                                                    EQUIVALÊNCIA:<br>	
                                                    1ª ETAPA – 1º, 2º, E 3º ANO DO ENSINO FUNDAMENTAL.<br>
                                                    2ª ETAPA – 4º, E 5º ANO DO ENSINO FUNDAMENTAL.<br>
                                                    3ª ETAPA – 6º, E 7º ANO DO ENSINO FUNDAMENTAL.<br>
                                                    4ª ETAPA – 8º, E 9º ANO DO ENSINO FUNDAMENTAL.<br>

                                                    <p class="text-right">Média:_____</p>
                                                </td>
                                            </tr>

                                        </table>

                                    </div>

                                    <p class="text-right">Tomé-Açu/PA, ___ de ___________ de ______.</p><br><br>

                                    <p class="text-left">Observações: _____________________________________________________________________________________________________________________<br><br>
                                        _________________________________________________________________________________________________________________________________             
                                    </p><br>

                                    <p class="text-center">EDUCADOR(A) DIRIGENTE: __________________________    SECRETÁRIO(A): __________________________</p>


                                </div><br>

                                <button type="submit" class="btn btn-success btn-lg" onClick="window.print()" id="noprint">Imprimir</button>


                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="desabilitar_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">DESABILITAR</div>
                            <div class="panel-body box_conteudo">

                                <label for="inputDesabilitarAluno">Desabilitar Aluno (a)</label>
                                <input type="text" class="form-control" id="inputDesabilitarAluno" placeholder="digite o nome do aluno (a)"><br>

                                <button type="submit" class="btn btn-danger btn-lg">Desabilitar</button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </body>
</html>
