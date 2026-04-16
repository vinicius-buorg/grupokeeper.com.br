<?php

    $title       = "Contato";
    $description = "Entre em contato conosco e envie sua mensagem ou solicitação de orçamento, nossa equipe entrará em contato assim que possível para atendê-lo."; // Manter entre 130 a 160 caracteres
    $h1          = $title;
    $keywords    = $title;

    include "includes/_configuracoes.php";
    
    $borg->cssCompress(array(
        "ferramentas/fancybox",
        "paginas/contato"
    ));
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        <section id="home">
            <div class="container">
                <div class="flex">
                    <div class="col-md-12 text-center">
                        <h1>Contato</h1>
                        <?php echo $borg->breadcrumb(array($title)); ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="contato" class="padding-50">
            <div class="total-cont">
                <div class="bg">
                    <div class="container flex rev">
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 inst-cont">
                            <h3>Informações de Contato</h3>
                            <p>Preencha o formulário e nossa equipe retornará em até 24 horas.</p>
                            <p>Caso queira trabalhar conosco <br> anexe seu currículo.</p>
                            <p>Se deseja associar-se basta informar no campo de mensagem!</p>
                            <ul>
                                <li><i class="fas fa-envelope"></i> <a data-click-track="E-mail - Págnia Contato" href="mailto:<?php echo $emailContato; ?>" title="Entre em contato por e-mail"><?php echo $emailContato; ?></a></li>
                                <li><i class="fas fa-phone-alt"></i> <a data-click-track="Telefone - Págnia Contato" href="tel:<?php echo $unidades [1]["link_tel"]; ?>" title="Clique e Ligue"><?php echo $unidades[1]['tel']; ?></a></li>
                                <li><i class="fa-brands fa-whatsapp"></i> <a data-click-track="WhatsApp - Págnia Contato" href="<?php echo $unidades [1]["link_wpp"]; ?>" target="_blank" title="Fale conosco por WhatsApp"><?php echo $unidades[1]['wpp']; ?></a></li>
                                <li><i class="fas fa-map-marker-alt"></i> <a href="<?php echo $unidades [1]["link_maps"]; ?>" title="Acesse no Maps" target="_blank"><?php echo $unidades[1]['rua']?></a></li>
                            </ul>
                            <h4>Redes Sociais</h4>
                            <ul class="social-media">
                                <li><a data-click-track="Ícone Facebook - Redes Sociais - Págnia Contato" href="https://www.facebook.com/<?php echo $facebook; ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a data-click-track="Ícone Instagram - Redes Sociais - Págnia Contato" href="https://www.instagram.com/<?php echo $instagram; ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a data-click-track="Ícone Linkedin - Redes Sociais - Págnia Contato" href="https://www.linkedin.com/<?php echo $linkedin?>" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a data-click-track="Ícone WhatsApp - Redes Sociais - Págnia Contato" href="<?php echo $unidades [1]["link_wpp"]; ?>" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <form class="form-contato">
                                <div class="flex">
                                    <div class="col-xs-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="nome">Nome <span class="red-color">*</span></label>
                                            <input name="Nome" type="text" id="nome" class="form-control campo-obrigatorio" placeholder="Insira seu Nome">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="email">E-mail <span class="red-color">*</span></label>
                                            <input name="E-mail" type="email" id="email" class="form-control campo-obrigatorio" placeholder="email@empresa.com">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="tel">Telefone <span class="red-color">*</span></label>
                                            <input name="Telefone" type="text" id="tel" class="form-control campo-obrigatorio mask-phone">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="curriculo">Anexe seu currículo (PDF) <span class="red-color">*</span></label>
                                            <input type="file" id="curriculo" name="Curriculo" class="form-control" accept=".pdf">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="msg">Como podemos ajudar? <span class="red-color">*</span></label>
                                            <textarea name="Mensagem" id="msg" class="form-control campo-obrigatorio" rows="6" placeholder="Deixe sua Mensagem"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-lg-12 text-right">
                                        <input name="Local do Form" value="Formulário fim da página: <?php echo $canonical;?>" type="hidden">
                                        <button type="submit" 
                                            class="btn btn-default btn-block"
                                            data-emailsReceberEnvio = <?php echo $emailContato;?>
                                            data-emailsReceberCopia = ""
                                            data-emailsReceberCopiaOculta = ""
                                            data-siteCliente = "<?php echo $nome_empresa;?>"
                                            data-ajax="Contato atraves do site">Enviar <i class="fa fa-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        $borg->js_custom = array(
            "tools/bootstrap.min",
            "tools/jquery.validate.min",
            "tools/jquery.mask.min",
            "tools/jquery.fancybox",
            "jquery.buscaorganica.contact"
        ); 
    ?>
    <?php include "includes/_footer.php"; ?>

    <script>
        $('.form-control').click(function(){
            $('.form-group').find('label').css('color', '#767676');
            $(this).parent('.form-group').find('label').css('color', 'var(--main)');
        });
    </script>
</body>
</html>