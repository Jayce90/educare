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
                                        <label for="inputId">Identificação Unica</label>
                                        <input type="text" name="cad_id_aluno" class="form-control" id="inputId" placeholder="digite a identificação unica">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNome">Nome do aluno</label>
                                        <input type="text" name="cad_nome_aluno" class="form-control" id="inputNome" placeholder="digite nome do aluno">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-6 col-md-4">
                                            <div class="form-group">
                                                <label for="inputIdade">Idade</label>
                                                <input type="text" name="cad_idade_aluno" class="form-control" id="inputIdade" placeholder="digite a idade">
                                            </div> 

                                        </div>
                                        <div class="col-xs-6 col-md-4">

                                            <div class="form-group">
                                                <label for="inputNascimento">Data de Nascimento</label>
                                                <input type="text" name="cad_nasc_aluno" class="form-control" id="inputNascimento" placeholder="digite a data de nascimento">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-md-4">

                                            <div class="form-group">
                                                <label for="inputSexo">Sexo :</label><br>

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
                                                <label for="inputNIS">Número de identificação Social (NIS)</label>
                                                <input type="text" name="cad_nis_aluno" class="form-control" id="inputNIS" placeholder="digite o NIS">
                                            </div>

                                        </div>
                                        <div class="col-xs-6 col-md-8">

                                            <div class="form-group">
                                                <label for="inputraca">Cor/Raça :</label><br>

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
                                        <label for="inputMae">Nome da mãe</label>
                                        <input type="text" name="cad_mae_aluno" class="form-control" id="inputMae" placeholder="digite nome da mae">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPai">Nome do pai</label>
                                        <input type="text" name="cad_pai_aluno" class="form-control" id="inputPai" placeholder="digite nome do pai">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputnacionalidade">Nacionalidade do aluno :</label>

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
                                                <label for="inputPaisorigem">País de origem</label>
                                                <input type="text" name="cad_paisorigem_aluno" class="form-control" id="inputPaisorigem" placeholder="digite o país de origem">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputUfdenascimento">UF de nascimento</label>
                                                <input type="text" name="cad_ufnasci_aluno" class="form-control" id="inputUfdenascimento" placeholder="digite a UF de nascimento">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputMunidenascimento">Município de nascimento</label>
                                                <input type="text" name="cad_muninasci_aluno" class="form-control" id="inputMunidenascimento" placeholder="digite o município de nascimento">
                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputnecessidadeespecial">Necessidade Especial :</label><br>

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

                                            <label for="inputDeficiencia">Deficiência :</label><br>

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

                                            <label for="inputTranstornog">Transtorno global do desenvolvimento :</label><br>

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

                                            <label for="inputTranstornog">Altas Habilidades/Superdotação :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_superdotacao_aluno" id="inputTranstornog" value="superdotacao"> Altas Habilidades/Superdotação
                                            </label>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputNumerorg">Número da identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputNumerorg" placeholder="digite o numero da identidade">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementorg">Complemento da identidade</label>
                                                <input type="text" name="cad_identidade_aluno" class="form-control" id="inputComplementorg" placeholder="digite o complemento da identidade">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputOrgaoemissor">Orgão emissor da identidade</label>
                                                <input type="text" name="cad_orgaoemissor_aluno" class="form-control" id="inputOrgaoemissor" placeholder="digite o orgao emissor">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputUfrg">UF da identidade</label>
                                                <input type="text" name="cad_ufrg_aluno" class="form-control" id="inputUfrg" placeholder="digite a UF da identidade">
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputexpedicaorg">Data da expedição</label>
                                                <input type="text" name="cad_expedicaorg_aluno" class="form-control" id="inputexpedicaorg" placeholder="data de expedicao da identidade">
                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCertidaocivil">Certidão Civil :</label><br>

                                            <label class="radio-inline">
                                                <input type="radio" name="cad_certidaocivil_aluno" id="inputCertidaocivil" value="modeloantigo"> Modelo antigo
                                            </label>   
                                            <label class="radio-inline">
                                                <input type="radio" name="cad_certidaocivil_aluno" id="inputCertidaocivil" value="modelonovo"> Modelo novo
                                            </label>   

                                        </div>

                                        <div class="col-md-6">

                                            <label for="inputTipocertidaocivil">Tipo de certidão Civil :</label><br>

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
                                                <label for="inputnumerotermo">Número do termo</label>
                                                <input type="text" name="cad_numerotermo_aluno" class="form-control" id="inputnumerotermo" placeholder="digite o numero do termo">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputFolha">Folha</label>
                                                <input type="text" name="cad_folha_aluno" class="form-control" id="inputFolha" placeholder="folha">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputLivro">Livro</label>
                                                <input type="text" name="cad_livro_aluno" class="form-control" id="inputLivro" placeholder="livro">

                                            </div>

                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputDatacertidao">Data de emissão da certidão</label>
                                                <input type="text" name="cad_dtcertidao_aluno" class="form-control" id="inputDatacertidao" placeholder="data da certidao">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputUfcartorio">UF do cartório</label>
                                                <input type="text" name="cad_ufcartorio_aluno" class="form-control" id="inputUfcartorio" placeholder="uf do cartorio">

                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inputMunicartorio">Município do cartório</label>
                                                <input type="text" name="cad_municartorio_aluno" class="form-control" id="inputMunicartorio" placeholder="municipio do cartorio">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNomecartorio">Nome do cartório</label>
                                        <input type="text" name="cad_nomecartorio_aluno" class="form-control" id="inputNomecartorio" placeholder="digite o nome do cartorio">

                                    </div>

                                    <div class="form-group">
                                        <label for="inputNumatricula">Número da matricula (Registro civil - Certidão nova)</label>
                                        <input type="text" name="cad_numatricula_aluno" class="form-control" id="inputNumatricula" placeholder="numero da matricula">

                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">

                                            <label for="inputCpf">Número do CPF</label>
                                            <input type="text" name="cad_cpf_aluno" class="form-control" id="inputCpf" placeholder="digite o CPF">

                                        </div>
                                        <div class="col-md-6">

                                            <label for="inputPassaporte">Documento extrangeiro/Passaporte</label>
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
                                                <label for="inputLocalizacao">Localização/Zona de residência :</label><br>

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
                                                <label for="inputCep">C E P</label>
                                                <input type="text" name="cad_cep_aluno" class="form-control" id="inputCep" placeholder="digite o C E P">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputEndereco">Endereço</label>
                                                <input type="text" name="cad_endereco_aluno" class="form-control" id="inputEndereco" placeholder="digite o endereco">

                                            </div>

                                        </div>
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputNumeroendereco">Número</label>
                                                <input type="text" name="cad_numeroendereco_aluno" class="form-control" id="inputNumeroendereco" placeholder="numero">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputComplementoendereco">Complemento</label>
                                                <input type="text" name="cad_complementoendereco_aluno" class="form-control" id="inputComplementoendereco" placeholder="complemento">

                                            </div>

                                        </div>
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="inputBairro">Bairro</label>
                                                <input type="text" name="cad_bairro_aluno" class="form-control" id="inputBairro" placeholder="bairro">

                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">

                                            <div class="form-group">
                                                <label for="inputUf">U F</label>
                                                <input type="text" name="cad_uf_aluno" class="form-control" id="inputUf" placeholder="digite o U F">

                                            </div>

                                        </div>
                                        <div class="col-md-10">

                                            <div class="form-group">
                                                <label for="inputMunicipio">Município</label>
                                                <input type="text" name="cad_municipio_aluno" class="form-control" id="inputMunicipio" placeholder="municipio">

                                            </div>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="inputSerie">Serie</label>
                                        <input type="text" name="cad_serie_aluno" class="form-control" id="inputSerie" placeholder="digite a serie">
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="inputTransporteescolar">Transporte Escolar :</label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_transporte_aluno" id="inputTransporteescolar" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_transporte_aluno" id="inputTransporteescolar" value="nao"> Não
                                                </label>

                                            </div>

                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="inputRepetente">Repetente :</label>

                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_repetente_aluno" id="inputRepetente" value="sim"> Sim
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="cad_repetente_aluno" id="inputRepetente" value="nao"> Não
                                                </label>

                                            </div>

                                        </div>
                                    </div>






                                    <div class="form-group">
                                        <label for="inputProcedencia">Procedencia</label>
                                        <input type="text" name="cad_procedencia_aluno" class="form-control" id="inputProcedencia" placeholder="procedencia">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEscolarizacao">Recebe escolarização em Outro espaço :</label>

                                        <label class="radio-inline">
                                            <input type="radio" name="cad_escolarizacao_aluno" id="inputEscolarizacao" value="sim"> Sim
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cad_escolarizacao_aluno" id="inputEscolarizacao" value="nao"> Não
                                        </label>

                                    </div>



                                    <button type="submit" class="btn btn-default">Enviar</button>
                                </form>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="cad_turma">
                        <div class="panel panel-primary">
                            <div class="panel-heading">CADASTRO DA TURMA</div>
                            <div class="panel-body box_conteudo">

                                <div class="form-group">
                                    <label for="inputTurma">Nome da Turma</label>
                                    <input type="text" name="cad_nome_turma" class="form-control" id="inputTurma" placeholder="digite nome da turma">
                                </div>

                                <div class="form-group">
                                    <label for="inputFrequencia">Frequencia da turma</label>
                                    <input type="text" name="cad_frequencia_turma" class="form-control" id="inputFrequencia" placeholder="digite a frequencia da turma">
                                </div>

                                <div class="form-group">
                                    <label for="inputCodigodaturma">Codigo da turma</label>
                                    <input type="text" name="cad_codigo_turma" class="form-control" id="inputCodigodaturma" placeholder="digite o cadigo da turma">
                                </div>

                                <div class="form-group">
                                    <label for="inputEscolarizacao">Recebe escolarização em Outro espaço :</label>

                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_aluno" id="inputEscolarizacao" value="sim"> Sim
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="cad_escolarizacao_aluno" id="inputEscolarizacao" value="nao"> Não
                                    </label>

                                </div>

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
