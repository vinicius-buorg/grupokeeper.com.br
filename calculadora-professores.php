<?php
$h1          = "Calculadora de salário de professores";
$title       = "Calculadora de salário de professores";
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
                    <h1>Calculadora de Salário de Professores</h1>
                </div>
            </div>
        </section>

        <section id="calc-section">
            <div class="container">
                <div class="flex">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="calc-desc">
                            <h2>Composição do Salário dos Professores</h2>
                            <p>O salário dos professores é calculado com base na quantidade de aulas ministradas, seguindo as diretrizes da Convenção Coletiva de Trabalho.</p>

                            <h3>1. Salário Base</h3>
                            <p>O salário base corresponde ao total pelas aulas dadas. Multiplica-se o número de aulas semanais por 4,5 semanas e pelo valor da hora-aula.</p>

                            <h3>2. Hora-Atividade</h3>
                            <p>Adicional pelas atividades pedagógicas fora da sala de aula:</p>
                            <ul>
                                <li>Educação básica e ensino superior: 5% sobre o salário base</li>
                                <li>Sesi e Senai: 14% sobre o salário base</li>
                            </ul>

                            <h3>3. Descanso Semanal Remunerado (DSR)</h3>
                            <p>Corresponde a 1/6 da remuneração total. Incide sobre o salário base, hora-atividade, horas extras e outros adicionais.</p>

                            <h3>4. Adicional Noturno</h3>
                            <p>Para aulas ministradas a partir das 22h:</p>
                            <ul>
                                <li>Ensino superior: 25% sobre a hora trabalhada</li>
                                <li>Demais segmentos: 20% sobre a hora trabalhada</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="calc-card">
                            <h2>Cálculo mensal do salário</h2>

                            <div class="calc-group">
                                <label for="salario">Salário mensal (R$)</label>
                                <input type="text" id="salario" placeholder="Ex: 2.500,00">
                            </div>

                            <button class="btn-calcular" onclick="showResults()">Calcular</button>

                            <div class="calc-result-table">
                                <div class="result-row">
                                    <span class="row-label">Hora Atividade</span>
                                    <span class="row-value hora-atividade">R$ 0,00</span>
                                </div>
                                <div class="result-row">
                                    <span class="row-label">Salário Total</span>
                                    <span class="row-value resultado">R$ 0,00</span>
                                </div>
                            </div>
                        </div>

                        <div class="calc-card">
                            <h2>Cálculo do salário por aulas</h2>

                            <div class="calc-group">
                                <label for="qtd-aulas">Número de aulas semanais</label>
                                <input type="number" id="qtd-aulas" placeholder="Ex: 20" min="0">
                            </div>

                            <div class="calc-group">
                                <label for="valor-aulas">Valor por aula (R$)</label>
                                <input type="text" id="valor-aulas" placeholder="Ex: 25,00">
                            </div>

                            <button class="btn-calcular" type="button" onclick="showAllResults()">Calcular</button>

                            <div class="calc-result-table">
                                <div class="result-row">
                                    <span class="row-label">Salário Base</span>
                                    <span class="row-value salario-base">R$ 0,00</span>
                                </div>
                                <div class="result-row">
                                    <span class="row-label">DSR (1/6)</span>
                                    <span class="row-value DSR">R$ 0,00</span>
                                </div>
                                <div class="result-row">
                                    <span class="row-label">Hora Atividade (5%)</span>
                                    <span class="row-value hr-atividade">R$ 0,00</span>
                                </div>
                                <div class="result-row">
                                    <span class="row-label">Salário Total</span>
                                    <span class="row-value total-salario">R$ 0,00</span>
                                </div>
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
                    <a data-click-track="WhatsApp - orçamento - Calculadora Professores" href="<?= $unidades[1]["link_wpp"]; ?>" title="Entre em contato" target="_blank" class="orcamento">Solicite um orçamento</a>
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
        function fmt(val) {
            return "R$ " + val.toFixed(2).replace(".", ",").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function showResults() {
            var salario = parseFloat(document.querySelector('#salario').value.replace(/\./g, "").replace(",", "."));

            if (isNaN(salario) || salario <= 0) {
                alert("Por favor, insira um salário válido!");
                return;
            }

            var calcularHora = salario * 0.05;
            var totalSalario = salario + calcularHora;

            document.querySelector('.hora-atividade').textContent = fmt(calcularHora);
            document.querySelector('.resultado').textContent       = fmt(totalSalario);
        }

        function showAllResults() {
            var qtd_aula   = parseFloat(document.querySelector('#qtd-aulas').value) || 0;
            var valor_aula = parseFloat(document.querySelector('#valor-aulas').value.replace(/\./g, "").replace(",", ".")) || 0;

            var salario_base  = qtd_aula * 4.5 * valor_aula;
            var hr_atividade  = salario_base * 0.05;
            var dsr           = (salario_base + hr_atividade) / 6;
            var totalSalario  = salario_base + hr_atividade + dsr;

            document.querySelector('.salario-base').textContent  = fmt(salario_base);
            document.querySelector('.hr-atividade').textContent  = fmt(hr_atividade);
            document.querySelector('.DSR').textContent           = fmt(dsr);
            document.querySelector('.total-salario').textContent = fmt(totalSalario);
        }
    </script>
</body>

</html>
