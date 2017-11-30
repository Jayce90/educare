<?php
include_once '../classes/Chat.php';

$chat = new Chat();

$mostrar_msg = $chat->ler_todas_msg();
?>

<section class="col-lg-12">
    <?php
    if (count($mostrar_msg) > 0) {

        foreach ($mostrar_msg as $linha_msg) {
            ?>

            <div class="media">
                <div class="media-left media-middle">
                    <div class="user">
                        <img id="user" src="../imagens/avatar/<?php echo $linha_msg->avatar_chat; ?>" alt="..." width="80">
                    </div>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $linha_msg->nome_usuario; ?></h4>
                    <span><?php echo $linha_msg->data_chat; ?></span>
                    <h3><?php echo $linha_msg->texto_chat; ?><br></h3>
                </div>
            </div>
            <hr>

            <?php
        }
    }
    ?>
           
    <a href="#" id="ultima"></a>
</section>