<?php if (isset($_GET['gclid'])) {
    $_SESSION['sessao_ads'] = true;
}
$varTipoSess = isset($_SESSION['sessao_ads']) ? $_SESSION['sessao_ads'] : false; ?>
<script>
    /**
     * Click Tracker - Grupo Keeper
     * Gerencia o rastreamento de cliques em elementos com data-click-track ou data-clicktracking.
     */
    $(document).on('click', '[data-click-track], [data-clicktracking]', function(event) {
        var $this = $(this);
        var hrefCT = $this.attr('href');
        var nomeCT = $this.attr('data-click-track') || $this.attr('data-clicktracking');
        var targetCT = $this.attr('target');

        // Só intercepta se houver um link válido que não seja âncora interna
        if (hrefCT && hrefCT !== '#' && hrefCT.indexOf('javascript:') === -1) {
            event.preventDefault();

            var buscaorganicaUrlContactTrack = 'https://www.buscaorganica.com.br/includes/buscaorganica/clicktracker.php';
            var ipCT = '<?php echo $_SERVER['REMOTE_ADDR']; ?>';
            var urlCT = '<?php echo $url; ?>';
            var canonicalCT = '<?php echo str_replace($url, '', $canonical); ?>';
            var titleCT = '<?php echo $title; ?>';
            var tipoCT = '<?php echo (isset($varTipoSess) && $varTipoSess == true) ? "ads" : "organic"; ?>';

            $.ajax({
                type: 'POST',
                url: buscaorganicaUrlContactTrack,
                data: {
                    acao: 'click-tracker',
                    href: hrefCT,
                    nome: nomeCT,
                    ip: ipCT,
                    url: urlCT,
                    canonical: canonicalCT,
                    title: titleCT,
                    tipo: tipoCT
                },
                timeout: 3000 //garante que o usuário não fique preso se o rastreador falhar
            }).always(function() {
                // Executa após o sucesso ou falha do AJAX
                if (targetCT === '_blank') {
                    window.open(hrefCT, '_blank');
                } else {
                    window.location.href = hrefCT;
                }
            });
        }
    });
</script>