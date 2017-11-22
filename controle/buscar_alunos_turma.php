<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<?php
session_start();

include_once '../classes/Disciplinaealuno.php';

$id_escola = $_SESSION['id_escola'];
$count = 1;

$turma_selecionada = isset($_POST['turma']) ? $_POST['turma'] : '';

$alunos_turma = new Disciplinaealuno();
$mostrar_alunos_turma = $alunos_turma ->ler_alunos_turma($turma_selecionada, $id_escola);
?>

<section class="panel col-lg-9">
    <?php 
    if (count($mostrar_alunos_turma)>0) { ?>
    <table class="table table-condensed">
        <tbody>
            <tr class="fontsize">
                <th>Nº</th>
                <th>Aluno(a)</th>
                <th>Sexo</th>
                <th>Data Nasc.</th>
                <th>Mãe</th>
                <th>Deficiência</th>
                <th>Transporte Escolar</th>
            </tr>
            <?php
            foreach ($mostrar_alunos_turma as $linha_aluno_turma) {
                ?>
                <tr tr class="fontsize">
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $linha_aluno_turma->nome_aluno; ?></td>
                    <td><?php echo $linha_aluno_turma->sexo_aluno; ?></td>
                    <td><?php echo $linha_aluno_turma->nascimento_aluno; ?></td>
                    <td><?php echo $linha_aluno_turma->mae_aluno; ?></td>
                    <td><?php echo $linha_aluno_turma->deficiencia_aluno; ?></td>
                    <td><?php echo $linha_aluno_turma->transporte_aluno; ?></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
<?php } ?>

</section>
