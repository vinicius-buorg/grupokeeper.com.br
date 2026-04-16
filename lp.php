<?php
$h1           = "Landing Page";
$title         = "Grupo Keeper";
$description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados."; // Manter entre 130 a 160 caracteres
$keywords    = $title;

include "includes/_configuracoes-lp.php";
$borg->cssCompress(array(
    "paginas/lp"
));
?>
</head>

<body>
    <?php //include "includes/_header.php";?>
    <?php $other_pages = 'Variável para remover o "Outras Páginas" do footer das LPs'; ?>
    <main class="main-content" style="margin-top: 0;">
        <section id="about">
            <div class="container">
                <div class="flex">
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 element desc">
                        <div class="image-holder">
                            <img src="<?= $url; ?>imagens/logo.webp" class="img-responsive" alt="30 anos de experiência" title="30 anos de experiência" style="margin-left: 0;">
                        </div>
                        <div class="text-banner c-white">
                            <h1>Você desconfia que a sua contabilidade atual não entrega os resultados que poderia?</h1>
                            <p>Conheça uma equipe de contabilidade especialista em <b class="c-white">gestão e crescimento da empresa</b> com <b class="c-white">30 anos de experiência.</b></p>
                        </div>
                        <div class="box-buttons">
                            <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Banner - <?= $h1; ?>">ENTRE EM CONTATO</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 relative">
                        <div class="image-holder man-img">
                            <img src="<?= $url; ?>imagens/main/lps/man.webp" alt="30 anos de experiência" title="30 anos de experiência" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="second" class="padding-40-0">
            <div class="container">
                <div class="flex">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="box-img">
                            <img src="<?= $url; ?>imagens/main/lps/second.webp" alt="Contador" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                        <div class="box-text">
                            <h2 class="c-main">Uma contabilidade que vai muito além de números, focada no que realmente importa:</h2>
                            <p>No crescimento sólido, sustentável e saudável do negócio de pequenos, médios e grandes empresários.</p>
                        </div>
                    </div>
                    <div class="col-md-1 col-lg-1"></div>
                </div>
            </div>
        </section>
        <section id="acordions" class="padding-40-0">
            <div class="container">
                <div class="flex">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="accordion">
                            <?php
                            $quests = [
                                "1" => [
                                    "title" => "Apoio Estratégico para o Dia a Dia ",
                                    "text" => "<ul class='disc-list pl-15'>
                                            <li>Assistência na rotina diária e na tomada de decisões.</li>
                                            <li>Orientação sobre sua posição enquanto gestor e os melhores caminhos para o tipo de empresa.</li>
                                            <li>Treinamento de equipe para alcançar melhores resultados.</li>
                                        </ul>",
                                ],
                                "2" => [
                                    "title" => "Suporte Diário aos Colaboradores",
                                    "text" => "<ul class='disc-list pl-15'>
                                            <li>Para você que troca de funcionários do setor administrativo constantemente, treinamos o jogo colaborador para que mantenha seu atendimento com excelência.</li>
                                        </ul>",
                                ],
                                "3" => [
                                    "title" => "Identificação de Riscos e Perdas",
                                    "text" => "<ul class='disc-list pl-15'>
                                            <li>Identificação de pontos onde você pode estar perdendo dinheiro ou correndo riscos desnecessários.</li>
                                            <li>Aconselhamento sobre o que fazer em casos de prejuízos.</li>
                                        </ul>",
                                ],
                                "4" => [
                                    "title" => "Parcelamentos Especiais e Recursos Financeiros",
                                    "text" => "<ul class='disc-list pl-15'>
                                            <li>Parcelamentos especiais na Receita Federal, Estadual ou Municipal.</li>
                                            <li>Montagem de operações para arrecadação de recursos, empréstimos e financiamentos.</li>
                                        </ul>",
                                ],
                            ];
                            foreach ($quests as $key => $value) : ?>
                                <div class="accordion-item">
                                    <button class="accordion-header">
                                        <span><?= $value['title']; ?></span>
                                        <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                    </button>
                                    <div class="accordion-body">
                                        <?= $value['text']; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-40">
                        <div class="box-text">
                            <h2 class="c-main">Nosso papel é identificar pontos cegos que te fazem perder dinheiro atualmente ou correr riscos desnecessários, e corrigi-los de forma rápida e precisa.</h2>
                            <p>Não só isso, como fornecer também uma assessoria que planeja estratégias legais para proteger os seus ativos pessoais e empresariais contra riscos, como: dívidas, possessos judiciais e outras obrigações financeiras. E muito mais.</p>
                            <div class="box-buttons">
                                <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Nosso papel - <?= $h1; ?>">ENTRE EM CONTATO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-40">
                        <div class="box-img">
                            <img src="<?= $url; ?>imagens/main/lps/balanco.webp" alt="Balaço Positivo" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="flex rev-mobile">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-40">
                        <div class="box-img">
                            <img src="<?= $url; ?>imagens/main/lps/img4.webp" alt="Direcionamento" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-40">
                        <div class="box-text">
                            <h2 class="c-main">É hora de vivenciar o próximo nível de resultado no seu negócio, reduzindo custos e potencializando os lucros.</h2>
                            <p>Conte com profissionais que reúnem mais de 3 décadas de experiência ajudando:</p>
                            <ul class="disc-list">
                                <li class="mt-10">Empreendedores que estão montando um negócio e não querem se preocupar com a contabilidade;</li>
                                <li class="mt-10">Empresários experientes que já possuem uma contabilidade, mas sentem que os resultados poderiam ser melhores;</li>
                                <li class="mt-10">Funcionários que buscam cumprir a legislação… </li>
                            </ul>
                            <p><strong>E todos aqueles que desejam crescer, expandir e alavancar seu faturamento nos próximos anos, sem pagar mais do que o necessário.</strong></p>
                            <div class="box-buttons">
                                <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - É hora de vivenciar o próximo nível - <?= $h1; ?>">ENTRE EM CONTATO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-40">
                        <div class="box-text">
                            <h2 class="c-main">Afinal, a era das cavernas já acabou há mais de 10.000 anos…</h2>
                            <h3 class="c-main">Então por que sua contabilidade insiste em segui-lá?</h3>
                            <p>Hoje, infelizmente, a maioria das contabilidades tradicionais seguem o mesmo padrão: o contador só serve para gerar guias de impostos e demorar dias para responder a uma dúvida.</p>
                            <p><strong>A proposta Keeper é totalmente diferente.</strong> Trazemos uma abordagem revolucionária e tecnológica para a gestão contábil.</p>
                            <div class="box-buttons">
                                <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Afinal, a era das cavernas - <?= $h1; ?>">ENTRE EM CONTATO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-40">
                        <div class="box-img">
                            <img src="<?= $url; ?>imagens/main/lps/conversa.webp" alt="Contabilidade" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="four-cards" class="padding-40-0">
            <div class="container">
                <div class="flex">
                    <?php
                    $_4cards = [
                        "1" => [
                            "title" => "Tecnologia Avançada:",
                            "text" => "Assim como o iPhone redefiniu os smartphones e a Amazon revolucionou o e-commerce com seu sistema na nuvem, a Keeper transforma o meio contábil com atendimento personalizado de ponta."
                        ],
                        "2" => [
                            "title" => "Respostas Imediatas:",
                            "text" => "Esqueça a espera longa por respostas. Com a Keeper, você tem suporte rápido e eficaz, com uma plataforma que lembra você de datas importantes para evitar multas e juros."
                        ],
                        "3" => [
                            "title" => "Gestão Proativa:",
                            "text" => "Evite perdas financeiras. Empresas que não contam com um suporte moderno acabam pagando mais impostos e enfrentam problemas como o aumento de 35% na folha de pagamento porque o contador tradicional perdeu prazo."
                        ],
                        "4" => [
                            "title" => "Suporte Completo:",
                            "text" => "Desde a abertura de novas empresas, troca de contadores ou assessoria pontual, a Keeper oferece um serviço completo e seguro, garantindo uma gestão financeira eficiente e lucrativa."
                        ],
                    ];
                    foreach ($_4cards as $key => $value) : ?>
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                            <div class="card bg-main">
                                <i class="fa-solid fa-circle-check c-white"></i>
                                <h3 class="c-sec"><?= $value['title']; ?></h3>
                                <p class="c-white"><?= $value['text']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="box-buttons">
                        <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Cards Verticais - <?= $h1; ?>">ENTRE EM CONTATO</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="chess" class="padding-40-0">
            <div class="container">
                <div class="flex">
                    <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12 bg-chess text-center">
                        <h2 class="c-white">Para nós, cada empresa é única e enfrenta desafios específicos. </h2>
                        <p class="c-white">É por isso que nossos serviços são cuidadosamente projetados para atender às necessidades individuais de cada cliente, independente do estágio, tamanho e faturamento da empresa.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="main-bgs">
            <div class="container">
                <div class="flex">
                    <?php
                    $boxes = [
                        "servicos-de-suporte-diario" => [
                            "title" => "Serviços de Suporte Diário",
                            "flex" => "normal-flex",
                            "content" => "<ul class='disc-list pl-15'>
                                <li><strong>Gestão de Processos Administrativos:</strong></li>
                                <li><strong>Admissão e Demissão:</strong> Facilitamos todo o processo de contratação e desligamento de funcionários, garantindo conformidade com a legislação e minimizando riscos.</li>
                                <li><strong>Folha de Pagamento:</strong> Gerenciamos a folha de pagamento de forma precisa e eficiente, evitando erros que podem custar caro para sua empresa.</li>
                                <li>Rescisão: Tratamos de todos os detalhes da rescisão, assegurando que tudo esteja em ordem e dentro da lei.</li>
                                <li><strong>Intermediação de Conflitos:</strong> Atuamos como mediadores em possíveis conflitos internos, ajudando a manter um ambiente de trabalho harmonioso e produtivo.</li>
                            </ul>",
                            "img" => "imagens/main/lps/1.webp",
                        ],
                        "planejamento-e-estrategia" => [
                            "title" => "Planejamento e Estratégia",
                            "flex" => "reverse-flex",
                            "content" => "<ul class='disc-list pl-15'>
                                <li>Nosso serviço vai além da contabilidade tradicional. Oferecemos uma abordagem estratégica para garantir que sua empresa esteja sempre um passo à frente. Desde o planejamento inicial até a execução, estamos ao seu lado em cada etapa.</li>
                                <li>Planejamento Financeiro: Desenvolvemos um plano financeiro detalhado que inclui projeções de vendas, estimativas de despesas e análise de rentabilidade.</li>
                                <li>Estratégia de Crescimento: Identificamos oportunidades de crescimento e desenvolvemos estratégias personalizadas para maximizar seu potencial de lucro.</li>
                                <li>Proteção de Ativos: Implementamos estratégias legais para proteger seus ativos pessoais e empresariais contra riscos financeiros.</li>
                            </ul>",
                            "img" => "imagens/main/lps/2.webp",
                        ],
                        "servicos-de-abertura-de-empresa" => [
                            "title" => "Serviços de Abertura de Empresa",
                            "flex" => "normal-flex",
                            "content" => "<p>Estrutura Completa do Planejamento ao CNPJ: Cuidamos de todos os aspectos legais e operacionais para que você possa focar no crescimento do seu negócio.</p>
                            <p>Planejamento Jurídico: Garantimos que sua empresa esteja em conformidade com todas as regulamentações legais.</p>
                            <p>Procedimentos Legais: Tratamos de toda a documentação necessária para a abertura da sua empresa.</p>
                            <p>Gestão Operacional: Desenvolvemos e implementamos processos operacionais eficientes para otimizar suas operações diárias.</p>",
                            "img" => "imagens/main/lps/3.webp",
                        ],
                        "suporte-especializado" => [
                            "title" => "Suporte Especializado",
                            "flex" => "reverse-flex",
                            "content" => "<p>Para setores específicos como bares, restaurantes, padarias e pizzarias, escolas e empresas que participam de licitação pública, oferecemos um suporte especializado que atende às suas necessidades exclusivas, incluindo atendimento noturno.</p>
                            <ul class='disc-list pl-15'>
                                <li>Relatórios de Taxas Bancárias e Custos Fixos: Fornecemos relatórios detalhados que ajudam você a entender e controlar seus custos operacionais.</li>
                                <li>Gestão de Funcionários: Oferecemos treinamento contínuo e suporte para garantir que sua equipe esteja sempre alinhada com os objetivos da empresa.</li>
                                <li>Apoio em Contas a Pagar e Receber: Ajudamos você a gerenciar suas finanças de forma eficiente, garantindo que todas as contas sejam pagas e recebidas em dia.</li>
                            </ul>",
                            "img" => "imagens/main/lps/4.webp",
                        ],
                        "mais-alguns-diferenciais" => [
                            "title" => "Mais alguns diferenciais.",
                            "flex" => "normal-flex",
                            "content" => "<p>Acompanhamento através de cálculos como:</p>
                            <ul class='disc-list pl-15'>
                                <li>Quanto vale a sua empresa;</li>
                                <li>Custos de operação e serviços;</li>
                                <li>Custos por colaborador;</li>
                                <li>Plano de carreira;</li>
                                <li>Planejamento de compras;</li>
                                <li>Detalhamento de processos;</li>
                                <li>Licenças de funcionamento;</li>
                                <li>Conduzimos a negociação para a venda de sua empresa.</li>
                            </ul>",
                            "img" => "imagens/main/lps/5.webp",
                        ],
                    ];
                    foreach ($boxes as $key => $value) : ?>
                        <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
                            <div class="bg-main boxes-<?= $value['flex']; ?> full-content">
                                <div class="text">
                                    <h3 class="c-sec"><?= $value['title']; ?></h3>
                                    <div class="content c-white">
                                        <?= $value['content']; ?>
                                    </div>
                                </div>
                                <div class="box-img">
                                    <img src="<?= $value['img']; ?>" alt="<?= $value['title']; ?>" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
                        <div class="box-buttons">
                            <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Cards Vermelhos Horizontais - <?= $h1; ?>">ENTRE EM CONTATO</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="videos" class="padding-40-0">
            <div class="container">
                <div class="flex">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <h2 class="c-main text-center">O que nossos clientes costumam dizer:</h2>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-30">
                        <div class="box-video">
                            <div class="youtube-thumbnail-wrapper" onclick="loadYoutubeIframe(this)" data-video-id="4068SwlbWtw">
                                <img
                                    src="https://img.youtube.com/vi/4068SwlbWtw/maxresdefault.jpg"
                                    alt="Assista ao vídeo"
                                    loading="lazy"
                                    title="Vídeo do institucional">
                                <div class="youtube-play-button">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 mt-30">
                        <div class="box-video">
                            <div class="youtube-thumbnail-wrapper" onclick="loadYoutubeIframe(this)" data-video-id="xIMRtAfAT7Y">
                                <img
                                    src="https://img.youtube.com/vi/xIMRtAfAT7Y/maxresdefault.jpg"
                                    alt="Assista ao vídeo"
                                    loading="lazy"
                                    title="Vídeo do institucional">
                                <div class="youtube-play-button">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $counters = [
                        "1" => [
                            "title" => "30",
                            "text" => "Anos de<br>experiência"
                        ],
                        "2" => [
                            "title" => "+800",
                            "text" => "Empresas<br>regularizadas"
                        ],
                        "3" => [
                            "title" => "+300",
                            "text" => "Clientes<br>satisfeitos"
                        ],
                    ];
                    foreach ($counters as $key => $value) : ?>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 padding-40-0 mt-30 mobile-config-counter">
                            <div class="counters c-main text-center">
                                <h3><?= $value['title']; ?></h3>
                                <p><?= $value['text']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section id="gray-bg" class="padding-40-0">
            <div class="container">
                <div class="flex">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-Xs-12 text-center">
                        <h2 class="c-main">O único levantamento que não conseguimos te entregar: nossa quantidade exata de casos de sucesso.</h2>
                        <p>Quem faz a contabilidade conosco, acorda mais tranquilo. Conheça algumas histórias:</p>
                    </div>
                    <?php
                    $red_yellow_cards = [
                        "1" => [
                            "title" => "Recuperação de<br>Impostos em Osasco/SP",
                            "content" => "<p><strong>Desafio:</strong> Um colégio em Osasco estava recolhendo impostos indevidamente.</p>
                            <p><strong>Solução:</strong> Realizamos um mapeamento completo da empresa e recuperamos mais de R$ 50 mil em impostos.</p>
                            <p><strong>Resultado:</strong> O colégio recuperou os valores devidos.</p>",
                        ],
                        "2" => [
                            "title" => "Suporte Contábil para<br>Consultório Médico",
                            "content" => "<p><strong>Desafio:</strong> Um consultório médico enfrentava multas devido à falta de entrega de declarações pela contabilidade tradicional.</p>
                            <p><strong>Solução:</strong> Assumimos a contabilidade, entregando as declarações corretamente e oferecendo um canal exclusivo de atendimento.</p>
                            <p><strong>Resultado:</strong> O consultório deixou de pagar multas indevidas e agora tem suporte contínuo para suas dúvidas contábeis.</p>",
                        ],
                        "3" => [
                            "title" => "Licitação Pública<br>Sem Impedimentos",
                            "content" => "<p><strong>Desafio:</strong> Um cliente que participava de licitações públicas não conseguia o balanço a tempo, impedindo a participação.</p>
                            <p><strong>Solução:</strong> Fizemos o balanço a tempo, permitindo que o cliente participasse da licitação.</p>
                            <p><strong>Resultado:</strong> O cliente não perdeu contratos importantes e agora tem uma contabilidade pontual.</p>",
                        ],
                        "4" => [
                            "title" => "Apoio à Equipe de<br>Trabalho",
                            "content" => "<p><strong>Desafio:</strong> Um cliente enfrentava desafios com a gestão de sua equipe.</p>
                            <p><strong>Solução:</strong> Oferecemos treinamento e suporte para as rotinas diárias da equipe.</p>
                            <p><strong>Resultado:</strong> O cliente melhorou a eficiência e o desempenho de sua equipe.</p>",
                        ],
                        "5" => [
                            "title" => "Redução de Custos com a<br>Folha de Pagamento",
                            "content" => "<p><strong>Desafio:</strong> Um cliente precisava aumentar os lucros sem dispensar funcionários.</p>
                            <p><strong>Solução:</strong> Realizamos uma auditoria na folha de pagamento e reduzimos os custos em 20% dentro da lei.</p>
                            <p><strong>Resultado:</strong> O cliente conseguiu aumentar a lucratividade sem perder funcionários.</p>",
                        ],
                        "6" => [
                            "title" => "Transformação de<br>Restaurante",
                            "content" => "<p><strong>Desafio:</strong> Um restaurante precisava de atendimento noturno e gestão financeira eficiente.</p>
                            <p><strong>Solução:</strong> Oferecemos treinamento de equipe, planilhas de acompanhamento financeiro, gestão de funcionários e estratégias para aumento de lucro.</p>
                            <p><strong>Resultado:</strong> O faturamento do restaurante triplicou e a gestão financeira foi otimizada.</p>",
                        ],
                    ];
                    foreach ($red_yellow_cards as $key => $value) : ?>
                        <div class="col-md-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="cards bg-main">
                                <h3 class="c-sec"><?= $value["title"]; ?></h3>
                                <div class="card-content">
                                    <?= $value['content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="box-buttons">
                        <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Seção cases de Sucesso - <?= $h1; ?>">ENTRE EM CONTATO</a>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <h2 class="c-main text-center">Para Quem São os Serviços da Keeper</h2>
                    </div>
                    <?php
                    $whiteCards = [
                        "1" => [
                            "icon" => "<i class='fa-solid fa-users-line'></i>",
                            "title" => "Associações",
                            "content" => "<p>O crescimento de uma organização sem fins lucrativos depende de uma gestão administrativa com conhecimento e direcionamento adequados.</p>
                            <p>Atendemos associações com objetivos variados, tais como:</p>
                            <ul class='disc-list'>
                                <li>Representação de Categorias</li>
                                <li>Instituições Religiosas</li>
                                <li>Entidades de Benefício Mútuo</li>
                                <li>Associações com Objetivos Sociais</li>
                            </ul>
                            <p>Além das obrigações tradicionais, auxiliamos na organização das finanças, prestação de contas aos associados e apresentação do balanço patrimonial, garantindo transparência e eficiência na gestão.</p>",
                        ],
                        "2" => [
                            "icon" => "<i class='fa-solid fa-screwdriver-wrench'></i>",
                            "title" => "Prestadores de Serviços",
                            "content" => "<p>Para você que é prestador de serviços, facilitamos o seu dia a dia com:</p>
                            <ul class='disc-list'>
                                <li>Emissão de Notas</li>
                                <li>Movimentação Bancária</li>
                                <li>Emissão de Guias</li>
                            </ul>
                            <p>Tratamos de tudo que é importante para que você possa focar no que faz de melhor, enquanto cuidamos das suas necessidades contábeis.</p>",
                        ],
                        "3" => [
                            "icon" => "<i class='fa-solid fa-briefcase'></i>",
                            "title" => "Comércio",
                            "content" => "<p>Nossa área de assessoria fiscal e tributária busca estratégias legais dentro da legislação vigente para auxiliar seu comércio a economizar no pagamento de tributos. Oferecemos:</p>
                            <ul class='disc-list'>
                                <li>Cumprimento das Obrigações Contábeis</li>
                                <li>Apuração de Impostos</li>
                                <li>Consultoria para Segurança do Desempenho</li>
                            </ul>
                            <p>Com estratégias de negócio personalizadas e assertivas, ajudamos seu comércio a crescer de forma sustentável.</p>",
                        ],
                        "4" => [
                            "icon" => "<i class='fa-solid fa-industry'></i>",
                            "title" => "Indústrias",
                            "content" => "<p>A contabilidade é fundamental para o sucesso de qualquer indústria. É preciso manter as finanças em ordem, cumprir as obrigações fiscais e trabalhistas e garantir uma gestão eficiente dos recursos.</p>
                            <p>Nossos serviços personalizados incluem:</p>
                            <ul class='disc-list'>
                                <li>Soluções Inteligentes e Tecnológicas</li>
                                <li>Agilidade e Segurança</li>
                                <li>Gestão Eficiente dos Recursos</li>
                            </ul>
                            <p>Conte com a expertise de uma equipe qualificada para alcançar o sucesso financeiro da sua indústria.</p>",
                        ],
                    ];
                    foreach ($whiteCards as $key => $value) : ?>
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="card-white">
                                <div class="box-icon c-main">
                                    <?= $value['icon']; ?>
                                </div>
                                <h3 class="c-main"><?= $value['title']; ?></h3>
                                <div class="text">
                                    <?= $value['content']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                        <p>Conte com a expertise de uma equipe qualificada para alcançar o sucesso financeiro da sua indústria.<br>Entre outros.</p>
                        <div class="box-buttons center-div">
                            <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Serviços - <?= $h1; ?>">ENTRE EM CONTATO</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="red-bg" class="padding-40-0">
            <div class="container">
                <div class="flex padding-40-0">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="c-white">
                            <h2>Sobre nós</h2>
                            <p>Com profissionais experientes, proativos e com especialização em várias áreas, todos os atendimentos são feitos com seriedade, respeito e excelência.</p>
                            <p>Além disso, cada profissional passa por treinamentos constantes para atender a todos os tipos de necessidades dos clientes durante todas as etapas dos projetos desenvolvidos de forma ágil e segura.</p>
                            <p>Nosso trabalho conquistou seu espaço no mercado e hoje, está entre os líderes na atuação empresarial.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="box-img">
                            <img src="<?= $url; ?>imagens/main/lps/about-us.webp" alt="Sobre Nós" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="flex mt-30 up-ai">
                    <?php
                    $arrayMVV = [
                        "1" => [
                            "title" => "Nossa Missão",
                            "text" => "<p>Promover o desenvolvimento pleno de nossos clientes, proporcionando soluções inovadoras para o alcance de potencial e resultados de excelência.</p>",
                        ],
                        "2" => [
                            "title" => "Nossa Visão",
                            "text" => "<p>Ser uma empresa líder em inteligência financeira e de gestão de empresas</p>",
                        ],
                        "3" => [
                            "title" => "Nossos Objetivos",
                            "text" => "<ul class='pl-15'>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Integração</li>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Resultados</li>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Desenvolvimento</li>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Sustentável</li>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Seriedade e Respeito em todas as Etapas</li>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Prontidão para mudanças</li>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Empreendedorismo e Inovação</li>
                                <li><b class='c-sec'><i class='fa-solid fa-circle-check'></i></b> Crescimento e Evolução</li>
                            </ul>",
                        ],
                    ];
                    foreach ($arrayMVV as $key => $value) : ?>
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="box-text c-white">
                                <h3><?= $value['title']; ?></h3>
                                <div class="content">
                                    <?= $value['text']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <section id="black-bg" class="padding-40-0">
            <div class="container">
                <div class="flex">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <h2 class="c-white text-center">PERGUNTAS FREQUENTES</h2>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="accordion">
                            <?php
                            $quests = [
                                "1" => [
                                    "title" => "Como a Keeper Contabilidade pode me ajudar a abrir uma nova empresa?",
                                    "text" => "A Keeper oferece uma estrutura completa do planejamento ao CNPJ, incluindo planejamento financeiro, gestão operacional e procedimentos legais. Cuidamos de toda a documentação necessária e garantimos que sua empresa esteja em conformidade com todas as regulamentações, permitindo que você foque no crescimento do seu negócio.",
                                ],
                                "2" => [
                                    "title" => "Como funciona o suporte noturno para bares e restaurantes?",
                                    "text" => "Oferecemos suporte noturno especializado para bares, restaurantes, padarias, pizzarias e escolas. Isso garante que você tenha acesso à orientação completa e ao suporte necessário, permitindo uma gestão eficiente e contínua das suas operações, incluindo o gerenciamento de licenças de funcionários e outros aspectos críticos do dia a dia.",
                                ],
                                "3" => [
                                    "title" => "O que diferencia a Keeper Contabilidade das contabilidades tradicionais?",
                                    "text" => "A Keeper utiliza tecnologia moderna para comunicação e gestão, oferecendo um suporte completo que vai além da simples geração de guias de impostos. Fornecemos consultoria estratégica, planejamento financeiro e gestão operacional, garantindo respostas rápidas e soluções eficazes.",
                                ],
                                "4" => [
                                    "title" => "Quanto tempo leva para ver resultados com os serviços da Keeper?",
                                    "text" => "O tempo para ver resultados pode variar dependendo do serviço contratado. Para a abertura de uma nova empresa, oferecemos opções de apenas o CNPJ em 15 dias ou o projeto completo + CNPJ em 30 dias úteis. Outros serviços podem depender da análise específica do caso, mas estamos comprometidos em entregar resultados o mais rápido possível.",
                                ],
                                "5" => [
                                    "title" => "A Keeper Contabilidade pode ajudar minha empresa a economizar em impostos?",
                                    "text" => "Sim, nossa área de assessoria fiscal e tributária busca estratégias legais dentro da legislação vigente para auxiliar sua empresa a economizar no pagamento de tributos. Oferecemos consultoria contínua para assegurar a segurança do desempenho do seu negócio e identificar oportunidades de redução de custos.",
                                ],
                                "6" => [
                                    "title" => "Como é o atendimento personalizado da Keeper Contabilidade?",
                                    "text" => "Mapeamos sua empresa, identificamos possíveis problemas, sugerimos soluções adequadas e acompanhamos seus processos internos por meio de reuniões trimestrais.",
                                ],
                                "7" => [
                                    "title" => "E se eu já tiver um contador, por que devo mudar para a Keeper?",
                                    "text" => "A Keeper oferece uma abordagem moderna e estratégica que vai além da contabilidade tradicional. Utilizamos tecnologia de ponta para garantir comunicação eficiente e suporte contínuo, ajudando você a evitar erros comuns que podem custar caro, como perda de prazos importantes ou falta de orientação estratégica. Além disso, nossos casos de sucesso comprovam a eficácia dos nossos serviços em aumentar lucros e reduzir custos. Nosso Método Esmeralda complementa essa abordagem, proporcionando um acompanhamento ainda mais detalhado e personalizado para otimizar os resultados da sua empresa.",
                                ],
                                "8" => [
                                    "title" => "Como é o apoio da Keeper para instituição de ensino?",
                                    "text" => "Oferecemos orientação completa sobre a documentação necessária para envio à diretoria de ensino, secretária da educação ou MEC.",
                                ],
                                "9" => [
                                    "title" => "A Keeper auxilia na obtenção de licença para financiamento?",
                                    "text" => "Sim, oferecemos suporte completo nesse processo.",
                                ],
                                "10" => [
                                    "title" => "A Keeper cobrará uma taxa adicional se eu não conseguir pagar a guia do mês de algum imposto e precisar gerar uma nova?",
                                    "text" => "Não, não haverá cobrança adicional.",
                                ],
                                "11" => [
                                    "title" => "Qual é a documentação e o processo para trocar de contabilidade?",
                                    "text" => "Hoje em dia, é muito fácil trocar de contador, desde que a contabilidade atual esteja em dia. A maioria das informações necessárias pode ser obtida pelo E-Social. Em relação aos funcionários, tudo o que precisamos é do certificado digital e das senhas de acesso à prefeitura, ao empregador web, entre outros sistemas.",
                                ],
                            ];
                            foreach ($quests as $key => $value) : ?>
                                <div class="accordion-item">
                                    <button class="accordion-header">
                                        <span><?= $value['title']; ?></span>
                                        <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                    </button>
                                    <div class="accordion-body">
                                        <p><?= $value['text']; ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="box-buttons center-div">
                                <a href="<?= $unidades[1]['link_wpp'] . $msg_padrao_wpp; ?>" class="sec-btn" title="Entre em Contato" data-click-track="Entre em Contato - Perguntas Frequentes - <?= $h1; ?>">ENTRE EM CONTATO</a>
                            </div>
                        </div>
                    </div>
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

    <!--!ACCORDION-->
    <script>
        const headers = document.querySelectorAll('.accordion-header');

        headers.forEach(header => {
            header.addEventListener('click', () => {
                const item = header.parentElement;
                item.classList.toggle('active');

                // Fecha os outros se quiser comportamento tipo "um aberto por vez"
                document.querySelectorAll('.accordion-item').forEach(i => {
                    if (i !== item) i.classList.remove('active');
                });
            });
        });
    </script>

    <script>
        function loadYoutubeIframe(element) {
            const videoId = element.getAttribute('data-video-id');
            const iframe = document.createElement('iframe');
            iframe.setAttribute('width', '560');
            iframe.setAttribute('height', '315');
            iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}?autoplay=1`);
            iframe.setAttribute('title', 'YouTube video player');
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
            iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
            iframe.setAttribute('allowfullscreen', '');
            element.replaceWith(iframe);
        }
    </script>
</body>

</html>