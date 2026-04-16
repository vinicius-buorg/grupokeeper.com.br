<?php

include "includes/arrayEspecialidades.php";

// VARIAVEL LOCAL HOST
// $url = "http://localhost/_dev/grupokeeper.com.br/";

// VARIAVEL APROVAÇÃO
// $url = "https://aprovacao.buscaorganica.com.br/grupokeeper.com.br/";

// VARIAVEL DO CLIENTE (SITE NO AR)
$url = "http://www.grupokeeper.com.br/";

$exibirProduto = false;

if(isset($_GET['prod']) && array_key_exists($_GET['prod'], $especialidades)) {
    $produtoFiltrado = $especialidades[$_GET['prod']];
    $h1          = $produtoFiltrado['title'];
    $title       = $produtoFiltrado['title'];
    $description = $produtoFiltrado['title'];
    $keywords    = $title;
    $exibirProduto = true;
    $canonical   = $url . 'contabilidade-especializada/' . $_GET['prod'];
} else {
    $h1          = "Contabilidade Especializada";
    $title       = "Contabilidade Especializada";
    $description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados.";
    $canonical   = $url;
}

include "includes/_configuracoes-contabilidade.php";

$borg->cssCompress(array(
    "paginas/contabilidade-especializada",
));

$faqs = [
    ['q' => 'Qual a vantagem que tenho em contratar uma Assessoria Contábil de São Paulo?',
     'a' => 'Você terá em um só local lembretes do que deve fazer para deixar a empresa em dia e também poderá emitir Notas Fiscais Eletrônicas de Serviço de forma simples e rápida.'],
    ['q' => 'Como faço para fazer a abertura da empresa de forma rápida?',
     'a' => 'Para abertura de empresa é necessário contratar um contador. Apresentamos propostas de abertura que irão te estruturar com estratégias tributárias para que seus impostos sejam compatíveis com seu tipo de empresa. Após o aceite da proposta, enviamos imediatamente para o setor de legalização e iniciamos o processo de abertura no mesmo dia.'],
    ['q' => 'Eu preciso me deslocar até seu escritório de contabilidade?',
     'a' => 'Não é necessário. Realizamos todos os processos via Internet. Para documentos que precisam ser impressos e entregues, providenciamos a entrega por outras vias.'],
    ['q' => 'Como é o processo de abertura de empresa?',
     'a' => 'O registro legal de uma empresa é tirado na Junta Comercial do estado ou no Cartório de Registro de Pessoa Jurídica. Os documentos mais comuns exigidos são: Contrato Social e documentos pessoais de cada sócio. Os preços e prazos para abertura variam de estado para estado.'],
];
?>
<?php include "includes/schema-faq.php"; ?>
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
                    <?= $produtoFiltrado['title2']?>
                </div>
                <div class="flex">
                    <div class="col-lg-6">
                        <div class="esp-img">
                            <img class="img-responsive" src="<?= $url; ?>imagens/main/especialidades-2/<?= $produtoFiltrado['name']?>.webp" alt="<?= $produtoFiltrado['name']?>">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="esp-content">
                            <div class="esp-title">
                            <?= $produtoFiltrado['title2']?>
                            </div>
                            <div class="esp-desc">
                            <?= $produtoFiltrado['left-content']?>
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
                                    <span>Obrigações trabalhistas</span>
                                    <ul>
                                        <li>Registro de admissão de funcionários, formalização dos contratos de trabalho , transmissão das informações ao e-Social.</li>
                                        <li>Geração mensal da folha de pagamento dos funcionários, pró-labore dos sócios e recibos de pagamento a autônomos, além da emissão de declarações e guias de recolhimento de tributos decorrentes, recibos de salário família, guia de recolhimento sindical e demais obrigações trabalhistas e previdenciárias.</li>
                                        <li>Emissão de comunicado e recibo de férias de funcionários</li>
                                        <li>Emissão de comunicado de demissão de funcionários, geração da rescisão trabalhista, emissão das guias de recolhimento de tributos decorrentes, preparação de documentos para o seguro desemprego.</li>
                                    </ul>
                                    <span>Obrigações fiscais</span>
                                    <ul>
                                        <li>Escrituração dos registros fiscais e elaboração dos livros obrigatórios, declarações e guias de recolhimento dos tributos devidos</li>
                                        <li>Orientação acerca do cumprimento das obrigações acessórias de natureza fiscal, como informar o código de serviço nas NFS-e e CFOP nas NF-e e NFC-e.</li>
                                    </ul>
                                    <span>Obrigações paralegais</span>
                                    <ul>
                                        <li>Controle de vencimento de renovação dos alvarás do Corpo de Bombeiros, sanitário, ambiental, de localização e de funcionamento</li>
                                        <li>Controle de vencimento de renovação das certidões negativas de débitos federais, estaduais e municipais, em até quarenta e oito horas antes do vencimento de cada obrigação.</li>
                                        <li>Alteração de contrato social.</li>
                                    </ul>
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
                                <button class="menu-button">Quais os benefícios de contratar os serviços do Grupo Keeper para Associações?</button>
                                <div class="conteudo conteudo-bene">  
                                    <?= $produtoFiltrado['beneficios']?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
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

                    <?php foreach($vantagens as $key => $value): ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="vant-card">
                                <div class="vant-icon">
                                    <?= $value['icon']?>
                                </div>
                                <div class="vant-number">
                                    <?= $value['number']?>
                                </div>
                                <div class="vant-title">
                                <?= $value['title']?>
                                </div>
                                <div class="vant-desc">
                                <?= $value['desc']?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach?>
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
                            <a data-click-track="WhatsApp - Orçamento - Contabilidade Especializada" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Solicite um orçamento</a>
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
        <div id="especialidades">
            <div class="container">
            <div class="box-title-servicos">
                    <p>Oferecemos contabilidade especializada para associações, escolas, prestadores de serviços, comércio e indústria, garantindo gestão eficiente, estratégica e dentro da legislação vigente.</p>
                </div>
                <div class="flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/associacoes">
                            <div class="card">
                                <div class="card-image-associacao">
                          </div>
                          <div class="card-content">
                              <div class="category">Associações</div>
                              <div class="heading">
                                  O crescimento de uma organização sem fins lucrativos depende de uma gestão administrativa com conhecimento e direcionamento…
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/escolas">
                            <div class="card">
                                <div class="card-image-escolas">
                          </div>
                          <div class="card-content">
                              <div class="category">Escolas e Instituições de Ensino em Geral</div>
                              <div class="heading">
                                  A gestão educacional tem um processo gerencial diferente de outros modelos de negócios…
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/prestadores-de-servicos">
                            <div class="card">
                                <div class="card-image-servicos">
                          </div>
                          <div class="card-content">
                              <div class="category">Prestadores de Serviços</div>
                              <div class="heading">
                                  Trabalhamos com emissão de notas, movimentação bancária, emissão de guias e tudo que for importante…
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/comercio">
                            <div class="card">
                                <div class="card-image-comercio">
                          </div>
                          <div class="card-content">
                              <div class="category">Comércio</div>
                              <div class="heading">
                                  Com o objetivo de buscar dentro da legislação vigente estratégias legais que possam auxiliar sua companhia…
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/industria">
                            <div class="card">
                                <div class="card-image-industria">
                          </div>
                          <div class="card-content">
                              <div class="category">Industria</div>
                              <div class="heading">
                                  A contabilidade é fundamental para o sucesso de qualquer empresa em ascensão, especialmente para uma indústria...
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/startups">
                            <div class="card">
                                <div class="card-image-startups">
                          </div>
                          <div class="card-content">
                              <div class="category">Startups</div>
                              <div class="heading">
                              A inovação e a estratégia são essenciais para o crescimento sustentável de uma startup...
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/e-commerce">
                            <div class="card">
                                <div class="card-image-e-commerce">
                          </div>
                          <div class="card-content">
                              <div class="category">E-commerce</div>
                              <div class="heading">
                              O sucesso no comércio digital exige logística ágil e uma experiência de compra eficiente...
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/restaurantes">
                            <div class="card">
                                <div class="card-image-restaurantes">
                          </div>
                          <div class="card-content">
                              <div class="category">Restaurantes - Bares - Pizzarias - Mercados</div>
                              <div class="heading">
                              A administração eficaz e o controle de estoque são essenciais para a lucratividade diária...
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/medicos">
                            <div class="card">
                                <div class="card-image-medicos">
                          </div>
                          <div class="card-content">
                              <div class="category">Médicos/Clínicas</div>
                              <div class="heading">
                              A organização financeira e a conformidade regulatória garantem a excelência no atendimento...
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/autopecas">
                            <div class="card">
                                <div class="card-image-autopecas">
                          </div>
                          <div class="card-content">
                              <div class="category">Autopeças</div>
                              <div class="heading">
                              A gestão de estoque e o atendimento rápido são fundamentais para a satisfação do cliente...
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ajuste-col">
                        <a href="<?= $url; ?>contabilidade-especializada/pessoas-fisicas">
                            <div class="card">
                                <div class="card-image-pessoas-fisicas">
                          </div>
                          <div class="card-content">
                              <div class="category">Pessoas Físicas (IRPF, Empregadores Domésticos)</div>
                              <div class="heading">
                              O planejamento financeiro evita problemas e garante segurança nas obrigações fiscais...
                                  <div class="author"><span class="name">Clique para ver mais!</span></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"></div>
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
                            <a data-click-track="WhatsApp - orçamento - Contabilidade especializada" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Solicite um orçamento</a>
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
</body>

</html>