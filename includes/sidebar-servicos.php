<div class="sidebar-cta-box">
    <p class="sidebar-cta-title">Solicite um orçamento</p>
    <p>Entre em contato com nossos consultores e descubra a solução ideal para a sua empresa.</p>
    <a class="sidebar-cta-btn" data-click-track="WhatsApp - Sidebar - Serviços" href="<?php echo $unidades[1]['link_wpp']; ?>" title="Falar com especialista pelo WhatsApp" target="_blank">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> Falar com especialista
    </a>
    <p class="sidebar-phone">ou ligue: (<?php echo $unidades[1]["ddd"]; ?>) <?php echo $unidades[1]["telefone"]; ?></p>
</div>
<div class="sidebar-main">
    <h3><a href="<?php echo $url; ?>servicos/">Mais Serviços</a></h3>
    <ul>
        <?php
            echo $borg->subMenuPerson($paginas, null, $tipoLista, $usarImagemBlogWebp, 'servicos');
        ?>
    </ul>
</div>
