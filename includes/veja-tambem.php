<section class="veja-tambem">
    <h5>Veja Também</h5>
    <div class="row container-veja-tambem">
        <?php 
            echo $borg->listaThumbs($palavras_chave, array(
                    "random" => true,
                    "limit" => 10,
                    "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-3",
                    "title_tag" => "h6",
                    "extension" => 'jpg'
                ), 
                $usarListaThumbSemWeb
            );
        ?>
    </div>
</section>