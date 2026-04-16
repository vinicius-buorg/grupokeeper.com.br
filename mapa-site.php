<?php

$title       = "Mapa do Site";
$description = "Em nosso mapa do site você encontra todas as páginas do site, confira nossas categorias e informações de nossos produtos e serviços."; // Manter entre 130 a 160 caracteres
$h1          = $title;
$keywords    = $title;

include "includes/_configuracoes.php";

$borg->cssCompress(array(
    "paginas/mapa-site"
));

?>
</head>

<body>

    <?php include "includes/_header.php"; ?>

    <main class="main-content">
        <section class="container padding-10">
            <?php echo $borg->breadcrumb(array($title)); ?>
            <h1><?php echo $h1; ?></h1>
            <div class="flex">
                <div class="col-md-6 sitemap">
                    <?php include "includes/estrutura-site.php"; ?>
                </div>
                <div class="col-md-6">
                    <p>Tem alguma dúvida sobre nossos serviços ou produtos? Mande-nos uma mensagem e assim que possível nossa equipe vai te responder.</p>
                    <form class="form-contato">
                        <div class="form-group">
                            <label>Nome</label>
                            <input name="Nome" type="text" class="form-control campo-obrigatorio">
                        </div>
                        <div class="flex">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input name="E-mail" type="email" class="form-control campo-obrigatorio">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input name="Telefone" type="text" class="form-control campo-obrigatorio mask-phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Como podemos ajudar?</label>
                            <textarea name="Mensagem" class="form-control campo-obrigatorio" rows="6"></textarea>
                        </div>
                        <div class="text-right">
                            <input name="Local do Form" value="Formulário Mapa do site: <?php echo $canonical; ?>" type="hidden">
                            <input name="url" value="<?php echo $url;?>" type="hidden">

                            <button type="submit" class="btn btn-default btn-block" data-emailsReceberEnvio='<?php echo $emailContato; ?>' data-emailsReceberCopia="" data-emailsReceberCopiaOculta="" data-siteCliente="<?php echo $nome_empresa; ?>" data-ajax="Contato atraves do site">Enviar <i class="fa fa-share"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <?php include "includes/_footer.php"; ?>


</body>

</html>