<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<?php
session_start();

include_once '../classes/Disciplinaealuno.php';

$id_escola = $_SESSION['id_escola'];
$count = 1;

$id_disciplina = isset($_POST['disciplina']) ? $_POST['disciplina'] : '';
$id_turma = isset($_POST['turma']) ? $_POST['turma'] : '';

$alunos_turma = new Disciplinaealuno();
$mostrar_alunos_turma = $alunos_turma ->ler_alunos_disciplina($id_disciplina, $id_turma, $id_escola);
?>

<section class="panel col-lg-9">
    <?php 
    if (count($mostrar_alunos_turma)>0) { ?>
    <table>
        <tbody>
            <tr>
                <th>Nº</th>
                <th>Aluno(a)</th>
            </tr>
            <?php
            foreach ($mostrar_alunos_turma as $linha_aluno_turma) {
                ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $linha_aluno_turma->nome_aluno; ?></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
<?php } ?>

</section>
