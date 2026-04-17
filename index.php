<?php

$h1           = "Home";
$title         = "Assessoria e Contabilidade Empresarial";
$description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados."; // Manter entre 130 a 160 caracteres
$keywords    = $title;
$is_home     = true;

// Perguntas frequentes — usadas no schema FAQPage e na seção visual
$faqs = [
    [
        'q' => 'Por que devo contratar o Grupo Keeper?',
        'a' => 'Nossos serviços garantem que sua empresa esteja regularizada, pagando menos impostos dentro da lei e mantendo as finanças organizadas. Além disso, oferecemos suporte estratégico para o crescimento do seu negócio com mais de 30 anos de experiência.',
    ],
    [
        'q' => 'Como o Grupo Keeper pode ajudar a reduzir custos e aumentar os lucros?',
        'a' => 'Fazemos planejamento tributário eficiente, ajudando sua empresa a pagar apenas os impostos necessários, evitando multas e otimizando recursos financeiros com análise personalizada por setor.',
    ],
    [
        'q' => 'Quais são os riscos de não ter um serviço contábil especializado?',
        'a' => 'Sem um contador especializado, sua empresa pode enfrentar problemas fiscais, pagamento excessivo de impostos ou multas por não cumprimento de obrigações legais. Erros na folha de pagamento também podem gerar passivos trabalhistas.',
    ],
    [
        'q' => 'Como funciona o processo de contratação e quais são os primeiros passos?',
        'a' => 'O processo é simples! Primeiro, fazemos um diagnóstico gratuito, identificamos suas necessidades e propomos a melhor solução contábil para sua empresa. A migração pode ser feita sem burocracia e sem impacto nas suas operações.',
    ],
    [
        'q' => 'O Grupo Keeper atende empresas de quais segmentos?',
        'a' => 'Atendemos empresas de todos os setores: comércio, indústria, prestadores de serviços, escolas, restaurantes, startups, e-commerce, médicos e pessoas físicas. Somos especialistas em soluções contábeis e consultivas personalizadas.',
    ],
    [
        'q' => 'O Grupo Keeper oferece serviços de BPO Financeiro?',
        'a' => 'Sim! Nosso BPO Financeiro inclui controle de fluxo de caixa, contas a pagar e receber, conciliação bancária e relatórios gerenciais para apoiar as decisões estratégicas do seu negócio.',
    ],
];

// Avaliações — usadas no schema AggregateRating e na seção visual
$avaliacoes = [
    [
        'nome'   => 'Clerbe Martins',
        'cidade' => 'São Paulo',
        'nota'   => 5,
        'cargo'  => 'Diretor — CEAS',
        'texto'  => 'Eu nunca vi uma parceria como o Grupo Keeper faz. Já trabalhei em escolas do estado, em outras escolas particulares, fora do país também — não existe esse tipo de parceria, ainda mais com uma empresa de contabilidade. Não é comum.',
    ],
    [
        'nome'   => 'Carlos Maciel',
        'cidade' => 'São Paulo',
        'nota'   => 5,
        'cargo'  => 'Diretor — Educativa',
        'texto'  => 'O Grupo Keeper tem trazido novas esperanças, uma nova organização e a certeza de que podemos contar com alguém que está pronto para nos auxiliar com capacidade técnica, conhecimento e inteligência emocional.',
    ],
    [
        'nome'   => 'Tereza Rampazzo',
        'cidade' => 'Guarulhos',
        'nota'   => 5,
        'cargo'  => 'Empresária',
        'texto'  => 'Equipe altamente competente, sempre pronta a atender qualquer situação ou dúvida. Grupo Keeper — profissionais de confiança, indico a todos.',
    ],
    [
        'nome'   => 'Celso',
        'cidade' => 'Guarulhos',
        'nota'   => 5,
        'cargo'  => 'Proprietário — Amarelinho Bar',
        'texto'  => 'Eu quero indicar os serviços do Grupo Keeper, um grupo de assessoria contábil e administrativa que vai auxiliar a dar direção para o seu comércio. A Kelly e o Ricardo dão uma luz para o que você realmente precisa dentro do seu negócio.',
    ],
];

