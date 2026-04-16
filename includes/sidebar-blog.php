<div class="sidebar-cta-box">
    <p class="sidebar-cta-title">Precisa de assessoria contábil?</p>
    <p>Fale agora com um especialista do Grupo Keeper e descubra como podemos ajudar sua empresa a crescer com segurança.</p>
    <a class="sidebar-cta-btn" data-click-track="WhatsApp - Sidebar - Blog" href="<?php echo $unidades[1]['link_wpp']; ?>" title="Falar com especialista pelo WhatsApp" target="_blank">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Falar com especialista
    </a>
    <p class="sidebar-phone">ou ligue: <a data-click-track="Telefone - Sidebar - Blog" href="tel:<?php echo $unidades[1]['link_tel']; ?>" title="Clique e ligue">(<?php echo $unidades[1]["ddd"]; ?>) <?php echo $unidades[1]["telefone"]; ?></a></p>
</div>
<div class="sidebar-main">
    <h3><a href="<?php echo $url; ?>blog/">Mais Artigos</a></h3>
    <ul>
        <?php
            echo $borg->subMenuBlog($paginasBlog, null, $tipoLista, $usarImagemBlogWebp);
        ?>
    </ul>
</div>
