<!DOCTYPE html><html lang="pt-br"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title><?php echo $title; ?> - <?php echo $nome_empresa; ?></title><base href="<?php echo $url; ?>"><meta name="description" content="<?php echo $description; ?>"><meta name="keywords" content="<?php echo $keywords; ?>"><meta name="ICBM" content="<?php echo $unidades[1]["latitude_longitude"]; ?>"><meta name="robots" content="index,follow"><meta name="rating" content="General"><meta name="revisit-after" content="7 days"><meta name="author" content="<?php echo $nome_empresa; ?>"><link rel="canonical" href="<?php echo $canonical; ?>"><link rel="shortcut icon" href="<?php echo $url; ?>imagens/favicon.png"><meta property="og:locale" content="pt_BR"><meta property="og:region" content="Brasil"><meta property="og:title" content="<?php echo $title; ?>"><?php echo !empty($meta_img)?"<meta property=\"og:image\" content=\"".$meta_img."\">":""; ?><meta property="og:url" content="<?php echo $canonical; ?>"><meta property="og:description" content="<?php echo $description; ?>"><meta property="og:site_name" content="<?php echo $nome_empresa; ?>"><meta property="og:type" content="website"><meta name="geo.position" content="<?php echo $unidades[1]["latitude_longitude"]; ?>"><meta name="geo.placename" content="<?php echo $unidades[1]["estado"]; ?>-<?php echo $unidades[1]["uf"]; ?>"><meta name="geo.region" content="<?php echo $unidades[1]["uf"]; ?>-BR"><meta name="twitter:card" content="summary"><meta name="twitter:url" content="<?php echo $canonical; ?>"><meta name="twitter:title" content="<?php echo $title; ?>"><meta name="twitter:description" content="<?php echo $description; ?>"><script async src="https://kit.fontawesome.com/76cc86e992.js" crossorigin="anonymous"></script><?php echo !empty($meta_img)?"<meta name=\"twitter:image\" content=\"".$meta_img."\">":"";
// ============================================================
// JSON-LD CORRIGIDO — Conforme Manual JSON-LD SEO/AEO/GEO 2026
// ============================================================
function converterDataISO_borg($data) {
    $partes = explode('/', $data);
    if (count($partes) === 3) {
        return $partes[2] . '-' . $partes[1] . '-' . $partes[0];
    }
    return $data;
}
$dataPublicacaoISO = converterDataISO_borg($dataDePublicacao);
$dataModificacaoISO = converterDataISO_borg($dataDeModificacao);
$latLng = explode(',', $unidades[1]["latitude_longitude"]);
$latitude = trim($latLng[0]);
$longitude = trim($latLng[1]);
$retorno = '';
// ===== BLOCO 1: WebSite =====
$retorno .= '<script type="application/ld+json">{"@context":"https://schema.org","@type":"WebSite","name":"' . $nome_empresa . '","url":"' . $url . '","description":"' . addslashes($description) . '","publisher":{"@type":"Organization","name":"' . $nome_empresa . '"}}</script>';
// ===== BLOCO 2: LocalBusiness =====
$retorno .= '<script type="application/ld+json">{"@context":"https://schema.org","@type":"LocalBusiness","name":"' . $nome_empresa . '","image":"' . $url . $logo_cliente . '","telephone":[';
foreach ($telefones_cliente as $key => $tel) {
    $retorno .= '"' . $tel . '"' . (($key + 1) < count($telefones_cliente) ? ',' : '');
}
$retorno .= '],"email":"' . $emailContato . '","address":{"@type":"PostalAddress","streetAddress":"' . $unidades[1]['rua'] . '","addressLocality":"' . $unidades[1]['cidade'] . '","addressRegion":"' . $unidades[1]['uf'] . '","postalCode":"' . $unidades[1]['cep'] . '","addressCountry":"BR"},"geo":{"@type":"GeoCoordinates","latitude":' . $latitude . ',"longitude":' . $longitude . '},"url":"' . $url . '","priceRange":"$$","areaServed":{"@type":"State","name":"' . $unidades[1]['estado'] . '"},"sameAs":["https://www.facebook.com/' . $facebook . '/","https://www.instagram.com/' . $instagram . '/","https://www.linkedin.com/company/' . $linkedin . '/"]}</script>';
// ===== BLOCO 3: Organization =====
$retorno .= '<script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"' . $nome_empresa . '","url":"' . $url . '","logo":{"@type":"ImageObject","name":"' . $nome_empresa . '","url":"' . $url . $logo_cliente . '"},"sameAs":["https://www.facebook.com/' . $facebook . '/","https://www.instagram.com/' . $instagram . '/","https://www.linkedin.com/company/' . $linkedin . '/"],"contactPoint":[';
foreach ($telefones_cliente as $key => $tel) {
    $retorno .= '{"@type":"ContactPoint","telephone":"+55 ' . $tel . '","contactType":"customer service"}' . (($key + 1) < count($telefones_cliente) ? ',' : '');
}
$retorno .= ']}</script>';
// ===== BLOCO 4: BlogPosting — SOMENTE em páginas de artigo =====
$isHomepage = (!empty($is_home) || $canonical == $url || $canonical == rtrim($url, '/'));
$isBlogPost = (isset($paginaRequisitada) && !empty($paginaRequisitada));
if (!$isHomepage && $isBlogPost) {
    $postDataPub = isset($paginaRequisitada['data']) ? converterDataISO_borg($paginaRequisitada['data']) : $dataPublicacaoISO;
    $postDataMod = $postDataPub;
    $articleBodyReal = isset($paginaRequisitada['artigo']) ? strip_tags($paginaRequisitada['artigo']) : '';
    $articleBodyReal = trim(preg_replace('/\s+/', ' ', $articleBodyReal));
    if (strlen($articleBodyReal) > 1500) {
        $articleBodyReal = substr($articleBodyReal, 0, 1500) . '...';
    }
    $articleBodyReal = addslashes($articleBodyReal);
    $authorName = isset($paginaRequisitada['autor']) ? $paginaRequisitada['autor'] : $nome_empresa;
    $authorType = ($authorName === $nome_empresa || strpos($authorName, 'Equipe') !== false) ? 'Organization' : 'Person';
    $retorno .= '<script type="application/ld+json">{"@context":"https://schema.org","@type":"BlogPosting","headline":"' . addslashes($title) . '","author":{"@type":"' . $authorType . '","name":"' . addslashes($authorName) . '"},"publisher":{"@type":"Organization","name":"' . $nome_empresa . '","logo":{"@type":"ImageObject","url":"' . $url . $logo_cliente . '"}},"datePublished":"' . $postDataPub . '","dateModified":"' . $postDataMod . '","image":"' . (!empty($meta_img) ? $meta_img : $url . $logo_cliente) . '","articleBody":"' . $articleBodyReal . '","url":"' . $canonical . '","mainEntityOfPage":{"@type":"WebPage","@id":"' . $canonical . '"}}</script>';
}
// ===== BLOCO 5: BreadcrumbList =====
$paginaTratada = "";
if ($canonical != $url) { $paginaTratada .= '/'; }
$paginaTratada .= str_replace($url, '', $canonical);
$retorno .= '<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[';
$pg = explode('/', $paginaTratada);
$breadcrumbjs = '';
$arvore = '';
foreach ($pg as $key => $value) {
    $arvore .= $value;
    $breadcrumbjs .= '{"@type":"ListItem","position":' . ($key + 1) . ',"name":"' . addslashes($title) . '","item":"' . $url . $arvore . '"},';
}
$breadcrumbjs = $borg->replace($breadcrumbjs, '},', 0, '}');
$retorno .= $breadcrumbjs;
$retorno .= ']}</script>';
echo str_replace(array("\t"), '', $retorno);
?><?php echo $direitosAutorais; ?>
