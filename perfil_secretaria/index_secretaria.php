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
                    <li><a class="glyphicon glyphicon-pencil" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>
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

                                <form action="" method="post">

                                    <div class="form-group">
                                        <label for="inputId">1. Identificação Unica</label>
                                        <input type="text" name="cad_id_aluno" class="form-control" id="inputId" placeholder="digite a identificação unica">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNome">2. Nome do aluno</label>
                                        <input type="text" name="cad_nome_aluno" class="form-control" id="inputNome" placeholder="digite nome do aluno">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="form-group">
                                                <label for="inputIdade">3. Idade</label>
                                                <input type="text" name="cad_idade_aluno" class="form-control" id="inputIdade" placeholder="digite a idade">
                                            </div> 

                                        </div>
                                        <div class="col-xs-6 col-md-4">

                                            <div class="form-group">
                                                <label for="inputNascimento">4. Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimento" placeholder="digite a data de nascimento">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexo">5. Sexo :</label><br>

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
                                                <label for="inputNIS">6. Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_aluno" class="form-control" id="inputNIS" placeholder="digite o NIS">
                                            </div>

                                        </div>
                                        <div class="col-xs-6 col-md-8">

                                            <div class="form-group">
                                                <label for="inputraca">7. Cor/Raça :</label><br>

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
                                        <label for="inputMae">8. Nome da mãe</label>
                                        <input type="text" name="cad_mae_aluno" class="form-control" id="inputMae" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPai">9. Nome do pai</label>
                                        <input type="text" name="cad_pai_aluno" class="form-control" id="inputPai" placeholder="digite nome do pai">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputnacionalidade">10. Nacionalidade do aluno :</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputnacionalidade" value="brasileira"> Brasileiro
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputnacionalidade" value="naturalizado"> Naturalizado
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_nacionalidade_aluno" id="inputnacionalidade" value="extrangeiro"> Extrangeiro
                                        </label>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputPaisorigem">11. País de origem</label>
                                                <input type="text" name="cad_paisorigem_aluno" class="form-control" id="inputPaisorigem" placeholder="digite o país de origem">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputUfdenascimento">12. UF de nascimento</label>
                                                <input type="text" name="cad_ufnasci_aluno" class="form-control" id="inputUfdenascimento" placeholder="UF de nascimento">
                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group">
                                                <label for="inputtelefonealuno">13. Telefone</label>
                                                <input type="text" name="cad_telefone_aluno" class="form-control" id="inputtelefonealuno" placeholder="telefone">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputMunidenascimento">14. Município de nascimento</label>
                                                <input type="text" name="cad_muninasci_aluno" class="form-control" id="inputMunidenascimento" placeholder="digite o município de nascimento">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputnecessidadeespecial">15. Necessidade Especial :</label><br>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_especial_aluno" id="inputnecessidadeespecial" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_especial_aluno" id="inputnecessidadeespecial" value="nao"> Não
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">

                                            <label for="inputDeficiencia">15a. Deficiência :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="cegueira"> Cegueira
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="baixavisao"> Baixa Visão
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="surdez"> Surdez
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="deficienciaauditiva"> Deficiência Auditiva
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="surdocegueira"> Surdocegueira
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="deficienciafisica"> Deficiência Física
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="deficienciaintelectual"> Deficiência Intelectual
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_deficiencia_aluno" id="inputDeficiencia" value="deficienciamultipla"> Deficiência Múltipla
                                            </label>                                            

                                        </div> 

                                        <div class="col-md-4">

                                            <label for="inputTranstornog">15b. Transtorno global do desenvolvimento :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transtornog_aluno" id="inputTranstornog" value="autismoinfantil"> Autismo Infantil
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transtornog_aluno" id="inputTranstornog" value="sindromedeasperger"> Síndrome de Asperger 
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transtornog_aluno" id="inputTranstornog" value="sindromederett"> Síndrome de Rett
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_transtornog_aluno" id="inputTranstornog" value="Transtornodesintegrativodainfancia"> Transtorno desintegrativo da infância
                                            </label>


                                        </div>
                                        <div class="col-md-4">

                                            <label for="inputTranstornog">15c. Altas Habilidades/Superdotação :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_superdotacao_aluno" id="inputTranstornog" value="superdotacao"> Altas Habilidades/Superdotação
                                            </label>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputNumerorg">16. Número da identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputNumerorg" placeholder="digite o numero da identidade">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementorg">16a. Complemento da identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputComplementorg" placeholder="digite o complemento da identidade">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputOrgaoemissor">16b. Orgão emissor da identidade</label>
                                                <input type="text" name="cad_orgaoemissor_aluno" class="form-control" id="inputOrgaoemissor" placeholder="digite o orgao emissor">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputUfrg">16c. UF da identidade</label>
                                                <input type="text" name="cad_ufrg_aluno" class="form-control" id="inputUfrg" placeholder="digite a UF da identidade">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputexpedicaorg">16d. Data da expedição</label>
                                                <input type="text" name="cad_expedicaorg_aluno" class="form-control" id="inputexpedicaorg" placeholder="data de expedicao da identidade">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCertidaocivil">17. Certidão Civil :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_certidaocivil_aluno" id="inputCertidaocivil" value="modeloantigo"> Modelo antigo
                                            </label>   
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_certidaocivil_aluno" id="inputCertidaocivil" value="modelonovo"> Modelo novo
                                            </label>   

                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputTipocertidaocivil">17a. Tipo de certidão Civil :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_tipocertidaocivil_aluno" id="inputTipocertidaocivil" value="casamento"> Certidão de casamento
                                            </label>   
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_tipocertidaocivil_aluno" id="inputTipocertidaocivil" value="nascimento"> Certidão de nascimento
                                            </label>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputnumerotermo">17b. Número do termo</label>
                                                <input type="text" name="cad_numerotermo_aluno" class="form-control" id="inputnumerotermo" placeholder="digite o numero do termo">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputFolha">17c. Folha</label>
                                                <input type="text" name="cad_folha_aluno" class="form-control" id="inputFolha" placeholder="folha">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputLivro">17d. Livro</label>
                                                <input type="text" name="cad_livro_aluno" class="form-control" id="inputLivro" placeholder="livro">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputDatacertidao">17e. Data de emissão da certidão</label>
                                                <input type="text" name="cad_dtcertidao_aluno" class="form-control" id="inputDatacertidao" placeholder="data da certidao">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputUfcartorio">17f. UF do cartório</label>
                                                <input type="text" name="cad_ufcartorio_aluno" class="form-control" id="inputUfcartorio" placeholder="uf do cartorio">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputMunicartorio">17g. Município do cartório</label>
                                                <input type="text" name="cad_municartorio_aluno" class="form-control" id="inputMunicartorio" placeholder="municipio do cartorio">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNomecartorio">17h. Nome do cartório</label>
                                        <input type="text" name="cad_nomecartorio_aluno" class="form-control" id="inputNomecartorio" placeholder="digite o nome do cartorio">

                                    </div>

                                    <div class="form-group">
                                        <label for="inputNumatricula">17i. Número da matricula (Registro civil - Certidão nova)</label>
                                        <input type="text" name="cad_numatricula_aluno" class="form-control" id="inputNumatricula" placeholder="numero da matricula">

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCpf">18. Número do CPF</label>
                                            <input type="text" name="cad_cpf_aluno" class="form-control" id="inputCpf" placeholder="digite o CPF">

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputPassaporte">19. Documento extrangeiro/Passaporte</label>
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
                                                <label for="inputLocalizacao">20. Localização/Zona de residência :</label><br>

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
                                                <label for="inputCep">21. CEP</label>
                                                <input type="text" name="cad_cep_aluno" class="form-control" id="inputCep" placeholder="digite o CEP">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEndereco">22. Endereço</label>
                                                <input type="text" name="cad_endereco_aluno" class="form-control" id="inputEndereco" placeholder="digite o endereco">

                                            </div>

                                        </div>
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroendereco">23. Número</label>
                                                <input type="text" name="cad_numeroendereco_aluno" class="form-control" id="inputNumeroendereco" placeholder="numero">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoendereco">24. Complemento</label>
                                                <input type="text" name="cad_complementoendereco_aluno" class="form-control" id="inputComplementoendereco" placeholder="complemento">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairro">25. Bairro</label>
                                                <input type="text" name="cad_bairro_aluno" class="form-control" id="inputBairro" placeholder="bairro">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputUf">26. UF</label>
                                                <input type="text" name="cad_uf_aluno" class="form-control" id="inputUf" placeholder="digite o UF">

                                            </div>

                                        </div>
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputMunicipio">27. Município</label>
                                                <input type="text" name="cad_municipio_aluno" class="form-control" id="inputMunicipio" placeholder="municipio">

                                            </div>

                                        </div>
                                    </div>

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
                                                <input type="radio" name="cad_poderpublico_aluno" id="inputPoderpublico" value="municipal"> Municipal
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_poderpublico_aluno" id="inputPoderpublico" value="estadual"> Estadual
                                            </label>

                                        </div>
                                    </div><br>




                                <div class="row">
                                    <div class="col-md-4">

                                        <label for="inputTipoveiculo">28b. Rodoviário :</label><br>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="vankombi"> Van/WK Kombi
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="microonibus"> Micro-Ônibus 
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="onibus"> Ônibus
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="bicicleta"> Bicicleta
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="tracao animal"> Tração animal
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="outrotipodeveiculo"> Outro tipo de veículo rodoviário
                                        </label>

                                    </div>

                                    <div class="col-md-4">

                                        <label for="inputTipoveiculo">28c. Aquaviário/Embarcação :</label><br>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="5alunos"> Capacidade de até 5 alunos
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="5a15alunos"> Capacidade entre 5 a 15 alunos 
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="15a35alunos"> Capacidade entre 15 a 35 alunos
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="acimade35alunos"> Capacidade acima de 35 alunos
                                        </label>

                                        
                                    </div>

                                    <div class="col-md-4">

                                        <label for="inputTipoveiculo">28d. Ferroviário :</label><br>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_tipoveiculo_aluno" id="inputTipoveiculo" value="tremmetro"> Trem/Metrô
                                        </label>

                                    </div>
                                </div>

                                </form><br>



                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>


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
