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