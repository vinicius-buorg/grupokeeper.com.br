<?php

    $title       = "Kbca Slider";
    $description = "Ferramenta slider simples para exibição de slides.";
    $h1          = $title;
    $keywords    = $title;

    include "includes/_configuracoes.php";
    
    $borg->cssCompress(array(
        "ferramentas/kbca-slider"
    ));
    
?>
</head>
<body>
    
    <?php include "includes/_header.php"; ?>
    
    <main class="main-content">
        
        <div class="container">

            <h1><?php echo $h1; ?></h1>

            <ol>
                <li>Adicionar a linha "tools/kbca-slider" no <strong>cssCompress</strong>;</li>
                <li>Adicionar a linha "tools/jquery.kbca-slider" no <strong>$borg->js_custom</strong> ANTES do _footer.php;</li>
                <li>Montar o HTML;</li>
            </ol>

            <hr>

            <div class="slider-container">
                <div class="slider-wrapper">
                    <div class="slider-slide">
                        <img src="https://img.freepik.com/fotos-gratis/banner-de-folha-monstera-tropical-neon_53876-138943.jpg?w=1060&t=st=1686593048~exp=1686593648~hmac=5b7d466c8076b1d67a5c00f18d218b8a834718c4ac39754d5ba5157c33f5a945" alt="Image 1" title="#html-caption1">
                    </div>
                    <div class="slider-slide">
                        <img src="https://img.freepik.com/fotos-gratis/montanhas-nevadas-nos-papeis-de-parede-de-inverno_1340-25657.jpg?w=900&t=st=1686593049~exp=1686593649~hmac=a0119d9325b7ac68836ca2b0f487b7cf96b9e01d1bec6563f8b3eff99475985d" alt="Image 2" title="#html-caption2">
                    </div>
                    <div class="slider-slide">
                        <img src="https://img.freepik.com/fotos-gratis/fas-da-noite-do-campeonato-sentados-em-arquibancadas-geradas-por-ia_188544-8999.jpg?w=996&t=st=1686593053~exp=1686593653~hmac=bc6c2358b71bbf1444e53c73f6b1040aa3ce202078d6f6efbb9c67dd613d3c45" alt="Image 3" title="#html-caption3">
                    </div>
                </div>

                <div class="html-captions">
                    <div id="html-caption1" class="html-caption">
                        <h1>Title 1</h1>
                        <h2>Description 1</h2>
                        <a href="#" title="Learn More">Learn More &raquo;</a>
                    </div>
                    <div id="html-caption2" class="html-caption">
                        <h1>Title 2</h1>
                        <h2>Description 2</h2>
                        <a href="#" title="Learn More">Learn More &raquo;</a>
                    </div>
                    <div id="html-caption3" class="html-caption">
                        <h1>Title 3</h1>
                        <h2>Description 3</h2>
                        <a href="#" title="Learn More">Learn More &raquo;</a>
                    </div>
                </div>
                
                <div class="slider-pagination">
                    <div class="slider-pagination-bullet"></div>
                </div>
                <div class="slider-button-prev">
                    <span>&#10094;</span>
                </div>
                <div class="slider-button-next">
                    <span>&#10095;</span>
                </div>
            </div>
        
        </div>
    </main>
    <?php 
        $borg->js_custom = array(
            "tools/jquery.kbca-slider"
        );
    ?>
    <?php include "includes/_footer.php"; ?>
    
</body>
</html>