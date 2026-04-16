<div class="lista-galeria-fancy flex">
    <?php
        $path = "imagens/empresa/";
        $diretorio = dir($path);
        
        while($arquivo = $diretorio -> read()){
            if($arquivo == '.' || $arquivo == '..') continue;
            ?>
                <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3">
                    <a href="<?php echo $url;?><?php echo $path.$arquivo;?>" title="Galeria Imagens" data-fancybox-group="empresa">
                        <img src="<?php echo $url;?><?php echo $path.$arquivo;?>" alt="Galeria Imagens" title="Galeria Imagens" class="img-responsive">
                    </a>
                </div>
            <?php
        }
        $diretorio -> close();
    ?>          
</div>