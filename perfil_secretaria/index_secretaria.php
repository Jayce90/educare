<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="../layout/css/bootstrap.min.css" rel="stylesheet">
        <link href="../layout/css/web_escola.css" rel="stylesheet">
        <script src="../layout/js/bootstrap.min.js"></script>
        <title>SECRETARIA ESCOLAR</title>
    </head>

    <body>
        <div class="cabecalho">
            <div class="banner">
                <img src="../imagens/logo.png">
                <span id="titulo">WEB_ESCOLA - SEMED</span><br>
                <span id="sub-titulo">Prefeitura Municipal de Tomé-Açu</span>
            </div>
        </div>

        <div class="row">

            <!-- Navigation Buttons -->
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked" id="myTabs">
                    <li class="active"><a class="glyphicon glyphicon-pencil" href="#cad_aluno" data-toggle="pill"> Cadastro Aluno</a></li>
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_vincular" data-toggle="pill"> Vincular</a></li>
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_notas" data-toggle="pill"> Cadastro Notas</a></li>
                    <li><a class="glyphicon glyphicon-alert" href="../index.php"> Sair</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div class="col-md-9" id="box_conteudo">
                <div class="tab-content">

                    <div class="tab-pane active" id="cad_aluno">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DE ALUNO</div>
                            <div class="panel-body box_conteudo">

                                <form action="../controle/cadastrando_aluno.php" method="post">

                                    <div class="form-group">
                                        <label for="inputId">1. Identificação Unica</label>
                                        <input type="text" name="cad_id_aluno" class="form-control" id="inputId" placeholder="digite a identificação unica">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNome">2. Nome do aluno</label>
                                        <input type="text" name="cad_nome_aluno" class="form-control" id="inputNome" placeholder="digite nome do aluno">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">

                                            <div class="form-group">
                                                <label for="inputNascimento">3. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimento" placeholder="digite a data de nascimento">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-6">

                                            <div class="form-group">
                                                <label for="inputSexo">4. Sexo :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexo" value="masculino"> Masculino
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_sexo_aluno" id="inputSexo" value="feminino"> Feminino
                                                </label>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="form-group">
                                                <label for="inputNis">5. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_aluno" class="form-control" id="inputNis" placeholder="digite o NIS">
                                            </div>

                                        </div>
                                        <div class="col-xs-6 col-md-8">

                                            <div class="form-group">
                                                <label for="inputraca">6. Cor/Raça :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="branca"> Branca
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="preta"> Preta
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="parda"> Parda
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="amarela"> Amarela
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="indigena"> Indígena
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_raca_aluno" id="inputraca" value="naodeclarada"> Não Declarada
                                                </label>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputMae">7. Nome da mãe</label>
                                        <input type="text" name="cad_mae_aluno" class="form-control" id="inputMae" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPai">8. Nome do pai</label>
                                        <input type="text" name="cad_pai_aluno" class="form-control" id="inputPai" placeholder="digite nome do pai">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNacionalidade">9. Nacionalidade do aluno :</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidade" value="brasileira"> Brasileiro
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidade" value="naturalizado"> Naturalizado
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputNacionalidade" value="extrangeiro"> Extrangeiro
                                        </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputPaisorigem">10. País de origem</label>
                                                <input type="text" name="cad_pais_nasc_aluno" class="form-control" id="inputPaisorigem" placeholder="digite o país de origem">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputEstadonasc">11. UF de nascimento</label>

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
                                                <label for="inputtelefonealuno">12. Telefone</label>
                                                <input type="text" name="cad_telefone_aluno" class="form-control" id="inputtelefonealuno" placeholder="telefone">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputMunidenascimento">13. Município de nascimento</label>
                                                <input type="text" name="cad_municipionasc_aluno" class="form-control" id="inputMunidenascimento" placeholder="digite o município de nascimento">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputnecessidadeespecial">14. Aluno com deficiência, transtorno global do
                                                    desenvolvimento ou altas habilidades/superdotação :</label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_deficiencia_aluno" id="inputnecessidadeespecial" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_deficiencia_aluno" id="inputnecessidadeespecial" value="nao"> Não
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputTipoDeficiencia">14a. Deficiência :</label><br>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="cegueira"> Cegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="baixavisao"> Baixa Visão
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="surdez"> Surdez
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="deficienciaauditiva"> Deficiência Auditiva
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="surdocegueira"> Surdocegueira
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="deficienciafisica"> Deficiência Física
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="deficienciaintelectual"> Deficiência Intelectual
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTipoDeficiencia" value="deficienciamultipla"> Deficiência Múltipla
                                            </label>                                            

                                        </div> 

                                        <div class="col-md-4">

                                            <label for="inputTranstornog">14b. Transtorno global do desenvolvimento :</label><br>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornog" value="autismoinfantil"> Autismo Infantil
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornog" value="sindromedeasperger"> Síndrome de Asperger 
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornog" value="sindromederett"> Síndrome de Rett
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornog" value="Transtornodesintegrativodainfancia"> Transtorno desintegrativo da infância
                                            </label>


                                        </div>
                                        <div class="col-md-4">

                                            <label for="inputTranstornog">14c. Altas Habilidades/Superdotação :</label><br>

                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="cad_tipo_deficiencia_aluno[]" id="inputTranstornog" value="superdotacao"> Altas Habilidades/Superdotação
                                            </label>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputNumerorg">15. Número da identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputNumerorg" placeholder="digite o numero da identidade">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementorg">15a. Complemento da identidade</label>
                                                <input type="text" name="cad_complemento_identidade_aluno" class="form-control" id="inputComplementorg" placeholder="digite o complemento da identidade">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputOrgaoIdentidade">15b. Orgão emissor da identidade</label>
                                                <input type="text" name="cad_orgao_identidade_aluno" class="form-control" id="inputOrgaoIdentidade" placeholder="digite o orgao emissor">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputUfIdentidade">15c. UF da identidade</label>

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
                                                <label for="inputDataIdentidade">15d. Data da expedição</label>
                                                <input type="text" name="cad_data_identidade_aluno" class="form-control" id="inputDataIdentidade" placeholder="data de expedicao da identidade">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCertidaoCivil">16. Certidão Civil :</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="ModeloNovo">Modelo Novo</option>                                               
                                                <option value="ModeloAntigo">Modelo Antigo</option>
                                            </select> 

                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputTipoCertidao">16a. Tipo de certidão Civil :</label><br>

                                            <select class="form-control" name="cad_certidaocivil_aluno[]">
                                                <option value="nascimento">Certidão de nascimento</option>                                               
                                                <option value="casamento">Certidão de casamento</option>
                                            </select>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputTermoCertidao">16b. Número do termo</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputTermoCertidao" placeholder="digite o numero do termo">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputFolhaCertidao">16c. Folha</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputFolhaCertidao" placeholder="folha">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputLivro">16d. Livro</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputLivro" placeholder="livro">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputDatacertidao">16e. Data de emissão da certidão</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputDatacertidao" placeholder="data da certidao">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputUfcartorio">16f. UF do cartório</label>

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
                                                <label for="inputMunicartorio">16g. Município do cartório</label>
                                                <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputMunicartorio" placeholder="municipio do cartorio">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNomecartorio">16h. Nome do cartório</label>
                                        <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNomecartorio" placeholder="digite o nome do cartorio">

                                    </div>

                                    <div class="form-group">
                                        <label for="inputNumatricula">16i. Número da matricula (Registro civil - Certidão nova)</label>
                                        <input type="text" name="cad_certidaocivil_aluno[]" class="form-control" id="inputNumatricula" placeholder="numero da matricula">

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCpf">17. Número do CPF</label>
                                            <input type="text" name="cad_cpf_aluno" class="form-control" id="inputCpf" placeholder="digite o CPF">

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputPassaporte">18. Documento extrangeiro/Passaporte</label>
                                            <input type="text" name="cad_passaporte_aluno" class="form-control" id="inputPassaporte" placeholder="digite o passaporte">

                                        </div>
                                    </div><br>

                                    <div class="form-group">
                                        <label for="inputJustificativa">Justificativa da falta de informação de documento do aluno :</label><br>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_justificativa_aluno" id="inputJustificativa" value="alunonaopossuidocumento"> Aluno não possui documento
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_justificativa_aluno" id="inputJustificativa" value="escolanaopossuiinformaçãodedocumentodoaluno"> Escola não possui informação de documento do aluno
                                        </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputLocalizacao">19. Localização/Zona de residência :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacao" value="urbana"> Urbana
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_localizacao_aluno" id="inputLocalizacao" value="rural"> Rural
                                                </label>

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputCep">20. CEP</label>
                                                <input type="text" name="cad_cep_aluno" class="form-control" id="inputCep" placeholder="digite o CEP">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEndereco">21. Endereço</label>
                                                <input type="text" name="cad_endereco_aluno" class="form-control" id="inputEndereco" placeholder="digite o endereco">

                                            </div>

                                        </div>
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroendereco">22. Número</label>
                                                <input type="text" name="cad_numero_aluno" class="form-control" id="inputNumeroendereco" placeholder="numero">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoendereco">23. Complemento</label>
                                                <input type="text" name="cad_complemento_aluno" class="form-control" id="inputComplementoendereco" placeholder="complemento">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairro">24. Bairro</label>
                                                <input type="text" name="cad_bairro_aluno" class="form-control" id="inputBairro" placeholder="bairro">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="inputUf">25. UF</label>
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
                                                <label for="inputMunicipio">26. Município</label>
                                                <input type="text" name="cad_municipio_aluno" class="form-control" id="inputMunicipio" placeholder="municipio">

                                            </div>
                                        </div>
                                    </div>

                                    <label for="inputEscolarizacaoEspaco">27. Rececebe escolarização em outro espaço :</label><br>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspaco" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_espaco_aluno" id="inputEscolarizacaoEspaco" value="nao"> Não
                                    </label><br>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputTransporteescolar">28. Transporte escolar público :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteescolar" value="utiliza"> Utiliza
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transporte_aluno" id="inputTransporteescolar" value="naoutiliza"> Não Utiliza
                                            </label>

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputPoderpublico">28a. Poder público responsável pelo transporte :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderpublico" value="municipal"> Municipal
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_responsavel_transporte_aluno" id="inputPoderpublico" value="estadual"> Estadual
                                            </label>

                                        </div>
                                    </div><br>




                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputTipoveiculo">28b. Rodoviário :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Van/Kombi">Van/Kombi</option>                                               
                                                <option value="Micro - Ônibus">Micro - Ônibus</option>                                       
                                                <option value="Ônibus">Ônibus</option>                                       
                                                <option value="Bicicleta">Bicicleta</option>                                       
                                                <option value="Tração animal">Tração animal</option>                                       
                                                <option value="Outro tipo de veículo rodoviário">Outro tipo de veículo rodoviário</option>                                       
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputTipoveiculo">28c. Aquaviário/Embarcação
 :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Capacidade de até 5 alunos">Capacidade de até 5 alunos</option>                                               
                                                <option value="Capacidade entre 5 a 15 alunos">Capacidade entre 5 a 15 alunos</option>                                       
                                                <option value="Capacidade entre 15 a 35 alunos">Capacidade entre 15 a 35 alunos</option>                                       
                                                <option value="Capacidade acima de 35 alunos">Capacidade acima de 35 alunos</option>                                      
                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="inputTipoveiculo">28d. Ferroviário :</label><br>

                                            <select class="form-control" name="cad_tipo_transporte_aluno[]">
                                                <option value="">Selecione</option>                                               
                                                <option value="Trem/Metrô">Trem/Metrô</option>                                             
                                            </select>
                                        </div>
                                    </div><br>

                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>

                                </form>





                            </div>
                        </div>
                    </div>



                    <div class="tab-pane" id="cad_notas">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO NOTAS</div>
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>



                </div>
            </div>

        </div>
    </body>
</html>
