<?php
session_start();
require_once '../classes/Escola.php';

$escolas = New Escola();
$mostrar_escolas = $escolas->ler_todos("escola");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultados</title>
    </head>
    <body>

        <fieldset>
            <form action="dajsdhaksjdha" method="post">
                <label>Escola</label>

                <select name="escola">
                    <?php
                    foreach ($mostrar_escolas as $linha_escola) {
                        echo "<option value='. $linha_escola->id_escola .'>INEP: " . $linha_escola->inep_escola . "</option>"
                        ;
                    }
                    ?>
                </select><br>
                <input>
            </form>
        </fieldset>

        <hr>

        <table>
            <tr>
                <th data-field="teste">INEP</th>
                <th data-field="teste">Diretor(a)</th>
                <th data-field="teste">Escola</th>
                <th data-field="teste">Localizacao</th>
                <th data-field="teste">Situação</th>
            </tr>

            <tbody> 
                <?php
                foreach ($mostrar_escolas as $linha_escola) {
                    echo "<tr>"
                    . "<form action='mostrardados.php' method='post'>" .
                    "<td>" . $linha_escola->inep_escola . "</td>" .
                    "<td>" . $linha_escola->nome_gestor_escola . "</td>" .
                    "<td>" . $linha_escola->nome_escola . "</td>" .
                    "<td>" . $linha_escola->localizacao_escola . "</td>" .
                    "<td>" . $linha_escola->situacao_escola . "</td>" .
                    "<td> <input type='hidden' name='escola' value=". $linha_escola->id_escola .">"
                            . "<input type='submit' value='ver'></td>" .
                    "</form></tr>";
                }
                ?>
            </tbody>
        </table>
        
    </body>
</html>
