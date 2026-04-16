<?php
    $title       = "Palavra Chave do cliente";
    $description = ""; // Manter entre 130 a 160 caracteres   
    $h1          = $title;
    $keywords    = $title . ', palavra chave 1, palavra chave 2';
    
    include "includes/_configuracoes.php"; 
    $url_title   = $borg->formatStringToURL($title);
  
    $borg->cssCompress(array(
        "ferramentas/fancybox",
        'ferramentas/slick',
        "paginas/palavra-chave",
        "elementos/style"
    ));
?>
</head>
<body>
    <?php include "includes/_header.php"; ?>
    <?php include "includes/modal-orcamento-borg.php"; ?>
    <main class="main-content">
        <section>
            <div class="barra-titulo">
                <div class="container">
                    <h1><?php echo $h1; ?></h1>
                    <?php echo $borg->breadcrumb(array("Informações", $title)); ?>
                    <?php include "includes/botao-orcamento.php"; ?>
                </div>
            </div>
            <div class="container">
                <div class="flex">
                    <div class="corpo-artigo col-md-12 text-justify">
                        <a href="<?php echo $url."imagens/".$url_title."/".$url_title.".webp"; ?>" title="<?php echo $h1; ?>" class="img-fancy-pc">
                            <img src="<?php echo $url."imagens/".$url_title."/".$url_title."-thumb.webp"; ?>" alt="<?php echo $h1; ?>" title="<?php echo $h1; ?>" class="img-right img-responsive">
                        </a>
                        <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit. Perferendis ipsam ea tempora accusamus quasi numquam architecto sequi ducimus minima enim facere temporibus quaerat rerum laudantium vel quas, exercitationem impedit in perspiciatis voluptatum soluta. Aut deserunt pariatur, cum vitae obcaecati facilis assumenda sunt animi aspernatur, atque nihil itaque necessitatibus laudantium rerum accusamus. Pariatur minima veritatis quaerat, aliquid delectus saepe illo porro adipisci id ab ullam beatae commodi dignissimos qui debitis. Blanditiis delectus exercitationem nostrum dolores numquam rerum fugiat porro quaerat beatae ducimus, culpa reprehenderit temporibus ipsum facere suscipit, voluptatem earum cupiditate a sunt aliquam. Deleniti rerum dolores, a facilis, consequuntur incidunt?</p>
                        <?php include "includes/contato-meio-texto.php"; ?>
                        <h2>Sub título 1</h2>
                        <p><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Odit quis alias tempora repellendus dignissimos voluptates quibusdam quaerat autem possimus. Aliquam illum mollitia consequatur, dolorum blanditiis, aperiam temporibus, alias aliquid, animi rem quis inventore? Iste sit asperiores, doloribus excepturi, ipsa reiciendis quidem libero expedita rerum, pariatur dolore cupiditate voluptatibus voluptas. Neque!</p>
                        <h3>Sub título 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <strong>Sequi soluta harum</strong> placeat vel dolore eveniet at qui ratione ea commodi veritatis, consequatur delectus accusantium, cum. Suscipit dignissimos, cumque ut debitis architecto impedit sit soluta veniam error veritatis consequatur totam ipsum consectetur unde temporibus vel delectus. Aliquam ad impedit atque voluptas.</p>
                        <?php include "includes/regioes.php"; ?>
                        <?php include "includes/veja-tambem.php"; ?>
                        <?php include "includes/direitos-texto.php"; ?>
                    </div>
                    <aside class="aside-artigo">
                        <?php include "includes/sidebar.php"; ?>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <?php 
        $borg->js_custom = array(
            "tools/jquery.fancybox",
            "tools/jquery.slick",
            "tools/bootstrap.min",
            "tools/jquery.validate.min",
            "tools/jquery.mask.min",
            "jquery.buscaorganica.palavrachave"
        );
    ?>
    <?php include "includes/_footer.php"; ?>
</body>
</html>