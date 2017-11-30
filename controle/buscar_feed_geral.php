<?php
include_once '../classes/Feed.php';

$feed = new Feed();

$mostrar_feed = $feed->ler_todos_feed();
?>

<section class="col-lg-12">
    <?php
    if (count($mostrar_feed) > 0) {

        foreach ($mostrar_feed as $linha_feed) {
            ?>

            <div class="media">
                <div class="media-body">
                    <h2 class="media-heading"><?php echo $linha_feed->titulo_feed; ?></h2>
                    <h3><?php echo $linha_feed->texto_feed; ?><br></h3>
                    <h6><small><?php echo $linha_feed->data_feed; ?></small></h6>
                </div>
            </div>

            <hr>

            <?php
        }
    }
    ?>

    <a href="#" id="ultima"></a>
</section>