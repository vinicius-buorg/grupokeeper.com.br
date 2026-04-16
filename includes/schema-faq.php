<?php if (!empty($faqs)): ?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
<?php foreach ($faqs as $i => $f):
    $q = htmlspecialchars($f['q'], ENT_QUOTES, 'UTF-8');
    $a = htmlspecialchars(strip_tags($f['a']), ENT_QUOTES, 'UTF-8');
?>
    {
      "@type": "Question",
      "name": "<?= $q ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?= $a ?>"
      }
    }<?= ($i < count($faqs) - 1) ? ',' : '' ?>

<?php endforeach; ?>
  ]
}
</script>
<?php endif; ?>
