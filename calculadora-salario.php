<?php
$h1          = "Calculadora de salário";
$title       = "Calculadora de salário";
$description = "A procura de uma Contabilidade em Guarulhos? O Grupo Keeper tem 30 anos de experiência e oferece diversos serviços especializados.";
$keywords    = $title;

include "includes/_configuracoes.php";
$borg->cssCompress(array(
    "paginas/calculadoras",
));
?>
</head>

<body>
    <?php include "includes/_header.php"; ?>
    <main class="main-content">
        <?php echo $borg->breadcrumb(array($title)); ?>

        <section id="calc-hero">
            <div class="container">
                <div class="calc-titulo">
                    <h1>Cálculo de Salário Líquido</h1>
                </div>
            </div>
        </section>

        <section id="calc-section">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="calc-desc">
                            <h2>Entenda os Descontos no Salário</h2>
                            <p>O cálculo do salário líquido leva em consideração diversos fatores, incluindo descontos obrigatórios como INSS e IRRF, além de outros abatimentos específicos.</p>

                            <h3>1. Cálculo do Salário Bruto</h3>
                            <p>O salário bruto é o valor total recebido antes dos descontos. Ele pode incluir benefícios adicionais, como auxílio-alimentação e bônus, que impactam no montante final.</p>

                            <h3>2. Desconto do INSS</h3>
                            <p>O INSS é um desconto obrigatório aplicado sobre o salário bruto. A alíquota varia conforme a faixa salarial:</p>
                            <ul>
                                <li>Até R$ 1.412,00: 7,5%</li>
                                <li>De R$ 1.412,01 até R$ 2.666,68: 9%</li>
                                <li>De R$ 2.666,69 até R$ 4.000,03: 12%</li>
                                <li>De R$ 4.000,04 até R$ 7.786,02: 14%</li>
                                <li>Acima de R$ 7.786,02: Teto de R$ 908,86</li>
                            </ul>

                            <h3>3. Imposto de Renda (IRRF)</h3>
                            <p>O IRRF é descontado após a aplicação do INSS. A alíquota depende da base de cálculo:</p>
                            <ul>
                                <li>Até R$ 2.112,00: Isento</li>
                                <li>De R$ 2.112,01 até R$ 2.826,65: 7,5%</li>
                                <li>De R$ 2.826,66 até R$ 3.751,05: 15%</li>
                                <li>De R$ 3.751,06 até R$ 4.664,68: 22,5%</li>
                                <li>Acima de R$ 4.664,68: 27,5%</li>
                            </ul>

                            <h3>4. Outros Descontos</h3>
                            <p>Além dos descontos obrigatórios, outros valores podem ser abatidos: planos de saúde, contribuições sindicais e empréstimos consignados.</p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="calc-card">
                            <h2>Insira os dados e calcule</h2>

                            <div class="calc-group">
                                <label for="salario">Salário Bruto</label>
                                <input type="text" id="salario" placeholder="Ex: 3.500,00" onkeyup="formatarCampoInput(this)">
                            </div>

                            <div class="calc-group">
                                <label for="dependentes">Número de Dependentes</label>
                                <input type="number" id="dependentes" value="0" min="0">
                            </div>

                            <div class="calc-group">
                                <label for="outrosDescontos">Outros Descontos</label>
                                <input type="text" id="outrosDescontos" value="0" onkeyup="formatarCampoInput(this)">
                            </div>

                            <button class="btn-calcular" onclick="calcularSalario()">Calcular Salário Líquido</button>

                            <div class="calc-result" id="resultado">
                                <div class="calc-result-header">Resultado</div>
                                <div class="calc-result-body" id="resultado-body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="timeline">
            <div class="container">
                <div class="divider">
                    <p>Para conhecer melhor todos os nossos + de 30 serviços personalizáveis, entre em contato e solicite seu orçamento com os melhores profissionais do mercado.</p>
                    <a data-click-track="WhatsApp - orçamento - Calculadora Salario" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Solicite um orçamento</a>
                </div>
            </div>
        </div>
    </main>
    <?php
    $borg->js_custom = array(
        "tools/bootstrap.min",
        "tools/jquery.validate.min",
        "tools/jquery.mask.min",
        "tools/jquery.fancybox",
        "jquery.buscaorganica.contact",
    );
    ?>
    <?php include "includes/_footer.php"; ?>
<script>
    function formatarNumeroInput(valor) {
        valor = valor.replace(/\D/g, "");
        valor = (parseFloat(valor) / 100).toFixed(2) + "";
        valor = valor.replace(".", ",");
        return valor.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }

    function formatarCampoInput(input) {
        let valor = input.value.replace(/\D/g, "");
        input.value = valor.length > 0 ? formatarNumeroInput(valor) : "";
    }

    function limparFormatoNumero(valor) {
        return parseFloat(valor.replace(/\./g, "").replace(",", ".")) || 0;
    }

    function calcularINSS(salario) {
        if (salario <= 1412.00) return salario * 0.075;
        if (salario <= 2666.68) return salario * 0.09 - 21.18;
        if (salario <= 4000.03) return salario * 0.12 - 142.80;
        if (salario <= 7786.02) return salario * 0.14 - 376.40;
        return 908.86;
    }

    function calcularIRRF(base) {
        if (base <= 2112.00) return 0;
        if (base <= 2826.65) return base * 0.075 - 158.40;
        if (base <= 3751.05) return base * 0.15 - 370.40;
        if (base <= 4664.68) return base * 0.225 - 651.73;
        return base * 0.275 - 884.96;
    }

    function fmt(val) {
        return "R$ " + formatarNumeroInput(val.toFixed(2).replace(".", ","));
    }

    function calcularSalario() {
        let salarioBruto    = limparFormatoNumero(document.getElementById("salario").value);
        let dependentes     = parseInt(document.getElementById("dependentes").value) || 0;
        let outrosDescontos = limparFormatoNumero(document.getElementById("outrosDescontos").value);

        if (isNaN(salarioBruto) || salarioBruto <= 0) {
            alert("Digite um salário válido!");
            return;
        }

        let descontoINSS  = calcularINSS(salarioBruto);
        let baseIR        = salarioBruto - descontoINSS - (dependentes * 189.59);
        let descontoIRRF  = calcularIRRF(baseIR);
        let salarioLiq    = salarioBruto - descontoINSS - descontoIRRF - outrosDescontos;

        document.getElementById("resultado-body").innerHTML = `
            <div class="result-item highlight">
                <span class="result-label">Salário Líquido</span>
                <span class="result-value">${fmt(salarioLiq)}</span>
            </div>
            <div class="result-item">
                <span class="result-label">Salário Bruto</span>
                <span class="result-value">${fmt(salarioBruto)}</span>
            </div>
            <div class="result-item">
                <span class="result-label">Desconto INSS</span>
                <span class="result-value">- ${fmt(descontoINSS)}</span>
            </div>
            <div class="result-item">
                <span class="result-label">Desconto IRRF</span>
                <span class="result-value">- ${fmt(descontoIRRF)}</span>
            </div>
            <div class="result-item">
                <span class="result-label">Outros Descontos</span>
                <span class="result-value">- ${fmt(outrosDescontos)}</span>
            </div>
        `;
        document.getElementById("resultado").classList.add("visible");
    }
</script>
</body>

</html>
