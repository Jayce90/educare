<?php
session_start();

include_once '../classes/Usuario.php';
include_once '../classes/Disciplina.php';
require '../controle/autenticacao.php';

Secretaria();

$pendentes = new Usuario();
$mostrar_pendentes = $pendentes->usuarios_pendente();

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
                <img src="../imagens/logo.png">
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a class="glyphicon glyphicon-home" href="index_secretaria.php"> Início</a></li>
                        <li class="active"><a class="glyphicon glyphicon-plus"> Cadastrar<span class="sr-only">(current)</span></a></li>
                        <li><a class="glyphicon glyphicon-pushpin" href="vincular_secretaria.php"> Vincular</a></li>
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
                    <li class="active"><a class="glyphicon glyphicon-user" href="#cad_aluno" data-toggle="pill"> Cadastro Aluno</a></li>
                    <li><a class="glyphicon glyphicon-briefcase" href="#cad_professor" data-toggle="pill"> Cadastro Educador</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#cad_disciplina" data-toggle="pill"> Cadastro Disciplina</a></li>
                    <li><a class="glyphicon glyphicon-folder-open" href="#aprovacao" data-toggle="pill"> Aprovar Usuário</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DO ALUNO(A)</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/cadastrando_aluno.php" method="post">

                                    <div class="form-group">
                                        <label for="inputIdAluno">1. Identificação Unica</label>
                                        <input type="text" name="cad_id_aluno" class="form-control" id="inputIdAluno" placeholder="digite a identificação unica" required="" maxlength="" onkeypress="return SomenteNumero(event);" onblur="showride()">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNomeAluno">2. Nome do aluno(a)</label>
                                        <input type="text" name="cad_nome_aluno" class="form-control" id="inputNomeAluno" placeholder="digite nome do aluno">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">

                                            <div class="form-group">
                                                <label for="inputNascimentoAluno">3. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimentoAluno" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6">

                                            <div class="form-group">
                                                <label for="inputSexoAluno">4. Sexo :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexoAluno" value="masculino"> Masculino
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
                                                <label for="inputNisAluno">5. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_aluno" class="form-control" id="inputNisAluno" placeholder="digite o NIS" required="" maxlength="11" onkeypress="formatar('###########', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                        <div class="col-xs-6 col-md-8">

                                            <div class="form-group">
                                                <label for="inputRacaAluno">6. Cor/Raça :</label><br>

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

                                    <div class="form-group">
                                        <label for="inputMaeAluno">7. Nome da mãe</label>
                                        <input type="text" name="cad_mae_aluno" class="form-control" id="inputMaeAluno" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPaiAluno">8. Nome do pai</label>
                                        <input type="text" name="cad_pai_aluno" class="form-control" id="inputPaiAluno" placeholder="digite nome do pai">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNacionalidadeAluno">9. Nacionalidade do aluno :</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="brasileira"> Brasileiro
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="naturalizado"> Naturalizado
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidadeAluno" value="extrangeiro"> Extrangeiro
                                        </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputPaisOrigemAluno">10. País de origem</label>
                                                <input type="text" name="cad_pais_nasc_aluno" class="form-control" id="inputPaisOrigemAluno" placeholder="digite o país de origem">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputEstadoNascAluno">11. UF de nascimento</label>

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
                                                    <option value="PA">PA</option>
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
                                                <label for="inputTelefoneAluno">12. Telefone</label>
                                                <input type="text" name="cad_telefone_aluno" class="form-control" id="inputTelefoneAluno" placeholder="91 000000000" required="" maxlength="12" onkeypress="formatar('## #########', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputMunicipioNascAluno">13. Município de nascimento</label>
                                                <input type="text" name="cad_municipionasc_aluno" class="form-control" id="inputMunicipioNascAluno" placeholder="digite o município de nascimento">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputNecessidadeEspecialAluno">14. Aluno(a) com deficiência :</label><br>

                                            <select class="form-control" name="cad_deficiencia_aluno" id="inputNecessidadeEspecialAluno">
                                                <option value="">Selecione</option>
                                                <option value="Sim">Sim</option>                                               
                                                <option value="Não">Não</option>
                                            </select>                             

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">

                                            <label for="inputTipoDeficienciaAluno">14a. Deficiência :</label><br>

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

                                        <div class="col-md-5">

                                            <label for="inputTranstornoGloAluno">14b. Transtorno global do desenvolvimento :</label><br>

                                            <select class="form-control" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornoGloAluno">
                                                <option value="">Selecione</option>
                                                <option value="Autismo Infantil">Autismo Infantil</option>                                               
                                                <option value="Síndrome de Asperger">Síndrome de Asperger</option>
                                                <option value="Síndrome de Rett">Síndrome de Rett</option>
                                                <option value="Transtorno desintegrativo da infância">Transtorno desintegrativo da infância</option>                                                
                                            </select>                                          
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputSuperdotacaoAluno">14c. Altas Habilidades/Superdotação :</label><br>

                                            <select class="form-control" name="cad_tipo_deficiencia_aluno[]" id="inputSuperdotacaoAluno">
                                                <option value="">Selecione</option>
                                                <option value="Autismo Infantil">Altas Habilidades/Superdotação</option>                                              
                                            </select>

                                        </div>
                                    </div><br>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputIdentidadeAluno">15. Número da identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputIdentidadeAluno" placeholder="digite o numero da identidade" required="" maxlength="20" onkeypress="formatar('####################', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoIdentidadeAluno">15a. Complemento da identidade</label>
                                                <input type="text" name="cad_complemento_identidade_aluno" class="form-control" id="inputComplementoIdentidadeAluno" placeholder="digite o complemento da identidade" required="" maxlength="4" onkeypress="formatar('####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputOrgaoIdentidadeAluno">15b. Orgão emissor da identidade</label>
                                                <input type="text" name="cad_orgao_identidade_aluno" class="form-control" id="inputOrgaoIdentidadeAluno" placeholder="digite o orgao emissor">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEstadoIdentidadeAluno">15c. UF da identidade</label>

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
                                                    <option value="PA">PA</option>
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
                                                <label for="inputDataIdentidadeAluno">15d. Data da expedição</label>
                                                <input type="text" name="cad_data_identidade_aluno" class="form-control" id="inputDataIdentidadeAluno" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCertidaoCivilAluno">16. Certidão Civil :</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="">Selecione</option>
                                                <option value="Modelo Novo">Modelo Novo</option>                                               
                                                <option value="Modelo Antigo">Modelo Antigo</option>
                                            </select> 

                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputTipoCertidaoAluno">16a. Tipo de certidão Civil :</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="">Selecione</option>
                                                <option value="Nascimento">Certidão de nascimento</option>                                               
                                                <option value="Casamento">Certidão de casamento</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputTermoCertidaoAluno">16b. Número do termo</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputTermoCertidaoAluno" placeholder="digite o numero do termo" required="" maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputFolhaCertidaoAluno">16c. Folha</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputFolhaCertidaoAluno" placeholder="folha" required="" maxlength="4" onkeypress="formatar('####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputLivroCertidaoAluno">16d. Livro</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputLivroCertidaoAluno" placeholder="livro" required="" maxlength="8" onkeypress="formatar('########', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputDataCertidaoAluno">16e. Data de emissão da certidão</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputDataCertidaoAluno" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputEstadoCartorioAluno">16f. UF do cartório</label>

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
                                                    <option value="PA">PA</option>
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
                                                <label for="inputMunicipioCartorioAluno">16g. Município do cartório</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputMunicipioCartorioAluno" placeholder="municipio do cartorio">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNomeCartorioAluno">16h. Nome do cartório</label>
                                        <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNomeCartorioAluno" placeholder="digite o nome do cartorio">

                                    </div>

                                    <div class="form-group">
                                        <label for="inputNumeroMatriculaAluno">16i. Número da matricula (Registro civil - Certidão nova)</label>
                                        <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNumeroMatriculaAluno" placeholder="numero da matricula" required="" maxlength="40" onkeypress="formatar('###### ## ## #### # ##### ### ####### ##', this); return SomenteNumero(event);" onblur="showride()">

                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputCpfAluno">17. Número do CPF</label>
                                            <input type="text" name="cad_cpf_aluno" class="form-control" id="inputCpfAluno" placeholder="digite o CPF" required="" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">

                                        </div>
                                        <div class="col-md-4">

                                            <label for="inputPassaporteAluno">18. Documento extrangeiro/Passaporte</label>
                                            <input type="text" name="cad_passaporte_aluno" class="form-control" id="inputPassaporteAluno" placeholder="digite o passaporte" required="" maxlength="8" onkeypress="formatar('########', this)" onblur="showhide()">

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

                                        <div class="col-md-6">

                                            <label for="inputDocumentacaoPedenteAluno">Documentação Pedente :</label><br>

                                            <select class="form-control" name="cad_documentacao_pedente_aluno">
                                                <option value="">Selecione</option>
                                                <option value="Sim">Sim</option>                                               
                                                <option value="Não">Não</option>
                                            </select>

                                        </div>

                                    </div><br>                                    

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputLocalizacaoAluno">19. Localização da residência :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacaoAluno" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacaoAluno" value="rural"> Rural
                                                </label>

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputCepAluno">20. CEP</label>
                                                <input type="text" name="cad_cep_aluno" class="form-control" id="inputCepAluno" placeholder="digite o CEP" required="" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEnderecoAluno">21. Endereço</label>
                                                <input type="text" name="cad_endereco_aluno" class="form-control" id="inputEnderecoAluno" placeholder="digite o endereco">

                                            </div>

                                        </div>
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroEnderecoAluno">22. Número</label>
                                                <input type="text" name="cad_numero_aluno" class="form-control" id="inputNumeroEnderecoAluno" placeholder="numero" onkeypress="return SomenteNumero(event);">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoAluno">23. Complemento</label>
                                                <input type="text" name="cad_complemento_aluno" class="form-control" id="inputComplementoEnderecoAluno" placeholder="complemento">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairroAluno">24. Bairro</label>
                                                <input type="text" name="cad_bairro_aluno" class="form-control" id="inputBairroAluno" placeholder="bairro">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputEstadoEnderecoAluno">25. UF</label>
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
                                                    <option value="PA">PA</option>
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

                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="inputMunicipioAluno">26. Município</label>
                                                <input type="text" name="cad_municipio_aluno" class="form-control" id="inputMunicipioAluno" placeholder="municipio">

                                            </div>
                                        </div>
                                    </div>

                                    <label for="inputEscolarizacaoEspacoAluno">27. Rececebe escolarização em outro espaço :</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspacoAluno" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspacoAluno" value="nao"> Não
                                    </label><br>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputTransporteEscolarAluno">28. Transporte escolar público :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteEscolarAluno" value="utiliza"> Utiliza
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteEscolarAluno" value="não utiliza"> Não Utiliza
                                            </label>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputPoderPublicoAluno">28a. Poder público responsável pelo transporte :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderPublicoAluno" value="municipal"> Municipal
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderPublicoAluno" value="estadual"> Estadual
                                            </label>

                                        </div>
                                    </div><br>




                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputTipoveiculoAluno">28b. Rodoviário :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Van/Kombi">Van/Kombi</option>                                               
                                                <option value="Micro - Ônibus">Micro - Ônibus</option>                                       
                                                <option value="Ônibus">Ônibus</option>                                       
                                                <option value="Bicicleta">Bicicleta</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputTipoveiculoAluno">28c. Aquaviário/Embarcação :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Barco">Barco</option>                                               
                                                <option value="Lancha">Lancha</option>                                                                             
                                            </select>
                                        </div>
                                    </div><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_professor">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DO EDUCADOR(A)</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/cadastrando_educador.php" method="post">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputIdProfessor">1. INEP Educador(a)</label>
                                                <input type="text" name="cad_inep_professor" class="form-control" id="inputIdProfessor" placeholder="digite a identificação unica" required="" maxlength="" onkeypress="return SomenteNumero(event);" onblur="showride()">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputCpfProfessor">2. CPF</label>
                                                <input type="text" name="cad_cpf_professor" class="form-control" id="inputCpfProfessor" placeholder="digite o CPF" required="" maxlength="14" onkeypress="formatar('###.###.###-##', this); return SomenteNumero(event);" onblur="showhide()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9">

                                            <div class="form-group">
                                                <label for="inputNomeProfessor">3. Nome do professor(a)</label>
                                                <input type="text" name="cad_nome_professor" class="form-control" id="inputNomeProfessor" placeholder="digite nome do professor">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputNascimentoProfessor">4. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_professor" class="form-control" id="inputNascimentoProfessor" placeholder="00/00/0000" required="" maxlength="10" onkeypress="formatar('##/##/####', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputMaeProfessor">5. Nome da mãe</label>
                                        <input type="text" name="cad_mae_professor" class="form-control" id="inputMaeProfessor" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPaiProfessor">6. Nome do pai</label>
                                        <input type="text" name="cad_pai_professor" class="form-control" id="inputPaiProfessor" placeholder="digite nome do pai">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputEmailProfessor">7.  Endereço eletrônico (e-mail)</label>
                                                <input type="text" name="cad_email_professor" class="form-control" id="inputEmailProfessor" placeholder="digite o Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputNisProfessor">8. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_professor" class="form-control" id="inputNisProfessor" placeholder="digite o NIS" required="" maxlength="11" onkeypress="formatar('###########', this); return SomenteNumero(event);" onblur="showride()">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexoProfessor">9. Sexo</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_professor" id="inputSexoProfessor" value="masculino"> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_professor" id="inputSexoProfessor" value="feminino"> Feminino
                                                </label>

                                            </div>


                                        </div>
                                        <div class="col-md-8">

                                            <div class="form-group">
                                                <label for="inputRacaProfessor">10. Cor/Raça</label><br>

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
                                                    <input type="radio" name="cad_raca_professor" id="inputRacaProfessor" value="naodeclarada"> Não Declarada
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="inputNacionalidadeProfessor">11. Nacionalidade</label><br>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="brasileira"> Brasileira
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="brasileira – nascido no exterior ou naturalizado"> brasileira – nascido no exterior ou naturalizado
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_nacionalidade_professor" id="inputNacionalidadeProfessor" value="Estrangeira"> Estrangeira
                                    </label><br><br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputPaisorigemProfessor">12. País de origem</label>
                                                <input type="text" name="cad_pais_nasc_professor" class="form-control" id="inputPaisorigemProfessor" placeholder="digite o país de origem">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="inputUfdenascimentoProfessor">13. UF de nascimento</label>
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
                                                    <option value="PA">PA</option>
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
                                                <label for="inputMunidenascimentoProfessor">14. Município de nascimento</label>
                                                <input type="text" name="cad_municipio_nasc_professor" class="form-control" id="inputMunidenascimentoProfessor" placeholder="digite o município de nascimento">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNecessidadeEspecialProfessor">15. Profissional Escolar com deficiência</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="sim"> Sim
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_deficiencia_professor" id="inputNecessidadeEspecialProfessor" value="nao"> Não
                                        </label>
                                    </div>

                                    <label for="inputTipoDeficienciaProfessor">15a. Tipo de deficiência</label>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciaintelectual"> Deficiência Intelectual
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="baixavisao"> Baixa Visão
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="surdez"> Surdez
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciaauditiva"> Deficiência Auditiva
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="surdocegueira"> Surdocegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciafisica"> Deficiência Física
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="cegueira"> Cegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_professor[]" id="inputTipoDeficienciaProfessor" value="deficienciamultipla"> Deficiência Múltipla
                                            </label>
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputLocalizacaoProfessor">16. Localização/Zona de residência</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_professor" id="inputLocalizacaoProfessor" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_professor" id="inputLocalizacaoProfessor" value="rural"> Rural
                                                </label>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputCepProfessor">17. CEP</label>
                                                <input type="text" name="cad_cep_professor" class="form-control" id="inputCepProfessor" placeholder="digite o CEP" required="" maxlength="9" onkeypress="formatar('#####-###', this); return SomenteNumero(event);" onblur="showride()">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEnderecoProfessor">18. Endereço</label>
                                                <input type="text" name="cad_endereco_professor" class="form-control" id="inputEnderecoProfessor" placeholder="digite o endereco">

                                            </div>
                                        </div>

                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroEnderecoProfessor">19. Número</label>
                                                <input type="text" name="cad_numero_professor" class="form-control" id="inputNumeroEnderecoProfessor" placeholder="numero" onkeypress="return SomenteNumero(event);">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoEnderecoProfessor">20. Complemento</label>
                                                <input type="text" name="cad_complemento_professor" class="form-control" id="inputComplementoEnderecoProfessor" placeholder="complemento">

                                            </div>
                                        </div>

                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairroProfessor">21. Bairro</label>
                                                <input type="text" name="cad_bairro_professor" class="form-control" id="inputBairroProfessor" placeholder="bairro">

                                            </div>
                                        </div>
                                    </div>                                   

                                    <label for="inputMunicipioProfessor">22. Município</label>
                                    <input type="text" name="cad_municipio_professor" class="form-control" id="inputMunicipioProfessor" placeholder="municipio"><br>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="inputEscolaridade">23. Escolaridade</label><br>

                                            <select class="form-control" name="cad_escolaridade_professor">
                                                <option value="">Selecione</option>                                               
                                                <option value="FundamentalIncompleto">Fundamental incompleto</option>                                               
                                                <option value="FundamentalCompleto">Fundamental completo</option>                                        
                                                <option value="EnsinoMedioMagisterio">Ensino Médio – Normal/Magistério</option>                                        
                                                <option value="EnsinoMedioIndigena">Ensino Médio – Normal/Magistério Específico Indígena</option>                                        
                                                <option value="EnsinoMedio">Ensino Médio</option>                                        
                                                <option value="Superior">Superior</option>                                        
                                            </select>

                                        </div>
                                        <div class="col-md-8">
                                            <label for="inputCursoProfessor">24. Curso</label>
                                            <input type="text" name="cad_curso_professor" class="form-control" id="inputCursoProfessor" placeholder="curso">
                                        </div>
                                    </div><br>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <label for="inputInstituicaoProfessor">25. Nome da instituição</label>
                                            <input type="text" name="cad_instituicao_professor" class="form-control" id="inputInstituicaoProfessor" placeholder="instituição">
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputEscolaridade">25a. Situação do curso superior</label><br>

                                            <select class="form-control" name="cad_situacao_curso_professor">
                                                <option value="">Selecione</option>                                               
                                                <option value="concluido">Concluído</option>                                               
                                                <option value="emandamento">Em andamento</option>                                       
                                            </select>
                                        </div>
                                    </div><br>

                                    <label for="inputPosProfessor">26. Pós-graduação</label>

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
                                    </label><br><br>

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
                                                <input type="checkbox" name="cad_outros_cursos_professor[]" id="inputOutrosCursosProfessor" value="deficienciafisica"> Anos finais do ensino fundamental
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
                                            <input type="text" name="cad_nome_disciplina" class="form-control" id="inputNomeDisciplina" placeholder="nome da disciplina">
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputCargaHorariaDisciplina">2. Carga Horária</label>
                                            <input type="text" name="cad_carga_horaria_disciplina" class="form-control" id="inputCargaHorariaDisciplina" placeholder="carga horária">                                            
                                        </div>

                                        <div class="col-md-4">

                                            <label for="inputNivelDisciplina">3. Nivel da disciplina</label><br>

                                            <select class="form-control" name="cad_nivel_disciplina">
                                                <option value="">Selecione</option>                                               
                                                <option value="infantil">Educação Infantil</option>                                               
                                                <option value="Fundamental">Ensino Fundamental</option>                                        
                                                <option value="Eja">EJA</option>                                        
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
                                                <option value="preescola 1">Pré - Escola 1</option>                                        
                                                <option value="preescola 2">Pré - Escola 2</option>                                        
                                                <option value="1º ano">1º ano</option>                                        
                                                <option value="2º ano">2º ano</option>                                        
                                                <option value="3º ano">3º ano</option>                                        
                                                <option value="4º ano">4º ano</option>                                        
                                                <option value="5º ano">5º ano</option>                                        
                                                <option value="6º ano">6º ano</option>                                        
                                                <option value="7º ano">7º ano</option>                                        
                                                <option value="8º ano">8º ano</option>                                        
                                                <option value="9º ano">9º ano</option>                                        
                                                <option value="fundamentalInicial">EJA - Ensino Fundamental anos iniciais</option>                                        
                                                <option value="fundamentalFinal">EJA - Ensino Fundamental anos finais</option>                                        
                                                <option value="fundamentalInicialeFinal">EJA - Ensino Fundamental anos iniciais e anos finais</option>                                        
                                                <option value="fic">EJA - EJA integrada à Educação Profissional de Nível Fundamental (FIC)</option>                                        
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
