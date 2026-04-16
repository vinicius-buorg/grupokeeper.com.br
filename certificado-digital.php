<?php
$h1           = "Certificado digital";
$title         = "Certificado digital";
$description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados."; // Manter entre 130 a 160 caracteres
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/produtos",
    "paginas/contato",
    "ferramentas/fancybox",
    // "ferramentas/kbca-slider",
    // "tools/accordion",
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
    <?php echo $borg->breadcrumb(array($title)); ?>
        <div id="cta">
            <div class="container">
                <div class="text-center">
                    <h2>Certificados <span>Empresariais</span></h2>
                    <p>Garanta o seu certificado feito com qualidade por quem entende do assunto, cliente Keeper, você é a nossa prioridade!</p>
                </div>
                <form class="form-contato">
                    <div class="flex">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="nome">Nome <span class="red-color">*</span></label>
                                <input name="Nome" type="text" id="nome" class="form-control campo-obrigatorio" placeholder="Insira seu Nome">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="tel">Telefone <span class="red-color">*</span></label>
                                <input name="Telefone" type="text" id="tel" class="form-control campo-obrigatorio mask-phone">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email">E-mail <span class="red-color">*</span></label>
                                <input name="E-mail" type="email" id="email" class="form-control campo-obrigatorio" placeholder="email@empresa.com">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="certificado">Tipo de Certificado <span class="red-color">*</span></label>
                                <select name="Tipo de Certificado" id="certificado" class="form-control campo-obrigatorio">
                                    <option selected disabled value="">Selecione uma opção</option>
                                    <option value="CFM">CFM</option>
                                    <option value="e-CNPJ">e-CNPJ</option>
                                    <option value="e-CNPJ com emissor de NF-e">e-CNPJ com emissor de NF-e</option>
                                    <option value="e-CNPJ para pequenas empresas">e-CNPJ para pequenas empresas</option>
                                    <option value="e-CPF">e-CPF</option>
                                    <option value="MEI">MEI</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="validade">Validade <span class="red-color">*</span></label>
                                <select name="Validade" id="validade" class="form-control campo-obrigatorio">
                                    <option selected disabled value="">Selecione uma opção</option>
                                    <option value="12 meses">12 meses</option>
                                    <option value="18 meses">18 meses</option>
                                    <option value="24 meses">24 meses</option>
                                    <option value="36 meses">36 meses</option>
                                    <option value="60 meses">60 meses</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="midia">Mídia <span class="red-color">*</span></label>
                                <select name="Mídia" id="midia" class="form-control campo-obrigatorio">
                                    <option selected disabled value="">Selecione uma opção</option>
                                    <option value="Cartão">Cartão</option>
                                    <option value="Cartão + Leitora">Cartão + Leitora</option>
                                    <option value="Mobile">Mobile</option>
                                    <option value="Nuvem">Nuvem</option>
                                    <option value="Somente certificado">Somente certificado</option>
                                    <option value="Token">Token</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="forma">Forma de pagamento <span class="red-color">*</span></label>
                                <select name="Forma de pagamento" id="forma" class="form-control campo-obrigatorio">
                                    <option selected disabled value="">Selecione uma opção</option>
                                    <option value="Pix">Pix</option>
                                    <option value="Cartão">Cartão</option>
                                    <option value="Boleto">Boleto</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-right">
                            <input name="Local do Form" value="Formulário fim da página: <?php echo $canonical; ?>" type="hidden">
                            <button type="submit"
                                class="btn btn-default btn-block"
                                data-emailsReceberEnvio=<?php echo $emailContato; ?>
                                data-emailsReceberCopia=""
                                data-emailsReceberCopiaOculta=""
                                data-siteCliente="<?php echo $nome_empresa; ?>"
                                data-ajax="Contato atraves do site">Enviar <i class="fa fa-share"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <?php
    $borg->js_custom = array(
        "tools/bootstrap.min",
        "tools/jquery.validate.min",
        "tools/jquery.mask.min",
        "tools/jquery.fancybox",
        "jquery.buscaorganica.contact"
    );
    ?>
    <?php include "includes/_footer.php"; ?>
    
    <script>
        $('.form-control').click(function(){
            $('.form-group').find('label').css('color', '#767676');
            $(this).parent('.form-group').find('label').css('color', 'var(--main)');
        });
    </script>
</body>

</html>