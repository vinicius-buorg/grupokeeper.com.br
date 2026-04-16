<?php
$h1           = "Ferramentas";
$title         = "Ferramentas";
$description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados."; // Manter entre 130 a 160 caracteres
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/ferramentas",
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <?php echo $borg->breadcrumb(array($title)); ?>
        <div id="tools">
            <div class="container">
                <div class="tools-title">
                    <h2>Ferramentas</h2>
                </div>
                <div class="flex">
                    <?php
                        $links = [
                            'clt' => [
                                'icon' => '<i class="fa-solid fa-calculator"></i>',
                                'desc' => '<a href="calculadora-salario"><p>Calculadora de custo de contratação CLT</p></a>',
                            ],
                            'professor' => [
                                'icon' => '<i class="fa-solid fa-calculator"></i>',
                                'desc' => '<a href="calculadora-professores"><p>Calculadora de salário de professor</p></a>',
                            ],
                            'disc' => [
                                'icon' => '<i class="fa-solid fa-clipboard-list"></i>',
                                'desc' => '<a href="https://docs.google.com/forms/d/e/1FAIpQLSeqv-vIJzSR7q_P0MFaZlJ3_6MkjxAHbTDyWFeajc0GD5NL5w/viewform"><p>Solicite o teste disc!</p></a>',
                            ],
                            'quanto-vale-sua-empresa' => [
                                'icon' => '<i class="fa-solid fa-screwdriver-wrench"></i>',
                                'desc' => '<a href="https://docs.google.com/forms/d/1_Uvp_mZlSIAHmXkauXWNHmpCGaQ8qkTEvePNwsOIT-M/viewform?edit_requested=true"><p>Quanto vale sua empresa</p></a>',
                            ],
                        ]
                    ?>
                    <?php foreach($links as $key => $li): ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tools-content">
                                <div class="link">
                                    <div class="link-icon">
                                        <?= $li['icon']?>
                                    </div>
                                    <div class="link-desc">
                                        <?= $li['desc']?>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach?>
                </div>
            </div>
        </div>
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