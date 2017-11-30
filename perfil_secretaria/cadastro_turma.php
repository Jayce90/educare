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

<!-- Navigation Buttons -->

<li><a class="glyphicon glyphicon-book" href="#cad_turma" data-toggle="pill"> Cadastro Turma</a></li>