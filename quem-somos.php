<?php
$h1           = "Quem Somos";
$title         = "Quem Somos";
$description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados."; // Manter entre 130 a 160 caracteres
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/about"
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <?php echo $borg->breadcrumb(array($title)); ?>
        <section id="about">
            <div class="container">
                <div class="flex rev">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 element">
                        <div class="holder">
                            <div class="flex image-holder-sup">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 image-element">
                                    <div class="image-holder">
                                        <img src="<?= $url; ?>imagens/main/quem-somos/1.webp" alt="30 anos de experiência" title="30 anos de experiência">
                                    </div>
                                </div>
                                <!-- <p class="rounded">30 anos <br> de experiência</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 element desc">
                        <h1>Quem Somos</h1>
                        <p>Nossos colaboradores somam 30 anos em atendimento e tem como objetivo a prestação de serviços de assessoria e consultoria empresarial com foco na redução de custos, planejamento estratégico, negociação de dívidas, estruturação financeira, apoiando de forma direta o gestor e seus colaboradores com um olhar para prevenção de riscos, busca de oportunidades, detalhamento dos processos e desenvolvimento de equipe. Atendemos em todo o Brasil.</p>
                        <p>Seja qual for o seu nicho, podemos te ajudar! Nosso intuito é transformar a prestação de serviços da área contábil no mais simples possível. Veja por que tantas empresas contratam o Grupo Keeper para obter mais lucro:</p>
                        <h2>Nossa Equipe</h2>
                        <p>Com profissionais experientes, proativos e com especialização em várias áreas, todos os atendimentos são feitos com seriedade, respeito e excelência. Além disso, cada profissional passa por treinamentos constantes para atender a todos os tipos de necessidades dos clientes durante todas as etapas dos projetos desenvolvidos de forma ágil e segura.</p>
                        <p>Nosso trabalho conquistou seu espaço no mercado e hoje, está entre os líderes na atuação empresarial.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="mapa" class="padding-50">
            <div class="container text-center">
                <h2>Um pouco mais sobre nós</h2>
                <div class="flex holder">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 element">
                        <div class="desc">
                            <h4>Nossa Missão</h4>
                            <p>Promover o desenvolvimento pleno de nossos clientes, proporcionando soluções inovadoras para o alcance de potencial e resultados de excelência.</p>
                        </div>
                        <div class="desc">
                            <h4>Nossa Visão</h4>
                            <p>Ser uma empresa líder em inteligência financeira e de gestão de empresas</p>
                        </div>
                        <div class="desc">
                            <h4>Nossos Objetivos</h4>
                            <ul>
                                <li>Integração</li>
                                <li>Resultados</li>
                                <li>Desenvolvimento Sustentável</li>
                                <li>Seriedade e Respeito em todas as Etapas</li>
                                <li>Prontidão para mudanças</li>
                                <li>Empreendedorismo e Inovação</li>
                                <li>Crescimento e Evolução</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 element mapa-mobile">
                        <h3>Clique no mapa e veja as regiões atendidas</h3>
                        <?php include "includes/mapa-brasil.php"; ?>
                        <?php include "includes/modal-mapa.php"; ?>
                    </div>
                </div>
                <div class="cards flex not-a">
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 element">
                        <div class="holder">
                            <p><i class="fa-solid fa-money-bill"></i></p>
                            <h3>Maior lucratividade</h3>
                            <p>Fazemos uma análise completa dos principais pontos que causam prejuízos e adota a medida corretiva adequada.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 element">
                        <div class="holder">
                            <p><i class="fa-solid fa-piggy-bank"></i></p>
                            <h3>Economia com pagamento de impostos</h3>
                            <p>Redução de forma legal em até 60% a carga tributária da sua Instituição.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 element">
                        <div class="holder">
                            <p><i class="fa-solid fa-stopwatch"></i></p>
                            <h3>Suporte ágil e eficiente</h3>
                            <p>Suporte ágil e eficiente. Orientações preventivas e suporte estratégico com informações exclusivas em reuniões, por e-mail, site e telefone.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 element">
                        <div class="holder">
                            <p><i class="fa-solid fa-coins"></i></p>
                            <h3>Redução de custos</h3>
                            <p>Considerável diminuição de gastos com profissionais nas atividades administrativas e encargos sociais, cursos, treinamentos e despesas de manutenção (água, luz, telefone, software, hardware, materiais de escritório e espaço físico).</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="midia">
            <div class="container">
                <div class="midia-title">
                    <h2>GRUPO KEEPER <span>NA MÍDIA</span></h2>
                </div>
                <div class="flex">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="midia-img">
                            <a href="https://www.terra.com.br/noticias/uso-da-inteligencia-artificial-cresce-no-meio-contabil,a08312466f64d6780394420618217d08fz0esq9s.html">
                                <img width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/terra.webp" alt="Terra">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="midia-img">
                            <a href="https://oglobo.globo.com/patrocinado/dino/noticia/2023/06/abertura-de-escolas-requer-plano-de-negocios.ghtml">
                                <img width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/o-globo.webp" alt="O Globo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="midia-img">
                            <a href="https://www.estacaolitoralsp.com.br/27/06/2023/noticias-corporativas-dino/290800-abertura-de-escolas-requer-plano-de-negocios/">
                                <img width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/estacao-litoral.webp" alt="Estação Litoral">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="midia-img">
                            <a href="https://www.negocioefranquia.com/IR_especialista_responde_duvidas_sobre_malha_fina/">
                                <img width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/negocio-franquia.webp" alt="Negocio e Franquia">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <section id="lucro">
            <div class="container">
                <div class="lucro-header">
                    <h2>Sua empresa lucra o quanto<br><span>deveria lucrar?</span></h2>
                    <p class="lucro-subtitle">Se alguma dessas perguntas te gerou dúvida, o Grupo Keeper pode ajudar.</p>
                </div>
                <div class="lucro-grid">
                    <div class="lucro-card">
                        <div class="lucro-icon"><i class="fa-solid fa-rocket"></i></div>
                        <p>Você já usou o cheque especial na sua empresa? Controla cada centavo que sai da conta?</p>
                    </div>
                    <div class="lucro-card">
                        <div class="lucro-icon"><i class="fa-solid fa-laptop"></i></div>
                        <p>De forma fácil, consegue saber qual é o lucro gerado pelo seu negócio?</p>
                    </div>
                    <div class="lucro-card">
                        <div class="lucro-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                        <p>Seu imposto, você sabe se recolhe o valor correto?</p>
                    </div>
                    <div class="lucro-card">
                        <div class="lucro-icon"><i class="fa-solid fa-chart-line"></i></div>
                        <p>Sua empresa possui planejamento financeiro e reserva financeira?</p>
                    </div>
                    <div class="lucro-card">
                        <div class="lucro-icon"><i class="fa-solid fa-user-tie"></i></div>
                        <p>Tem um profissional que te orienta e dá sugestões de como resolver determinada situação?</p>
                    </div>
                    <div class="lucro-card">
                        <div class="lucro-icon"><i class="fa-solid fa-users"></i></div>
                        <p>Tem problemas com funcionários ou folha de pagamento?</p>
                    </div>
                </div>
                <div class="lucro-cta">
                    <a data-click-track="WhatsApp - Lucro - Quem Somos" href="<?= $unidades[1]['link_wpp'] ?>" target="_blank" title="Falar com especialista">
                        Quero melhorar meus resultados <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </section>
        
    </main>
    <?php
    $borg->js_custom = array();
    ?>
    <?php include "includes/_footer.php"; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init();
        });
    </script>
</body>

</html>