include "includes/_configuracoes.php";
include "includes/config-blog.php";
$borg->cssCompress(array(
    "paginas/home",
));
?>
<?php include "includes/schema-faq.php"; ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "@id": "<?= $url ?>#localbusiness",
  "name": "<?= $nome_empresa ?>",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "<?= count($avaliacoes) ?>",
    "bestRating": "5",
    "worstRating": "1"
  }
}
</script>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <!-- HERO PRINCIPAL -->
        <section id="hero">
            <div class="container hero-content-wrap">
                <div class="hero-inner">

                    <!-- Coluna esquerda: texto -->
                    <div class="hero-text">
                        <div class="hero-badge">
                            <span class="hero-badge-line" aria-hidden="true"></span>
                            Assessoria Empresarial · Guarulhos &amp; SP
                        </div>
                        <h1 class="hero-title">
                            Sua empresa <span>crescendo</span><br>
                            com inteligência financeira
                        </h1>
                        <p class="hero-subtitle">
                            Há 30 anos transformamos a gestão de empresas com metodologia exclusiva de reestruturação, planejamento tributário e blindagem patrimonial.
                        </p>
                        <div class="hero-actions">
                            <a data-click-track="Serviços - Home - Hero" href="<?= $url ?>servicos" title="Ver nossos serviços" class="hero-btn-primary">
                                Ver Serviços
                            </a>
                            <a data-click-track="WhatsApp - Home - Hero" href="<?= $unidades[1]['link_wpp'] ?>" title="Falar com especialista" target="_blank" class="hero-btn-secondary">
                                Falar com Especialista
                            </a>
                        </div>
                    </div>

                    <!-- Coluna direita: cards de métricas -->
                    <div class="hero-metrics">
                        <div class="hero-metrics-grid">
                            <div class="hero-metric-card">
                                <strong>30<sup>+</sup></strong>
                                <span>anos de experiência</span>
                            </div>
                            <div class="hero-metric-card">
                                <strong>500<sup>+</sup></strong>
                                <span>empresas atendidas</span>
                            </div>
                            <div class="hero-metric-card">
                                <strong>100<sup>%</sup></strong>
                                <span>atendimento personalizado</span>
                            </div>
                            <div class="hero-metric-card">
                                <strong>15<sup>+</sup></strong>
                                <span>áreas de atuação</span>
                            </div>
                        </div>
                        <div class="hero-trust-card">
                            <div class="hero-trust-icon">
                                <i class="fa-solid fa-award" aria-hidden="true"></i>
                            </div>
                            <div class="hero-trust-text">
                                <strong>Prêmio Quality — Honra ao Mérito</strong>
                                <span>CRC ativo · Guarulhos e São Paulo · Atendimento nacional</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- <section id="diferenciais">
            <div class="container">
                <div class="flex">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element">
                        <div class="dif-container">
                            <div class="dif-icon">
                                <i class="fa-solid fa-table"></i>
                            </div>
                            <div class="dif-desc">
                                <h2>Teste Disc</h2>
                                <p>O Grupo Keeper o teste disc com base no perfil comportamental.</p>
                            </div>
                        </div>
                        <div class="dif-btn">
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSeqv-vIJzSR7q_P0MFaZlJ3_6MkjxAHbTDyWFeajc0GD5NL5w/viewform" target="_blank">Veja Mais <i class="fa-regular fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element">
                        <div class="dif-container">
                            <div class="dif-icon">
                                <i class="fa-solid fa-calculator"></i>
                            </div>
                            <div class="dif-desc">
                                <h2>Calculadora de Salário Líquido</h2>
                                <p>Faça o cálculo dos decontos e veja quanto é o salário CLT.</p>
                            </div>
                        </div>
                        <div class="dif-btn">
                            <a href="<?= $url ?>calculadora-salario">Veja Mais <i class="fa-regular fa-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 element">
                        <div class="dif-container">
                            <div class="dif-icon">
                                <i class="fa-solid fa-person-cane"></i>
                            </div>
                            <div class="dif-desc">
                                <h2>Calculadora para salário de professores</h2>
                                <p>Faça o cálculo e veja quanto é o salário de professores.</p>
                            </div>
                        </div>
                        <div class="dif-btn">
                            <a href="<?= $url ?>calculadora-professores">Leia Mais <i class="fa-regular fa-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- BARRA DE CONFIANÇA -->
        <div id="stats-bar" aria-label="Credenciais Grupo Keeper">
            <div class="container">
                <ul class="trust-list">
                    <li><span class="trust-dot" aria-hidden="true"></span>Prêmio Quality</li>
                    <li><span class="trust-dot" aria-hidden="true"></span>CRC Ativo</li>
                    <li><span class="trust-dot" aria-hidden="true"></span>30 Anos de Mercado</li>
                    <li><span class="trust-dot" aria-hidden="true"></span>Guarulhos · São Paulo</li>
                    <li><span class="trust-dot" aria-hidden="true"></span>Atendimento Nacional</li>
                </ul>
            </div>
        </div>

        <section id="servicos">
            <div class="container">
                <div class="serv-header">
                    <div class="serv-header-left">
                        <span class="section-label">O QUE FAZEMOS</span>
                        <h2>Soluções completas<br>para sua empresa</h2>
                    </div>
                    <p class="serv-header-desc">Do planejamento estratégico ao cumprimento das obrigações legais — atuamos em todas as frentes que impactam o desempenho do seu negócio.</p>
                </div>
                <?php
                $servicos_featured = [
                    'contabil-fiscal'                                => ['title'=>'Contábil / Fiscal',              'icon'=>'fa-file-invoice-dollar', 'desc'=>'Escrituração completa, apuração de tributos e cumprimento de todas as obrigações acessórias com precisão e agilidade.'],
                    'bpo-financeiro'                                 => ['title'=>'BPO Financeiro',                 'icon'=>'fa-coins',               'desc'=>'Terceirização completa do departamento financeiro: contas a pagar, receber, fluxo de caixa e relatórios gerenciais.'],
                    'departamento-pessoal'                           => ['title'=>'Departamento Pessoal',           'icon'=>'fa-users',               'desc'=>'Folha de pagamento, admissão, demissão, férias e encargos com total conformidade com a legislação trabalhista.'],
                    'reestruturacao-empresarial'                     => ['title'=>'Reestruturação Empresarial',     'icon'=>'fa-chart-column',        'desc'=>'Diagnóstico e metodologia exclusiva para reorganizar processos e impulsionar o desempenho financeiro e operacional.'],
                    'blindagem-de-patrimonio'                        => ['title'=>'Blindagem de Patrimônio',        'icon'=>'fa-shield-halved',       'desc'=>'Holding familiar e patrimonial para proteger e organizar seu patrimônio com máxima eficiência tributária.'],
                    'assessoria-em-investimentos-e-financiamentos'   => ['title'=>'Assessoria em Investimentos',   'icon'=>'fa-arrow-trend-up',      'desc'=>'Estratégias de investimento e financiamento alinhadas aos objetivos de crescimento sustentável do seu negócio.'],
                ];
                ?>
                <div class="serv-icon-grid">
                <?php
                $servicos = [
                    'regularizacao-empresarial' => [
                        'name' => 'regularizacao-empresarial',
                        'title' => 'Regularização empresarial',
                        'img' => 'imagens/main/servicos/regularizacao-empresarial.webp',
                    ],
                    'departamento-pessoal' => [
                        'name' => 'departamento-pessoal',
                        'title' => 'Departamento pessoal',
                        'img' => 'imagens/main/servicos/departamento-pessoal.webp',
                    ],
                    'contabil-fiscal' => [
                        'name' => 'contabil-fiscal',
                        'title' => 'Contábil / Fiscal',
                        'img' => 'imagens/main/servicos/contabil-fiscal.webp',
                    ],
                    'recursos-humanos' => [
                        'name' => 'recursos-humanos',
                        'title' => 'Recursos Humanos',
                        'img' => 'imagens/main/servicos/recursos-humanos.webp',
                    ],
                    'treinamento-personalizado' => [
                        'name' => 'treinamento-personalizado',
                        'title' => 'Treinamento personalizado',
                        'img' => 'imagens/main/servicos/treinamento-personalizado.webp',
                    ],
                    'bpo-financeiro' => [
                        'name' => 'bpo-financeiro',
                        'title' => 'BPO Financeiro',
                        'img' => 'imagens/main/servicos/bpo-financeiro.webp',
                    ],
                    'assessoria-em-investimentos-e-financiamentos' => [
                        'name' => 'assessoria-em-investimentos-e-financiamentos',
                        'title' => 'Assessoria em investimentos e financiamentos',
                        'img' => 'imagens/main/servicos/assessoria-em-investimentos-e-financiamentos.webp',
                    ],
                    'gestao-de-riscos-e-controles-internos' => [
                        'name' => 'gestao-de-riscos-e-controles-internos',
                        'title' => 'Gestão de riscos e controles internos',
                        'img' => 'imagens/main/servicos/gestao-de-riscos-e-controles-internos.webp',
                    ],
                    'reducao-de-custos' => [
                        'name' => 'reducao-de-custos',
                        'title' => 'Redução de custos',
                        'img' => 'imagens/main/servicos/reducao-de-custos.webp',
                    ],
                    'blindagem-de-patrimonio' => [
                        'name' => 'blindagem-de-patrimonio',
                        'title' => 'Blindagem de patrimônio',
                        'img' => 'imagens/main/servicos/blindagem-de-patrimonio.webp',
                    ],
                    'avaliacao-da-empresa' => [
                        'name' => 'avaliacao-da-empresa',
                        'title' => 'Avaliação da empresa',
                        'img' => 'imagens/main/servicos/avaliacao-da-empresa.webp',
                    ],
                    'solucao-de-conflitos-corporativos' => [
                        'name' => 'soluçao-de-conflitos-corporativos',
                        'title' => 'Solução de conflitos corporativos',
                        'img' => 'imagens/main/servicos/solucao-de-conflitos-corporativos.webp',
                    ],
                    'encerramento-de-empresas-com-diferencial-estrategico' => [
                        'name' => 'encerramento-de-empresas-com-diferencial-estrategico',
                        'title' => 'Encerramento de empresas com diferencial estratégico',
                        'img' => 'imagens/main/servicos/encerramento-de-empresas-com-diferencial-estrategico.webp',
                    ],
                    'reestruturacao-empresarial' => [
                        'name' => 'reestruturacao-empresarial',
                        'title' => 'Reestruturação empresarial',
                        'img' => 'imagens/main/servicos/reestruturacao-empresarial.webp',
                    ],
                    'negocios-empresariais' => [
                        'name' => 'negocios-empresariais',
                        'title' => 'Negócios Empresariais',
                        'img' => 'imagens/main/servicos/negocios-empresariais.webp',
                    ],
                    // 'certificado-digital' => [
                    //     'name' => 'certificado-digital',
                    //     'title' => 'Certificado digital',
                    //     'img' => 'imagens/main/servicos/certificado-digital.webp',
                    // ],
                    'pessoa-fisica' => [
                        'name' => 'pessoa-fisica',
                        'title' => 'Pessoa Física',
                        'img' => 'imagens/main/servicos/pessoa-fisica.webp',
                    ],
                ]
                ?>
                <?php foreach ($servicos_featured as $key => $serv): ?>
                    <div class="serv-icon-card">
                        <div class="serv-icon-box">
                            <i class="fa-solid <?= $serv['icon'] ?>" aria-hidden="true"></i>
                        </div>
                        <h3><?= htmlspecialchars($serv['title']) ?></h3>
                        <p><?= htmlspecialchars($serv['desc']) ?></p>
                        <a href="<?= $url ?>servicos/<?= $key ?>" title="<?= htmlspecialchars($serv['title']) ?>" class="serv-icon-link">
                            Saiba mais <span aria-hidden="true">→</span>
                        </a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </section>
        <div id="timeline">
            <div class="container">
                <div class="divider">
                    <div class="flex">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-xl-8 element">
                            <p style="text-transform: uppercase;"><span>Entre em contato com nossos consultores</span> e agende uma reunião informativa</p>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-xl-4 element">
                            <a data-click-track="WhatsApp - orçamento - Blog" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Agendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="about">
            <div class="container">
                <div class="about-inner">

                    <!-- Coluna esquerda: imagem -->
                    <div class="about-img-col">
                        <div class="about-img-wrap">
                            <img width="657" height="438" loading="lazy"
                                 class="about-photo"
                                 src="<?php echo $url ?>imagens/main/sobre/2.webp"
                                 alt="Equipe Grupo Keeper" title="Sobre o Grupo Keeper">
                            <div class="about-badge">
                                <span class="about-badge-num">30<sup>+</sup></span>
                                <span class="about-badge-txt">anos de<br>experiência</span>
                            </div>
                        </div>
                    </div>

                    <!-- Coluna direita: texto -->
                    <div class="about-text-col">
                        <span class="section-label">QUEM SOMOS</span>
                        <h2 class="about-title">Parceiros estratégicos<br>do seu negócio</h2>
                        <p class="about-lead">Com 30 anos de experiência, o Grupo Keeper oferece assessoria e consultoria empresarial em todo o Brasil — ajudando empresas a reduzir custos, planejar estrategicamente e maximizar resultados.</p>
                        <p class="about-body">Nosso time multidisciplinar atua diretamente com gestores para prevenir riscos, identificar oportunidades e fortalecer equipes. Independentemente do seu nicho, simplificamos a gestão contábil sem abrir mão das obrigações legais.</p>

                        <div class="about-highlights">
                            <div class="about-hl">
                                <i class="fa-solid fa-award" aria-hidden="true"></i>
                                <span>Prêmio Quality — Honra ao Mérito</span>
                            </div>
                            <div class="about-hl">
                                <i class="fa-solid fa-users" aria-hidden="true"></i>
                                <span>+500 empresas atendidas em todo o Brasil</span>
                            </div>
                            <div class="about-hl">
                                <i class="fa-solid fa-shield-halved" aria-hidden="true"></i>
                                <span>CRC ativo · Guarulhos e São Paulo</span>
                            </div>
                        </div>

                        <div class="about-actions">
                            <a href="<?= $url ?>quem-somos" title="Conheça nossa história" class="about-btn-primary">
                                Nossa história <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                            </a>
                            <a href="<?= $unidades[1]['link_wpp'] ?>" target="_blank" title="Fale com a equipe" class="about-btn-secondary" data-click-track="WhatsApp - Quem Somos - Home">
                                Fale com a equipe
                            </a>
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
                            <a title="Terra" href="https://www.terra.com.br/noticias/uso-da-inteligencia-artificial-cresce-no-meio-contabil,a08312466f64d6780394420618217d08fz0esq9s.html">
                                <img loading="lazy" width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/terra.webp" alt="Terra" title="Terra">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="midia-img">
                            <a title="O Globo" href="https://oglobo.globo.com/patrocinado/dino/noticia/2023/06/abertura-de-escolas-requer-plano-de-negocios.ghtml">
                                <img loading="lazy" width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/o-globo.webp" alt="O Globo" title="O Globo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="midia-img">
                            <a title="Estação Litoral" href="https://www.estacaolitoralsp.com.br/27/06/2023/noticias-corporativas-dino/290800-abertura-de-escolas-requer-plano-de-negocios/">
                                <img loading="lazy" width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/estacao-litoral.webp" alt="Estação Litoral" title="Estação Litoral">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="midia-img">
                            <a title="Negocio e Franquia" href="https://www.negocioefranquia.com/IR_especialista_responde_duvidas_sobre_malha_fina/">
                                <img loading="lazy" width="125" height="125" class="img-responsive" src="<?= $url ?>imagens/main/logo-links/negocio-franquia.webp" alt="Negócio e Franquia" title="Negócio e Franquia">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-bg-sob-medidas">
            <div class="container">
                <div class="box-text-sob-medidas text-center">
                    <p>Empresa com <span>prêmio</span> pela Quality, empresa que dá prêmio por honra e mérito.</p>
                    <div class="flex gap-50">
                        <a href="<?= $url; ?>assets/pdf/certificado-quality.pdf" title="Prêmio Quality" target="_blank"><img width="161" height="168" src="<?= $url; ?>imagens/main/quality.webp" alt="Prêmio Quality" title="Prêmio Quality" loading="lazy"></a>
                    </div>
                </div>
            </div>
        </div>

        <section id="competitivos">
            <div class="container">
                <div class="comp-layout">

                    <!-- Esquerda: cards de resultados -->
                    <div class="comp-results">
                        <div class="comp-result-main">
                            <strong>+30<sup>%</sup></strong>
                            <span>redução média de custos operacionais nos primeiros 12 meses</span>
                        </div>
                        <div class="comp-result-items">
                            <div class="comp-result-item">
                                <strong>SP</strong>
                                <span>São Paulo &amp; Guarulhos com atendimento nacional</span>
                            </div>
                            <div class="comp-result-item">
                                <strong>Holding</strong>
                                <span>especialistas em estruturas familiares e patrimoniais</span>
                            </div>
                        </div>
                    </div>

                    <!-- Direita: texto + checklist -->
                    <div class="comp-content">
                        <span class="section-label section-label-light">POR QUE O GRUPO KEEPER</span>
                        <h2>Mais do que contabilidade — <span>estratégia</span></h2>
                        <p>Nossa metodologia vai além do cumprimento de obrigações. Atuamos como parceiros estratégicos que entendem a fundo o negócio do cliente e trabalham para resultados concretos.</p>
                        <ul class="comp-checklist">
                            <li>Equipe multidisciplinar: contadores, advogados e consultores</li>
                            <li>Atendimento personalizado com gestor dedicado por cliente</li>
                            <li>Soluções integradas do fiscal ao patrimonial em um só lugar</li>
                            <li>30 anos de experiência em reestruturação e redução de tributos</li>
                            <li>Tecnologia e processos atualizados com as mudanças da legislação</li>
                            <li>Prêmio Quality por honra e mérito ao trabalho realizado</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>
        <section id="avaliacoes" aria-label="Avaliações de clientes do Grupo Keeper">
            <div class="container">
                <div class="aval-header text-center">
                    <span class="section-label">O QUE NOSSOS CLIENTES DIZEM</span>
                    <h2>Avaliações de Clientes</h2>
                    <p>Mais de <?= count($avaliacoes) ?> clientes confiam no Grupo Keeper para assessoria contábil e consultoria empresarial.</p>
                </div>
                <div class="aval-grid">
                    <?php foreach ($avaliacoes as $av):
                        $initials = preg_replace('/[^A-Z]/','', strtoupper($av['nome']));
                        $initials = substr($initials, 0, 1) . (strlen($initials) > 1 ? substr($initials, -1) : '');
                    ?>
                    <div class="dep-container">
                        <div class="aval-stars dep-icons" aria-label="Avaliação: <?= $av['nota'] ?> de 5 estrelas">
                            <?php for ($s = 1; $s <= 5; $s++): ?>
                                <i class="fa-solid fa-star<?= $s > $av['nota'] ? ' star-empty' : '' ?>" aria-hidden="true"></i>
                            <?php endfor; ?>
                        </div>
                        <blockquote class="desp-desc">
                            <p>"<?= htmlspecialchars($av['texto']) ?>"</p>
                        </blockquote>
                        <div class="dep-title aval-autor">
                            <div class="aval-avatar" aria-hidden="true"><?= $initials ?></div>
                            <div class="aval-autor-info">
                                <strong><?= htmlspecialchars($av['nome']) ?></strong>
                                <span><?= htmlspecialchars($av['cargo']) ?> — <?= htmlspecialchars($av['cidade']) ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- BLOG PREVIEW -->
        <section id="blog-home">
            <div class="container">
                <div class="blog-home-header">
                    <div>
                        <span class="section-label">ARTIGOS E DICAS</span>
                        <h2>Últimos do Blog Grupo Keeper</h2>
                    </div>
                    <a href="<?= $url ?>blog/" class="blog-home-btn" title="Ver todos os artigos do blog">
                        Ver todos os artigos <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="flex blog-home-grid">
                    <?php foreach (array_slice($paginasBlog, 0, 3, true) as $slug => $post): ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <article class="blog-home-card">
                            <a class="blog-home-img-link" href="<?= $url ?>blog/<?= $slug ?>" title="<?= htmlspecialchars($post['title']) ?>">
                                <div class="blog-home-img">
                                    <img loading="lazy"
                                         src="<?= $url ?><?= $post['imgPath'] ?><?= $slug ?>.webp"
                                         alt="<?= htmlspecialchars($post['title']) ?>"
                                         width="480" height="260"
                                         onerror="this.style.display='none'">
                                    <span class="bh-cat"><?= htmlspecialchars($post['category']) ?></span>
                                </div>
                            </a>
                            <div class="blog-home-body">
                                <div class="bh-meta">
                                    <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> <?= $post['date_display'] ?></span>
                                    <span><i class="fa-regular fa-clock" aria-hidden="true"></i> <?= $post['read_time'] ?></span>
                                </div>
                                <h3><a href="<?= $url ?>blog/<?= $slug ?>" title="<?= htmlspecialchars($post['title']) ?>"><?= htmlspecialchars($post['title']) ?></a></h3>
                                <p><?= htmlspecialchars($post['excerpt']) ?></p>
                                <a class="bh-read-more" href="<?= $url ?>blog/<?= $slug ?>" title="Ler artigo">
                                    Ler artigo <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </article>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq">
            <div class="container">
                <div class="faq-header text-center">
                    <span class="section-label">DÚVIDAS FREQUENTES</span>
                    <h2>Perguntas Frequentes</h2>
                    <p>Tire suas dúvidas sobre nossos serviços de contabilidade e consultoria empresarial.</p>
                </div>
                <div class="faq-lista" role="list">
                    <?php foreach ($faqs as $i => $f): ?>
                    <div class="faq-item" role="listitem">
                        <button class="faq-question" aria-expanded="false" aria-controls="faq-resposta-<?= $i ?>">
                            <span><?= htmlspecialchars($f['q']) ?></span>
                            <span class="faq-icon"><i class="fa-solid fa-chevron-down" aria-hidden="true"></i></span>
                        </button>
                        <div class="faq-answer" id="faq-resposta-<?= $i ?>" role="region">
                            <p><?= htmlspecialchars($f['a']) ?></p>
                            <a data-click-track="WhatsApp - Home - FAQ - <?= htmlspecialchars($f['q']) ?>" href="<?= $unidades[1]['link_wpp'] ?>" title="Fale com especialista">
                                <strong>Clique <span>aqui</span> e saiba mais</strong>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="faq-cta">
                    <p>Não encontrou sua dúvida? <a href="<?= $unidades[1]['link_wpp'] ?>" data-click-track="WhatsApp - Home - FAQ CTA" title="Falar com especialista pelo WhatsApp">Fale com nosso especialista pelo WhatsApp</a></p>
                </div>
            </div>
        </section>
    </main>
    <?php
    $borg->js_custom = array(
        "tools/bootstrap.min",
        "tools/jquery.validate.min",
        "tools/jquery.mask.min",
        "jquery.buscaorganica.contact",
    );
    ?>
    <?php include "includes/_footer.php"; ?>

    <!-- FAQ Accordion -->
    <script>
    document.querySelectorAll('.faq-question').forEach(function(btn) {
        btn.addEventListener('click', function() {
            var item = this.closest('.faq-item');
            var isOpen = item.classList.contains('active');
            document.querySelectorAll('.faq-item').forEach(function(el) {
                el.classList.remove('active');
                el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
            });
            if (!isOpen) {
                item.classList.add('active');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });
    </script>

</body>

</html>