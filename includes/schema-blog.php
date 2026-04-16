<?php
/*
 * Schema BlogPosting (post individual) ou Blog (listagem)
 * Incluído em blog.php, após _configuracoes.php e cssCompress
 */

$orgSchema = [
    '@type' => 'Organization',
    'name'  => $nome_empresa,
    '@id'   => $url . '#organization',
    'logo'  => [
        '@type' => 'ImageObject',
        'url'   => $url . $logo_cliente,
    ],
];

if (!$areaGeral && !empty($paginaRequisitada)) :
    /* ============================
       BlogPosting — post individual
    ============================ */
    $postUrl  = $url . 'blog/' . $paginaRequisitada['urlSolicitada'];
    $imgUrl   = $url . $paginaRequisitada['imgPath'] . $paginaRequisitada['image'];
    $bodyText = htmlspecialchars(strip_tags($paginaRequisitada['artigo']), ENT_QUOTES, 'UTF-8');

    $schema = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BlogPosting',
        '@id'             => $postUrl . '#blogposting',
        'headline'        => $paginaRequisitada['title'],
        'description'     => $paginaRequisitada['description'],
        'image'           => $imgUrl,
        'datePublished'   => $paginaRequisitada['date'],
        'dateModified'    => $paginaRequisitada['date'],
        'inLanguage'      => 'pt-BR',
        'url'             => $postUrl,
        'articleSection'  => $paginaRequisitada['category'],
        'wordCount'       => str_word_count(strip_tags($paginaRequisitada['artigo'])),
        'author'          => $orgSchema,
        'publisher'       => $orgSchema,
        'mainEntityOfPage'=> [
            '@type' => 'WebPage',
            '@id'   => $postUrl,
        ],
        'isPartOf'        => [
            '@type' => 'Blog',
            '@id'   => $url . 'blog/#blog',
            'name'  => 'Blog ' . $nome_empresa,
            'url'   => $url . 'blog/',
        ],
    ];
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";

    /* BreadcrumbList para post */
    $bc = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Início',           'item' => $url],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',             'item' => $url . 'blog/'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => $paginaRequisitada['title'], 'item' => $postUrl],
        ],
    ];
    echo '<script type="application/ld+json">' . json_encode($bc, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";

else :
    /* ============================
       Blog — página de listagem
    ============================ */
    $blogUrl = $url . 'blog/';

    $listItems = [];
    $pos = 1;
    foreach ($paginasBlog as $slug => $post) {
        $listItems[] = [
            '@type'    => 'ListItem',
            'position' => $pos++,
            'url'      => $url . 'blog/' . $slug,
            'name'     => $post['title'],
        ];
    }

    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Blog',
        '@id'         => $blogUrl . '#blog',
        'name'        => 'Blog ' . $nome_empresa,
        'description' => 'Artigos e dicas sobre contabilidade empresarial, planejamento tributário, holding familiar, BPO financeiro e gestão de empresas.',
        'url'         => $blogUrl,
        'inLanguage'  => 'pt-BR',
        'publisher'   => $orgSchema,
        'blogPost'    => $listItems,
    ];
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";

    /* BreadcrumbList para listagem */
    $bc = [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Início', 'item' => $url],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Blog',   'item' => $blogUrl],
        ],
    ];
    echo '<script type="application/ld+json">' . json_encode($bc, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>' . "\n";

endif;
?>
