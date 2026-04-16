<?php
/* ============================================================
   Grupo Keeper — Blog
   URL routing: blog.php gerencia /blog/ (listagem) e
   /blog/{slug} (post individual) via .htaccess rewrite
   ============================================================ */

// 1. Metadados base (serão sobrescritos pelo config-blog.php se for post individual)
$h1          = "Blog Grupo Keeper — Artigos sobre Contabilidade e Gestão Empresarial";
$title       = "Blog Grupo Keeper — Contabilidade e Gestão Empresarial";
$description = "Artigos sobre contabilidade empresarial, planejamento tributário, holding familiar, BPO financeiro, abertura de empresa e gestão de negócios. Blog do Grupo Keeper — Guarulhos, SP.";
$keywords    = "blog contabilidade, artigos contabilidade, planejamento tributário, holding familiar, BPO financeiro";

// 2. Carrega configurações + posts + routing (seta $areaGeral, $paginaRequisitada, etc.)
include "includes/_configuracoes.php";
include "includes/config-blog.php";

$borg->cssCompress(array(
    "paginas/blog-borg",
    "paginas/contato",
));
?>
<?php include "includes/schema-blog.php"; ?>
</head>
<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content blog">

    <?php if ($areaGeral): ?>
    <!-- ========== LISTAGEM ========== -->

        <section class="blog-hero">
            <div class="container">
                <div class="blog-hero-content">
                    <span class="section-label">BLOG GRUPO KEEPER</span>
                    <h1>Artigos sobre Contabilidade e Gestão Empresarial</h1>
                    <p>Dicas, guias e informações sobre planejamento tributário, holding familiar, BPO financeiro, abertura de empresa e muito mais.</p>
                </div>
            </div>
        </section>

        <section class="blog-listing">
            <div class="container">
                <div class="flex blog-grid">
                    <?php foreach ($paginasBlog as $slug => $post): ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <article class="blog-card">
                            <a class="blog-card-img-link" href="<?= $url ?>blog/<?= $slug ?>" title="<?= htmlspecialchars($post['title']) ?>">
                                <div class="blog-card-img">
                                    <picture>
                                        <source srcset="<?= $url ?><?= $post['imgPath'] ?><?= $slug ?>.webp" type="image/webp">
                                        <img loading="lazy" src="<?= $url ?><?= $post['imgPath'] ?><?= $slug ?>.webp" alt="<?= htmlspecialchars($post['title']) ?>" width="600" height="360" onerror="this.style.display='none'">
                                    </picture>
                                    <span class="blog-card-cat"><?= htmlspecialchars($post['category']) ?></span>
                                </div>
                            </a>
                            <div class="blog-card-body">
                                <div class="bh-meta">
                                    <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> <?= $post['date_display'] ?></span>
                                    <span><i class="fa-regular fa-clock" aria-hidden="true"></i> <?= $post['read_time'] ?></span>
                                </div>
                                <h2><a href="<?= $url ?>blog/<?= $slug ?>" title="<?= htmlspecialchars($post['title']) ?>"><?= htmlspecialchars($post['title']) ?></a></h2>
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

    <?php else: ?>
    <!-- ========== POST INDIVIDUAL ========== -->

        <?php echo $borg->breadcrumb(['Blog', $paginaRequisitada['title']]); ?>

        <article id="blog-post">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="post-content">

                            <div class="post-header">
                                <span class="blog-card-cat"><?= htmlspecialchars($paginaRequisitada['category']) ?></span>
                                <h1><?= htmlspecialchars($paginaRequisitada['title']) ?></h1>
                                <div class="post-meta">
                                    <span><i class="fa-regular fa-calendar" aria-hidden="true"></i> <?= $paginaRequisitada['date_display'] ?></span>
                                    <span><i class="fa-regular fa-clock" aria-hidden="true"></i> <?= $paginaRequisitada['read_time'] ?></span>
                                </div>
                            </div>

                            <div class="post-img">
                                <picture>
                                    <source srcset="<?= $url ?><?= $paginaRequisitada['imgPath'] ?><?= $paginaRequisitada['urlSolicitada'] ?>.webp" type="image/webp">
                                    <img class="img-responsive" src="<?= $url ?><?= $paginaRequisitada['imgPath'] ?><?= $paginaRequisitada['urlSolicitada'] ?>.webp" alt="<?= htmlspecialchars($paginaRequisitada['title']) ?>" width="900" height="500" onerror="this.closest('.post-img').style.display='none'">
                                </picture>
                            </div>

                            <div class="post-body">
                                <?= $paginaRequisitada['artigo'] ?>
                            </div>
                        </div>
                    </div>
      <aside class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <?php include "includes/sidebar-blog.php"; ?>
                    </aside>
                </div>
            </div>
        </article>

              

    <?php endif; ?>

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
</body>
</html>
