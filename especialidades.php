<?php

include "includes/arrayEspecialidades.php";

$exibirProduto = false;

if (isset($_GET['prod']) && array_key_exists($_GET['prod'], $especialidades)) {
    $produtoFiltrado = $especialidades[$_GET['prod']];
    $h1          = $produtoFiltrado['title'];
    $title       = $produtoFiltrado['title'];
    $description = $produtoFiltrado['title'];
    $keywords    = $title;
    $exibirProduto = true;
} else {
    $h1          = "Contabilidade Especializada";
    $title       = "Contabilidade Especializada";
    $description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados.";
}

include "includes/_configuracoes-responsabilidades.php";
$canonical   = $url . 'contabilidade-especializada/' . $_GET['prod'];
include "includes/buscaorganica/head.buscaorganica.min.php";

$borg->cssCompress(array(
    "paginas/contabilidade-especializada",
    // "paginas/especialidades",
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <?php echo $borg->breadcrumb(array($title)); ?>
        <?php if ($exibirProduto): ?>
            <!-- Exibição do produto selecionado -->
            <div id="especial">
                <div class="container">
                    <div class="esp-titulo">
                        <?= $produtoFiltrado['title2'] ?>
                    </div>
                    <div class="flex">
                        <div class="col-lg-6">
                            <div class="esp-img">
                                <img class="img-responsive" src="<?= $url; ?>imagens/main/especialidades-2/<?= $produtoFiltrado['name'] ?>.webp" alt="<?= $produtoFiltrado['name'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="esp-content">
                                <div class="esp-desc">
                                    <?= $produtoFiltrado['left-content'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="diferenciais">
                <div class="container">
                    <div class="flex">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="accordion-container">
                                <div class="accordion">
                                    <div class="accordion-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <button class="menu-button">Atividades</button>
                                    <div class="conteudo conteudo-atividades">
                                        <?= $produtoFiltrado['atividades'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="accordion-container">
                                <div class="accordion">
                                    <div class="accordion-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <button class="menu-button">Quais os benefícios de contratar os serviços do Grupo Keeper para <?= $produtoFiltrado['title'] ?>?</button>
                                    <div class="conteudo conteudo-bene">
                                        <?= $produtoFiltrado['beneficios'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <p><strong>Declaração de Imposto de Renda:</strong> envio da declaração com orientações sobre deduções. <strong>Planejamento Financeiro:</strong> apoio na organização de orçamento e metas. <strong>Gestão de Bens e Patrimônio:</strong> auxílio na valorização e proteção de ativos. <strong>Planejamento Sucessório:</strong> preparo para transferência segura de bens. <strong>Acompanhamento Financeiro:</strong> controle de receitas, despesas e relatórios. <strong>Regularização Fiscal:</strong> solução de pendências com a Receita Federal. <strong>Consultoria Financeira:</strong> análise de propostas de empréstimos. <strong>Previdência Privada:</strong> escolha de planos alinhados aos objetivos do cliente.</p> -->
            <div id="vantagens">
                <div class="container">
                    <div class="vant-titulo">
                        <h2>Nossas principais vantagens</h2>
                    </div>
                    <div class="flex">
                        <?php
                        $vantagens = [
                            '1' => [
                                'icon' => '<i class="fa-solid fa-download"></i>',
                                'number' => '<p>01</p>',
                                'title' => '<h2>Área Exclusiva</h2>',
                                'desc' => '<p>Fornecemos uma área exclusiva em nosso site onde arquivamos digitalmente todos os documentos de nossos clientes, gratuitamente.​</p>',
                            ],
                            '2' => [
                                'icon' => '<i class="fa-solid fa-headset"></i>',
                                'number' => '<p>02</p>',
                                'title' => '<h2>Atendimento Prático</h2>',
                                'desc' => '<p>Nosso suporte é realizado de forma prática WhatsApp e Telefone diretamente com nossos profissionais.​</p>',
                            ],
                            '3' => [
                                'icon' => '<i class="fa-solid fa-chart-pie"></i>',
                                'number' => '<p>03</p>',
                                'title' => '<h2>Especializados em Nichos de Mercado</h2>',
                                'desc' => '<p>Nossa Contabilidade é especializada em nichos de mercado, proporcionando assim um atendimento personalizado e totalmente qualificado para sua empresa.​</p>',
                            ],
                            '4' => [
                                'icon' => '<i class="fa-solid fa-user-plus"></i>',
                                'number' => '<p>04</p>',
                                'title' => '<h2>Agilidade no Atendimento</h2>',
                                'desc' => '<p>Nosso atendimento é personalizado para melhor atender as necessidades individuais dos clientes.​</p>',
                            ],
                        ]
                        ?>

                        <?php foreach ($vantagens as $key => $value): ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="vant-card">
                                    <div class="vant-icon">
                                        <?= $value['icon'] ?>
                                    </div>
                                    <div class="vant-number">
                                        <?= $value['number'] ?>
                                    </div>
                                    <div class="vant-title">
                                        <?= $value['title'] ?>
                                    </div>
                                    <div class="vant-desc">
                                        <?= $value['desc'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div id="duvidas">
                <div class="container">
                    <div class="duv-titulo">
                        <h2>Principais Dúvidas</h2>
                    </div>
                    <div class="flex">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="accordion-container">
                                <div class="accordion">
                                    <div class="accordion-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <button class="menu-button">Qual a vantagem que tenho em contratar uma Assessoria Contábil de São Paulo?</button>
                                    <div class="conteudo">
                                        <p>Sim. Você terá em um só local, lembretes do que você deve fazer para deixar empresa em dia e também aproveita para emitir de Notas Fiscais Eletrônicas de Serviço de forma simples e rápida.</p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <button class="menu-button">Como faço para fazer a abertura da empresa de forma rápida?</button>
                                    <div class="conteudo">
                                        <p>Para abertura de empresa é necessário contratar um contador. Apresentamos propostas de abertura de empresa que irão te estruturar com estratégias tributárias para que seus impostos seja compatíveis com seu tipo de empresa para assim prosseguir crescendo. Após o aceite da proposta de abertura de empresa e assessoria contábil, nós enviamos imediatamente para o setor de legalização de empresa que disponibiliza atendimento imediato e iniciamos o processo de abertura de empresa no mesmo dia.</p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <button class="menu-button">Eu preciso me deslocar até seu escritório de contabilidade?
                                    </button>
                                    <div class="conteudo">
                                        <p>Não é necessário. Nós realizamos todos os processos via Internet. Para documentos que precisam ser impressos e entregues, providenciamos a entrega por outras vias.</p>
                                    </div>
                                </div>
                                <div class="accordion">
                                    <div class="accordion-icon">
                                        <i class="fa-solid fa-plus"></i>
                                    </div>
                                    <button class="menu-button">Como é o processo de abertura de empresa?</button>
                                    <div class="conteudo">
                                        <p>O registro legal de uma empresa é tirado na Junta Comercial do estado ou no Cartório de Registro de Pessoa Jurídica. Para as pessoas jurídicas, esse passo é equivalente à obtenção da Certidão de Nascimento de uma pessoa física. A partir desse registro, a empresa existe oficialmente – o que não significa que ela possa começar a operar.</p>
                                        <p>Para fazer o registro é preciso apresentar uma série de documentos e formulários que podem variar de um estado para o outro. Os mais comuns são:</p>
                                        <p>Contrato Social; <br> Documentos pessoais de cada sócio (no caso de uma sociedade). <br> Os preços e prazos para abertura variam de estado para estado.</p>
                                    </div>
                                </div>
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
                                <a data-click-track="WhatsApp - Orçamento - Especialidades" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Solicite um orçamento</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <!-- Exibição do conteúdo padrão -->
            <div id="contabilidade">
                <div class="container">
                    <div class="flex">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="conta-title">
                                <h2>Contabilidade Especializada</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="especialidades" class="padding-50">
                <div class="container">
                    <div class="flexBetween">
                        <a href="<?= $url; ?>contabilidade-especializada/associacoes" class="col-xs-12 col-sm-6 col-md-2 col-lg-2 element card-especialidade" data-aos="fade-up" data-aos-duration="900" data-aos-delay="200">
                            <div class="holder">
                                <div class="img-holder">
                                    <img src="<?= $url; ?>imagens/main/especialidades/associacoes.webp" alt="Associações" title="Associações">
                                </div>
                                <div class="info">
                                    <h4>Associações</h4>
                                    <p>O crescimento de uma organização sem fins lucrativos depende de uma gestão administrativa com conhecimento e determinação</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?= $url; ?>contabilidade-especializada/escolas" class="col-xs-12 col-sm-6 col-md-2 col-lg-2 element card-especialidade" data-aos="fade-up" data-aos-duration="900" data-aos-delay="300">
                            <div class="holder">
                                <div class="img-holder">
                                    <img src="<?= $url; ?>imagens/main/especialidades/escolas.webp" alt="Escolas" title="Escolas">
                                </div>
                                <div class="info">
                                    <h4>Escolas</h4>
                                    <p>A gestão educacional tem um processo gerencial diferente de outros modelos de negócios...</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?= $url; ?>contabilidade-especializada/prestadores-de-servicos" class="col-xs-12 col-sm-6 col-md-2 col-lg-2 element card-especialidade" data-aos="fade-up" data-aos-duration="900" data-aos-delay="400">
                            <div class="holder">
                                <div class="img-holder">
                                    <img src="<?= $url; ?>imagens/main/especialidades/prestadores-de-servicos.webp" alt="Prestadores de Serviços" title="Prestadores de Serviços">
                                </div>
                                <div class="info">
                                    <h4>Prestadores de Serviços</h4>
                                    <p>Trabalhamos com emissão de notas, movimentação bancária, entre outros processos importantes...</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?= $url; ?>contabilidade-especializada/comercio" class="col-xs-12 col-sm-6 col-md-2 col-lg-2 element card-especialidade" data-aos="fade-up" data-aos-duration="900" data-aos-delay="500">
                            <div class="holder">
                                <div class="img-holder">
                                    <img src="<?= $url; ?>imagens/main/especialidades/comercio.webp" alt="Comércio" title="Comércio">
                                </div>
                                <div class="info">
                                    <h4>Comércio</h4>
                                    <p>Com o objetivo de buscar dentro da legislação vigente estratégias legais que possam auxiliar o seu negócio...</p>
                                </div>
                            </div>
                        </a>
                        <a href="<?= $url; ?>contabilidade-especializada/industria" class="col-xs-12 col-sm-6 col-md-2 col-lg-2 element card-especialidade" data-aos="fade-up" data-aos-duration="900" data-aos-delay="600">
                            <div class="holder">
                                <div class="img-holder">
                                    <img src="<?= $url; ?>imagens/main/especialidades/industria.webp" alt="Indústria" title="Indústria">
                                </div>
                                <div class="info">
                                    <h4>Indústria</h4>
                                    <p>A contabilidade é fundamental para o sucesso de qualquer empresa, seja pequena ou grande...</p>
                                </div>
                            </div>
                        </a>
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
                                <a data-click-track="WhatsApp - Orçamento - Especialidades" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Solicite um orçamento</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

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