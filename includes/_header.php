<header class="header-background">
    <nav>
        <?php include('includes/top-header.php'); ?>
        <div class="header-container-main">
            <div class="logo">
                <a href="<?php echo $url; ?>" title="<?php echo $h1 . " - " . $nome_empresa; ?>">
                    <span>
                        <picture>
                            <source type="image/png" srcset="<?php echo $url; ?><?php echo $logo_cliente; ?>">
                            <img width="210" height="61" src="<?php echo $url.$logo_cliente; ?>" alt="<?php echo $nome_empresa; ?>" title="<?php echo $nome_empresa; ?>" class="img-responsive">
                        </picture>
                    </span>
                </a>
            </div>
            <picture>
                <source type="image/png" srcset="<?php echo $url; ?><?php echo $bandeiras_header; ?>">
                <img width="102" height="30" src="<?php echo $url.$bandeiras_header; ?>" alt="<?php echo $nome_empresa; ?>" title="<?php echo $nome_empresa; ?>" class="img-responsive">
            </picture>
            <div class="menu">
                <ul class="menu-list">
                    <li class="<?php echo $canonical ==  $url ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>" title="Página inicial">Home</a></li>
                    <li class="<?php echo $canonical ==  $url.'quem-somos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>quem-somos" title="Quem Somos">Quem Somos</a></li>
                    <!-- <li class="<?php echo $canonical ==  $url.'vantagens' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>vantagens" title="Vantagens">Vantagens</a></li> -->
                    <!-- <li class="<?php echo $canonical ==  $url.'produtos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>produtos" title="Produtos">Certificados digitais</a></li> -->
                    <li class="liprod">
                        <p title="Serviços" class="not-fsz">Produtos / Serviços <i class="fa-solid fa-angle-right info"></i></p>
                        <ul class="sub-menu">
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'contabil-fiscal' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/contabil-fiscal" title="Contábil / Fiscal">Contábil / Fiscal</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'regularizacao-empresarial' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/regularizacao-empresarial" title="Regularização empresarial">Regularização empresarial</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'departamento-pessoal' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/departamento-pessoal" title="Departamento pessoal">Departamento pessoal</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'recursos-humanos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/recursos-humanos" title="Recursos Humanos">Recursos Humanos</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'treinamento-personalizado' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/treinamento-personalizado" title="Treinamento personalizado">Treinamento personalizado</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'bpo-financeiro' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/bpo-financeiro" title="BPO Financeiro">BPO Financeiro</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'assessoria-em-investimentos-e-financiamentos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/assessoria-em-investimentos-e-financiamentos" title="Assessoria em investimentos e financiamentos">Assessoria em investimentos e financiamentos</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'gestao-de-riscos-e-controles-internos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/gestao-de-riscos-e-controles-internos" title="Gestão de riscos e controles internos">Gestão de riscos e controles internos</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'reducao-de-custos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/reducao-de-custos" title="Redução de custos">Redução de custos</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'blindagem-de-patrimonio' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/blindagem-de-patrimonio" title="Blindagem de patrimônio">Blindagem de patrimônio</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'avaliacao-da-empresa' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/avaliacao-da-empresa" title="Avaliação da empresa">Avaliação da empresa</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'solucao-de-conflitos-corporativos' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/solucao-de-conflitos-corporativos" title="Solução de conflitos corporativos">Solução de conflitos corporativos</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'encerramento-de-empresas-com-diferencial-estrategico' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/encerramento-de-empresas-com-diferencial-estrategico" title="Encerramento de empresas com diferencial estratégico">Encerramento de empresas com diferencial estratégico</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'reestruturacao-empresarial' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/reestruturacao-empresarial" title="Reestruturação empresarial">Reestruturação empresarial</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'negocios-empresariais' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/negocios-empresariais" title="Negócios Empresariais">Negócios Empresariais</a></li>
                            <li class="<?php echo $canonical ==  $url. 'certificado-digital' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>certificado-digital" title="Certificado digital">Certificado digital</a></li>
                            <li class="<?php echo $canonical ==  $url. 'servicos/' . 'pessoa-fisica' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>servicos/pessoa-fisica" title="Pessoa Física">Pessoa Física</a></li>
                        </ul>
                    </li>
                    <li class="<?php echo $canonical ==  $url.'contabilidade-especializada' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>contabilidade-especializada" title="Especialidades">Especialidades</a></li>
                    <li class="<?php echo $canonical ==  $url.'ferramentas' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>ferramenta" title="Ferramentas">Ferramentas</a></li>
                    <li class="<?php echo $canonical ==  $url.'blog' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>blog" title="Blog">Blog</a></li>
                    <li class="linfo">
                        <a href="<?php echo $url; ?>informacoes" title="Informações"><i class="fa fa-info linfo-i"></i></a>
                        <ul class="sub-menu">
                            <?php echo $borg->subMenu($palavras_chave); ?>
                        </ul>
                    </li>
                    <li class="<?php echo $canonical ==  $url.'contato' ? 'pagina-focus':'';?>"><a href="<?php echo $url; ?>contato" title="Contato">Contato</a></li>
                    <!-- <li><a href="https://onvio.com.br/clientcenter/pt/auth?r=%2Fhome" title="Área do cliente">Área do cliente</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>