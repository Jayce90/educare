function validar_login() {
    var login_usuario = loginUsuario.apelido_login.value;
    var senha_usuario = loginUsuario.senha_login.value;
    

    if (login_usuario === "") {
        alert('Preencha o campo APELIDO');
        loginUsuario.apelido_login.focus();
        return false;
    }
    if (senha_usuario === "") {
        alert('Preencha o campo SENHA');
        loginUsuario.senha_login.focus();
        return false;
    }
}

function validar_cadastro_aluno() {
    var nome_aluno = cadastroAluno.cad_nome_aluno.value;
    var nascimento_aluno = cadastroAluno.cad_nasc_aluno.value;
    var mae_aluno = cadastroAluno.cad_mae_aluno.value;
    

    if (nome_aluno == "") {
        alert('Preencha o campo com o NOME do aluno');
        cadastroAluno.cad_nome_aluno.focus();
        return false;
    }
    if (nascimento_aluno == "") {
        alert('Preencha o campo com a DATA DE NASCIMENTO do Aluno');
        cadastroAluno.cad_nasc_aluno.focus();
        return false;
    }
    if (mae_aluno == "") {
        alert('Preencha o campo com o NOME DA MÃE do Aluno');
        cadastroAluno.cad_mae_aluno.focus();
        return false;
    }
}

function validar_cadastro_educador() {
    var nome_educador = cadastroEducador.cad_nome_professor.value;
    var cpf_educador = cadastroEducador.cad_cpf_professor.value;
    var fone_educador = cadastroEducador.cad_fone_professor.value;
    

    if (nome_educador == "") {
        alert('Preencha o campo com o NOME do Educador');
        cadastroEducador.cad_nome_professor.focus();
        return false;
    }
    if (cpf_educador == "") {
        alert('Preencha o campo com CPF do Educador');
        cadastroEducador.cad_cpf_professor.focus();
        return false;
    }
    if (fone_educador == "") {
        alert('Preencha o campo com o TELEFONE do Educador');
        cadastroEducador.cad_fone_professor.focus();
        return false;
    }
}

function validar_cadastro_disciplina() {
    var nome_disciplina = cadastroDisciplina.cad_nome_disciplina.value;
    var cargaHoraria_disciplina = cadastroDisciplina.cad_carga_horaria_disciplina.value;
    var nivel_disciplina = cadastroDisciplina.cad_nivel_disciplina.value;
    var etapa_disciplina = cadastroDisciplina.cad_etapa_disciplina.value;
    var educador_disciplina = cadastroDisciplina.cad_professor_disciplina.value;
    var turma_disciplina = cadastroDisciplina.cad_turma_disciplina.value;
    

    if (nome_disciplina === "") {
        alert('Preencha o campo com o NOME da Disciplina');
        cadastroDisciplina.cad_nome_disciplina.focus();
        return false;
    }
    if (cargaHoraria_disciplina === "") {
        alert('Preencha o campo com a CARGA HORÁRIA da Disciplina');
        cadastroDisciplina.cad_carga_horaria_disciplina.focus();
        return false;
    }
    if (nivel_disciplina === "") {
        alert('Preencha o campo com o NÍVEL da Disciplina');
        cadastroDisciplina.cad_nivel_disciplina.focus();
        return false;
    }
    if (etapa_disciplina === "") {
        alert('Preencha o campo com a ETAPA da Disciplina');
        cadastroDisciplina.cad_etapa_disciplina.focus();
        return false;
    }
    if (educador_disciplina === "") {
        alert('Preencha o campo com o EDUCADOR da Disciplina');
        cadastroDisciplina.cad_professor_disciplina.focus();
        return false;
    }
    if (turma_disciplina === "") {
        alert('Preencha o campo com a ETAPA da Disciplina');
        cadastroDisciplina.cad_turma_disciplina.focus();
        return false;
    }
}

function validar_usuario_pendente() {
    var usuario_pendente = usuariosPendentes.id_aprovado.value;
    

    if (usuario_pendente === "") {
        alert('Selecione um usuário!');
        usuariosPendentes.id_aprovado.focus();
        return false;
    }
}

function validar_vincular_educador() {
    var educador_lotado = lotandoEducador.vincular_id_educador.value;
    var ano_lotado = lotandoEducador.ano_vincular_educador.value;
    var cargaHoraria_lotado = lotandoEducador.vincular_cargaHoraria_educador.value;
    

    if (educador_lotado === "") {
        alert('Selecione um Educador!');
        lotandoEducador.vincular_id_educador.focus();
        return false;
    }
    if (ano_lotado === "") {
        alert('Selecione um Ano!');
        lotandoEducador.ano_vincular_educador.focus();
        return false;
    }
    if (cargaHoraria_lotado === "") {
        alert('Preencha o campo com a CARGA HORARIA do Educador');
        lotandoEducador.ano_vincular_educador.focus();
        return false;
    }
}

function validar_vinculo_aluno() {
    var aluno_vinculo = vincularAluno.vincular_id_aluno.value;
    

    if (aluno_vinculo === "") {
        alert('Selecione um Aluno(a)!');
        vincularAluno.vincular_id_aluno.focus();
        return false;
    }
}