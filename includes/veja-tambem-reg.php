<?php 

   $palavras_chave_gs = array( 
       'asd',
   );
?>

<section class="veja-tambem">
<h5>Veja Também</h5>
   <div class="flex">
   <?php
       echo $borg->listaThumbs($palavras_chave_gs, array(
           "random" => true,
           "limit" => 18,
           "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-2",
           "title_tag" => "h6",
           "folder_img" => "imagens/imagens-reg/"
       ), true);
   ?>
   </div>
</section>