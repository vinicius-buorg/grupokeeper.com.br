
<footer>
    <div class="footer-main">
        <div class="container">
            <div class="footer-grid">

                <!-- Marca + descrição + social -->
                <div class="footer-col footer-col-brand">
                    <a href="<?php echo $url; ?>" title="<?php echo $nome_empresa; ?>" class="footer-logo-link">
                        <img width="200" height="60" loading="lazy"
                             src="<?php echo $url; ?>imagens/logo-footer.webp"
                             alt="<?php echo $nome_empresa; ?>"
                             title="<?php echo $nome_empresa; ?>"
                             class="footer-logo">
                    </a>
                    <p class="footer-desc">Há 30 anos transformamos a gestão de empresas com metodologia exclusiva — do planejamento tributário à blindagem patrimonial, somos parceiros estratégicos do seu negócio.</p>
                    <ul class="footer-social">
                        <li><a data-click-track="Facebook - Rodapé" href="https://www.facebook.com/<?php echo $facebook; ?>" title="Facebook" target="_blank" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a data-click-track="Instagram - Rodapé" href="https://www.instagram.com/<?php echo $instagram; ?>" title="Instagram" target="_blank" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a data-click-track="LinkedIn - Rodapé" href="https://www.linkedin.com/company/<?php echo $linkedin; ?>" title="LinkedIn" target="_blank" aria-label="LinkedIn"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a data-click-track="YouTube - Rodapé" href="https://www.youtube.com/channel/<?php echo $youtube; ?>" title="YouTube" target="_blank" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>

                <!-- Menu -->
                <div class="footer-col">
                    <h4 class="footer-heading">Menu</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo $url; ?>" title="Home">Home</a></li>
                        <li><a href="<?php echo $url; ?>quem-somos" title="Quem Somos">Quem Somos</a></li>
                        <li><a href="<?php echo $url; ?>servicos/contabil-fiscal" title="Serviços">Serviços</a></li>
                        <li><a href="<?php echo $url; ?>ferramenta" title="Ferramentas">Ferramentas</a></li>
                        <li><a href="<?php echo $url; ?>blog" title="Blog">Blog</a></li>
                        <li><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
                        <li><a href="<?php echo $url; ?>mapa-site" title="Mapa do Site">Mapa do Site</a></li>
                    </ul>
                </div>

                <!-- Especialidades -->
                <div class="footer-col">
                    <h4 class="footer-heading">Especialidades</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/escolas" title="Escolas">Escolas</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/comercio" title="Comércio">Comércio</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/prestadores-de-servicos" title="Serviços">Prestadores de Serviço</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/industria" title="Indústrias">Indústrias</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/startups" title="Startups">Startups</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/e-commerce" title="E-commerce">E-commerce</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/restaurantes" title="Restaurantes">Restaurantes</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/medicos" title="Médicos">Médicos</a></li>
                        <li><a href="<?php echo $url; ?>contabilidade-especializada/pessoas-fisicas" title="Pessoas Físicas">Pessoas Físicas</a></li>
                    </ul>
                </div>

                <!-- Contato + Localização -->
                <div class="footer-col">
                    <h4 class="footer-heading">Contato</h4>
                    <ul class="footer-links footer-contact">
                        <li>
                            <i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                            <a data-click-track="Telefone - Rodapé" href="<?php echo $unidades[1]['link_tel']; ?>" title="Ligue agora"><?php echo $unidades[1]['tel']; ?></a>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
                            <a data-click-track="WhatsApp - Rodapé" href="<?php echo $unidades[1]['link_wpp']; ?>" title="WhatsApp" target="_blank"><?php echo $unidades[1]['wpp']; ?></a>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                            <a data-click-track="E-mail - Rodapé" href="mailto:<?php echo $emailContato; ?>" title="E-mail"><?php echo $emailContato; ?></a>
                        </li>
                    </ul>
                    <h4 class="footer-heading" style="margin-top:1.4rem;">Localização</h4>
                    <ul class="footer-links footer-contact">
                        <li>
                            <i class="fa-regular fa-clock" aria-hidden="true"></i>
                            <span>Segunda a Sexta — 08h às 17h</span>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                            <a href="<?php echo $unidades[1]['link_maps']; ?>" title="Ver no Google Maps" target="_blank">
                                <?php echo $unidades[1]['rua'] . ' — ' . $unidades[1]['bairro'] . ', ' . $unidades[1]['cidade'] . '/' . $unidades[1]['uf']; ?>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Barra inferior -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <span class="footer-copy">&copy; <?php echo date('Y'); ?> <?php echo $nome_empresa; ?> · Todos os direitos reservados</span>
                <div class="footer-bottom-selos">
                    <a rel="nofollow" href="<?php echo $url; ?>mapa-site" target="_blank" title="Mapa do Site">
                        <i class="fas fa-sitemap"></i>
                    </a>
                    <a rel="follow" href="https://www.buscaorganica.com.br" target="_blank" title="Busca Orgânica">
                        <img style="display:none;" width="111" height="26" loading="lazy" src="https://www.buscaorganica.com.br/ast/img/selo-busca-organica.png" alt="Busca Orgânica" title="Busca Orgânica">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/whats-button.php'); ?>

    <ul class="menu-footer-mobile">
        <li>
            <a data-click-track="Telefone - Mobile - Rodapé" href="tel:<?php echo $unidades[1]["ddd"] . $unidades[1]["telefone"]; ?>" class="mm-call" title="Ligue"><i class="fa fa-phone-alt"></i></a>
        </li>
        <li>
            <a data-click-track="WhatsApp - Mobile - Rodapé" href="https://wa.me//<?php echo $whatsapp_botao; ?>?text=Olá,%20vim%20do%20site%20e%20preciso%20de%20informações!" class="mm-whatsapp" title="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </li>
        <li>
            <a data-click-track="E-mail - Mobile - Rodapé" href="mailto:<?php echo $emailContato; ?>" class="mm-email" title="E-mail"><i class="fa fa-envelope"></i></a>
        </li>
        <li>
            <button type="button" class="mm-up-to-top" title="Volte ao Topo"><i class="fa fa-arrow-circle-up"></i></button>
        </li>
    </ul>

    <?php include('includes/aviso-cookies.php'); ?>
</footer>
<?php if ($_SERVER["SERVER_NAME"] != "localhost") { ?>
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $codigoAnalytics; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', '<?php echo $codigoAnalytics; ?>');
    </script>
<?php } ?>
<?php
$borg->js_custom[] = "jquery.buscaorganica.ambedFacebook";
$borg->jsCompress();
if ($_SERVER["SERVER_NAME"] != "localhost") {
    include('assets/js/jquery.clicktraking.php');
}
