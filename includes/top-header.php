<div class="top-header">
    <div class="container">
        <div class="flexBetween">
            <ul class="gap-5 jus-left contatos-top-header">
                <!-- <li><i class="fas fa-map-marker-alt"></i> <a data-click-track="Endereço - Barra do Topo" href="<#?php echo $unidades[1]['link_maps']; ?>" title="Acesse no Maps" target="_blank">Acesse no Maps</a></li> -->
                <!-- <li><i class="fas fa-map-marker-alt"></i> <a data-click-track="Endereço - Barra do Topo" href="<?php echo $unidades[1]['link_maps']; ?>" title="Acesse no Maps" target="_blank"><?php echo $unidades[1]['rua'].' - '.$unidades[1]['bairro'].' - '.$unidades[1]['cidade'].' / '.$unidades[1]['uf']?></a></li> -->
                <li><i class="fas fa-phone-alt"></i> <a data-click-track="Telefone - Barra do Topo" title="Clique e ligue" href="tel:<?php echo $unidades[1]['link_tel']; ?>"> <?php echo '('.$unidades[1]['ddd'].') '.$unidades[1]['telefone']; ?></a></li>
                <li><i class="fas fa-envelope"></i> <a data-click-track="E-mail - Barra do Topo" title="E-mail" href="mailto:<?php echo $emailContato;?>"><?php echo $emailContato;?></a></li>
            </ul>
            <ul class="gap-5 jus-right social-top">
                <li><a data-click-track="Facebook - Barra do Topo" href="https://www.facebook.com/<?php echo $facebook; ?>" title="Facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a data-click-track="Instagram - Barra do Topo" href="https://www.instagram.com/<?php echo $instagram; ?>" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a data-click-track="LinkedIn - Barra do Topo" href="https://www.linkedin.com/company/<?php echo $linkedin; ?>" title="LinkedIn" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a data-click-track="YouTube - Barra do Topo" href="https://www.youtube.com/channel/<?php echo $youtube; ?>" title="YouTube" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                <!-- <li><a data-click-track="Twitter - Barra do Topo" href="https://x.com/<?php echo $twitter; ?>" title="Twitter" target="_blank"><i class="fa-brands fa-x"></i></a></li> -->
            </ul>
        </div>
    </div>
</div>