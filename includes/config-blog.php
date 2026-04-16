<?php
/*
 * Blog Grupo Keeper — Configuração e Posts
 * Carrega arrayBlog.php e adapta para o formato padronizado $paginasBlog
 */

/* Estilo do submenu no sidebar: 'thumb' ou 'lista' */
$tipoLista = 'thumb';

/* Usar imagens .webp no submenu (picture)? false = usa <img> */
$usarImagemBlogWebp = true;

/* Pasta das imagens do blog */
$blogImgPath = 'imagens/main/blog/';

/* Carrega os posts legados */
include_once __DIR__ . '/arrayBlog.php';

/* ============================================================
   Converte o array $post (formato legado) para $paginasBlog
   (formato padronizado compatível com schema-blog.php e novo blog.php)
   ============================================================ */

/**
 * Converte data "DD-MM-YYYY" para "YYYY-MM-DD" (ISO 8601)
 */
function blogParseDate(string $rawDate): string {
    // Aceita formatos: "31-07-2024", "<p>31-07-2024</p>"
    preg_match('/(\d{2})-(\d{2})-(\d{4})/', $rawDate, $m);
    if (count($m) === 4) {
        return $m[3] . '-' . $m[2] . '-' . $m[1];
    }
    return date('Y-m-d');
}

/**
 * Converte data ISO para exibição: "31 de julho de 2024"
 */
function blogDisplayDate(string $isoDate): string {
    $meses = [
        '01' => 'janeiro', '02' => 'fevereiro', '03' => 'março',
        '04' => 'abril',   '05' => 'maio',       '06' => 'junho',
        '07' => 'julho',   '08' => 'agosto',     '09' => 'setembro',
        '10' => 'outubro', '11' => 'novembro',   '12' => 'dezembro',
    ];
    [$y, $m, $d] = explode('-', $isoDate);
    return ltrim($d, '0') . ' de ' . ($meses[$m] ?? $m) . ' de ' . $y;
}

/**
 * Estima tempo de leitura baseado no número de palavras
 */
function blogReadTime(string $html): string {
    $words = str_word_count(strip_tags($html));
    $mins  = max(1, (int) ceil($words / 200));
    return $mins . ' min de leitura';
}

/**
 * Infere categoria a partir do título/conteúdo
 */
function blogInferCategory(string $title): string {
    $title = strtolower($title);
    if (strpos($title, 'holding') !== false)              return 'Holding';
    if (strpos($title, 'valuation') !== false)            return 'Valuation';
    if (strpos($title, 'bpo') !== false)                  return 'BPO Financeiro';
    if (strpos($title, 'folha') !== false)                return 'Departamento Pessoal';
    if (strpos($title, 'imposto') !== false ||
        strpos($title, 'tribut') !== false ||
        strpos($title, 'fiscal') !== false)               return 'Planejamento Tributário';
    if (strpos($title, 'escola') !== false ||
        strpos($title, 'educação') !== false)             return 'Contabilidade Especializada';
    if (strpos($title, 'abertura') !== false ||
        strpos($title, 'abrir empresa') !== false ||
        strpos($title, 'cnpj') !== false)                 return 'Abertura de Empresa';
    if (strpos($title, 'empreend') !== false ||
        strpos($title, 'negócio') !== false ||
        strpos($title, 'negocio') !== false)              return 'Empreendedorismo';
    if (strpos($title, 'financeiro') !== false ||
        strpos($title, 'caixa') !== false ||
        strpos($title, 'custo') !== false)                return 'Gestão Financeira';
    if (strpos($title, 'mei') !== false ||
        strpos($title, 'micro') !== false)                return 'MEI';
    return 'Contabilidade';
}

$paginasBlog = [];

foreach ($post as $slug => $p) {
    $rawDate     = $p['date'] ?? '';
    $isoDate     = blogParseDate($rawDate);
    $content     = $p['content'] ?? '';
    $desc        = strip_tags($p['desc'] ?? '');

    $paginasBlog[$slug] = [
        'title'        => $p['title'] ?? $slug,
        'description'  => $desc,
        'keywords'     => ($p['title'] ?? $slug) . ', contabilidade, Grupo Keeper',
        'artigo'       => $content,
        'image'        => $slug . '.webp',
        'imgPath'      => $blogImgPath,
        'date'         => $isoDate,
        'date_display' => blogDisplayDate($isoDate),
        'category'     => blogInferCategory($p['title'] ?? ''),
        'read_time'    => blogReadTime($content),
        'excerpt'      => $desc,
        /* Campos legados mantidos para compatibilidade */
        'name'         => $p['name'] ?? $slug,
        'title2'       => $p['title2'] ?? '<h2>' . htmlspecialchars($p['title'] ?? $slug) . '</h2>',
    ];
}

/* ============================================================
   Routing do blog (não alterar)
   ============================================================ */
$urlRequisitada = ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$partesBlog     = preg_split('#blog/?#', $urlRequisitada, 2);
$urlSolicitada  = isset($partesBlog[1]) ? trim($partesBlog[1], '/') : '';
$areaGeral      = empty($urlSolicitada);

if (!$areaGeral) {
    if (!isset($paginasBlog[$urlSolicitada])) {
        header("HTTP/1.0 404 Not Found");
        include dirname(__DIR__) . '/404.php';
        exit;
    }
    $paginaRequisitada                  = $paginasBlog[$urlSolicitada];
    $paginaRequisitada['urlSolicitada'] = $urlSolicitada;

    $h1          = $paginaRequisitada['title'];
    $title       = $paginaRequisitada['title'];
    $description = $paginaRequisitada['description'];
    $keywords    = $paginaRequisitada['keywords'];
    $meta_img_blog = $paginaRequisitada['imgPath'] . $paginaRequisitada['image'];
} else {
    $paginaRequisitada = null;
}
?>
