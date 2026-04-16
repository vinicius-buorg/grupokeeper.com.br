<?php

include 'includes/arrayServicos.php';

if(isset($_GET['prod'])) {
    $produtoGet = $_GET['prod'];
    foreach ($servicos as $key => $produto) {
        if($key === $produtoGet) {
            $produtoFiltrado = $produto;
            $h1      	 = $produtoFiltrado['title'];
            $title    	 = $produtoFiltrado['title'];
            $description = $produtoFiltrado['title'];
            $keywords    = $title;
        }
    }
}

include "includes/_configuracoes-servicos.php";
$canonical = $url . 'servicos/' . $produtoGet;
include "includes/buscaorganica/head.buscaorganica.min.php";

$borg->cssCompress(array(
    "paginas/servicos",
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
    <?php echo $borg->breadcrumb(array($title)); ?>
    <div id="first-content">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-12 -col-md-12 col-sm-12 col-xs-12">
                        <div class="first-conteudo">
                            <div class="first-title">
                                <?= $produtoFiltrado['title2']?>
                            </div>
                            <div class="first-desc">
                            <?= $produtoFiltrado['desc']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="second-content">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="second-img">
                            <img class="img-responsive" src="imagens/main/servicos-2/<?= $produtoFiltrado['name']?>.webp" alt="<?= $produtoFiltrado['title']?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="all-cards">
                            <div class="first-row-cards">
                                <div class="dif-container">
                                    <div class="dif-icon">
                                        <?= $produtoFiltrado['icon1']?>
                                    </div>
                                    <div class="dif-desc">
                                        <?= $produtoFiltrado['icon-title1']?>
                                        <?= $produtoFiltrado['desc-icon1']?>
                                    </div>
                                </div>
                                <div class="dif-container">
                                    <div class="dif-icon">
                                        <?= $produtoFiltrado['icon2']?>
                                    </div>
                                    <div class="dif-desc">
                                        <?= $produtoFiltrado['icon-title2']?>
                                        <?= $produtoFiltrado['desc-icon2']?>
                                    </div>
                                </div>
                                <div class="dif-container">
                                    <div class="dif-icon">
                                        <?= $produtoFiltrado['icon3']?>
                                    </div>
                                    <div class="dif-desc">
                                        <?= $produtoFiltrado['icon-title3']?>
                                        <?= $produtoFiltrado['desc-icon3']?>
                                    </div>
                                </div>
                                <div class="dif-container">
                                    <div class="dif-icon">
                                        <?= $produtoFiltrado['icon4']?>
                                    </div>
                                    <div class="dif-desc">
                                        <?= $produtoFiltrado['icon-title4']?>
                                        <?= $produtoFiltrado['desc-icon4']?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dif-btn">
                                <a data-click-track="WhatsApp - <?= $produtoFiltrado['title']?> - <?= $produtoFiltrado['title']?>" href="<?php echo $unidades [1]["link_wpp"]; ?>">FALE COM NOSSOS CONSULTORES <i class="fa-regular fa-circle-right"></i></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="timeline">
            <div class="container">
                    <div class="divider">
                    <div class="flex">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-xl-8 element">
                            <p>Para conhecer melhor todos os nossos + de 30 serviços personalizáveis, entre em contato e solicite seu orçamento. Assim, você pode ter acesso a um atendimento especializado na área em que precisa com os melhores profissionais do mercado.</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-xl-4 element">
                            <a data-click-track="WhatsApp - Orçamento - Serviços" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Solicite um orçamento</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        $(function() {
            $('section').each(function() {
                var $container = $(this).find('.slideshow-container');
                if (!$container.length) return;
                var $slides = $container.find('.slide, .slide-active');
                $slides.removeClass('slide-active').eq(0).addClass('active');
                var index = 0;
                var $nav = $(this).find('.nav-slide');

                function showSlide(n) {
                    $slides.removeClass('active').eq(n).addClass('active');
                }

                function nextSlide() {
                    index = (index + 1) % $slides.length;
                    showSlide(index);
                }

                function prevSlide() {
                    index = (index - 1 + $slides.length) % $slides.length;
                    showSlide(index);
                }
                $nav.find('.next').on('click', nextSlide);
                $nav.find('.prev').on('click', prevSlide);
                setInterval(nextSlide, 5000);
            });
        });
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();
            $('.form-control').click(function() {
                $('.form-group').find('label').css('color', '#767676');
                $(this).parent('.form-group').find('label').css('color', 'var(--main)');
            });
        });
    </script>

            <!--!ACCORDION-->
            <script>
        const menuBtns = document.querySelectorAll(".menu-button");

        menuBtns.forEach((menuBtn) => {
            menuBtn.addEventListener("click", function() {
                //----- open only one menu --------------
                const activeAccordion = document.querySelector(".menu-button.open");
                if (activeAccordion && activeAccordion !== this) {
                    activeAccordion.nextElementSibling.style.height = 0;
                    activeAccordion.classList.remove("open");
                }
                //------------------------------------------------

                this.classList.toggle("open");
                const content = this.nextElementSibling;
                if (this.classList.contains("open")) {
                    content.style.height = content.scrollHeight + "px";
                } else {
                    content.style.height = 0;
                }
            });
        });
    </script>

</body>

</html>