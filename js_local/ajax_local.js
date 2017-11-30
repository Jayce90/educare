function listar_alunosTurmas(turma)
{
    var page = "../controle/buscar_alunos_turma.php";
    $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function () {
                    $("#dados").html("carregando...");
                },
                data: {turma: turma},
                success: function (msg)
                {
                    $("#dados").html(msg);
                }
            });
}

function listar_alunosDisciplina(turma, disciplina)
{
    var page = "../controle/buscar_alunos_disciplina.php";
    $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                beforeSend: function () {
                    $("#dados_lista_aluno").html("carregando...");
                },
                data: {turma: turma,
                    disciplina: disciplina},
                success: function (msg)
                {
                    $("#dados_lista_aluno").html(msg);
                }
            });
}

function mensagem_chat_geral()
{
    var texto_chat = chatForm.texto_chat.value;
    var perfil_chat = chatForm.pertil_chat.value;

    var page = "../controle/inserindo_chat.php";
    $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                data: {texto_chat: texto_chat,
                    perfil_chat: perfil_chat}
            });
    $('#chatForm').each(function () {
        this.reset();
    });
    ler_msg();
}

function ler_msg()
{

    var page = "../controle/buscar_msg_geral.php";
    $.ajax
            ({
                type: 'GET',
                dataType: 'html',
                url: page,
                beforeSend: function () {
                    $("#msg_geral").html("carregando...");
                },
                success: function (msg)
                {
                    $("#msg_geral").html(msg);
                }
            });
}

function adicionar_feed()
{
    var titulo_feed = feedForm.titulo_feed.value;
    var texto_feed = feedForm.texto_feed.value;
    var perfil_feed = feedForm.pertil_feed.value;

    var page = "../controle/inserindo_feed.php";
    $.ajax
            ({
                type: 'POST',
                dataType: 'html',
                url: page,
                data: {titulo_feed: titulo_feed,
                    texto_feed: texto_feed,
                    perfil_feed: perfil_feed}
            });
    $('#feedForm').each(function () {
        this.reset();
    });
    ler_feed();
}

function ler_feed()
{

    var page = "../controle/buscar_feed_geral.php";
    $.ajax
            ({
                type: 'GET',
                dataType: 'html',
                url: page,
                beforeSend: function () {
                    $("#msg_geral").html("carregando...");
                },
                success: function (msg)
                {
                    $("#feed_geral").html(msg);
                }
            });
}