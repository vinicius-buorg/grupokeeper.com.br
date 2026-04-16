<?php // Versão 2.0
    session_start();
    include "buscaorganica/class.buscaorganica.php";
    // Parâmetros para URL
    $borg = new classBuscaOrganica(array(
        // URL local
        "http://localhost/working/grupokeeper.com.br/",
        // URL online
        "https://aprov.buscaorganica.com.br/grupokeeper.com.br/"
    ));

    // Principais Dados do Cliente
    $nome_empresa = "Grupo Keeper";
    $slogan       = "Gestão segura, estratégias personalizadas e redução de custos!";
    $emailContato = "assessoria@grupokeeper.com.br";

    // Variaveis para schema e site
    $dataDePublicacao = '2025-04-16';
    $dataDeModificacao = '2025-04-16';
    $facebook = "grupokeepercontabilidadeenegociosempresariais";
    $instagram = "grupokeepercontabilidade";
    $linkedin = "grupo-keeper";
    $youtube = "@GrupoKeeperContabilidadeConsul";
    $twitter = "KeeperConsult";
    
    // Logo para o schema e site
    $logo_cliente = 'imagens/logo.webp';
    $bandeiras_header = 'imagens/bandeiras.webp';
    $logo_buscaorganica = 'imagens/logo-buscaorganica.webp';
    
    // Parâmetros de Unidade
    $unidades = array(
        1 => array(
            "nome" => "Grupo Keeper",
            "rua" => "R. Sd. Deniz Pinto de Matos, 34",
            "bairro" => "Cidade Maia",
            "cidade" => "Guarulhos",
            "estado" => "São Paulo",
            "uf" => "SP",
            "cep" => "07115-220",
            "latitude_longitude" => "-23.45780110995526, -46.532631076819655",
            "ddd" => "11",
            "telefone" => "2358-5156", /* fixo sem ddd ex: 1313-1313 */
            "tel" => "(11) 2358-5156", /* fixo com ddd ex: (11) 1313-1313 */
            "link_tel" => "tel:1123585156", /* fixo com ddd sem espaço ex: 1113131313 */
            "whatsapp" => "94700-4429", /* whats sem ddd 91313-1313 */
            "wpp" => "(11) 94700-4429", /* whats com ddd (11) 91313-1313 */
            "link_wpp" => "https://wa.me/5511947004429?text=Ol%C3%A1%2C%20encontrei%20seu%20site%20na%20busca%20do%20Google%20e%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es", /*Adicionar a seguinte mensagem após inserir o número: ?text= */
            "link_maps" => "https://maps.app.goo.gl/exxtqcNSBh4w7cUu7",
            "iframe_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.067558011785!2d-46.535141624320545!3d-23.458027478870957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef54157a81ba1%3A0x9d7f625d9992b5ad!2sGrupo%20Keeper%20Contabilidade!5e0!3m2!1spt-BR!2sbr!4v1739890989773!5m2!1spt-BR!2sbr"
        )
    );
    // Numero do whatsapp do cliente para usar no botão da pagina de ranqueamento
    $whatsapp_botao = '+5511947004429';
    $msg_servico = $unidades[1]['link_wpp'] . urlencode("Olá, vim pelo site e gostaria de saber sobre: ");
    $msg_servicos = $unidades[1]['link_wpp'] . urlencode("Olá, vim pelo site e gostaria de saber sobre os mais de 30 serviços personalizáveis");

    //Endereço
    $low_adress = $unidades[1]['rua'] . " - " . $unidades[1]['bairro'] . " - " . $unidades[1]['cidade'];
    $full_adress = $unidades[1]['rua'] . " - " . $unidades[1]['bairro'] . " - " . $unidades[1]['cidade'] . $unidades[1]['uf'] . " - " . $unidades[1]['cep'];

    //Mensagens Padrão
    $msg_padrao_wpp = urlencode('Olá, vim pelo site e gostaria de mais informações!');

    // Compilado de todos os telefones para schema
    $telefones_cliente = [
        $unidades[1]['tel'],
        $unidades[1]['wpp'],
    ];

    // Variáveis da head.php
    $url = $borg->url;
    $canonical = $borg->canonical;
    $meta_img    = $url . 'imagens/thumbs/' . $borg->formatStringToURL($title).'.jpg'; // mudar extensao se necessário
    
    $palavras_chave = array(
        "Avaliação de Marca",
        "Holding Familiar",
        "Valuation",
        "Holding Patrimonial",
        "Assessoria Contábil",
        "Baixa do Cnpj",
        "Consultoria Contabil",
        "Sistema de Folha de Pagamento",
        "Valuation de Empresas",
        "Contabilidade Empresarial",
        "Declaração de Imposto de Renda Valor",
        "Baixa em Empresa",
        "Gestão Patrimonial",
        "Blindagem Patrimonial",
        "Declaração de Imposto de Renda Online",
        "Contabilidade On Line",
        "Abrir Empresa Online",
        "Baixa de Cnpj",
        "Baixa de Empresa",
        "Holding Patrimonial Familiar",
        "Melhor Contabilidade Online",
        "Valuation Empresa",
        "Redução de Impostos para Empresas",
        "Contabilidade para Empresas",
        "Contabilidade para Industria",
        "Contabilidade para Industrias",
        "Contabilidade Restaurantes",
        "Contabilidade para Restaurantes",
        "Consultoria Contábil Online",
        "Contabilidade de Empresas",
        "Holding Patrimonial Tributação",
        "Valuation Startup",
        "Contabilidade para Escola",
        "Contabilidade para Escolas",
        "Holding Familiar Patrimonial",
        "Abrir Micro Empresa Online",
        "Encerramento de Cnpj",
        "Holding Familiar Blindagem Patrimonial",
        "Bpo Financeiro Empresas",
        "Holding Patrimonial Blindagem",
        "Valuation Consultoria",
        "Valuation Avaliação de Empresas",
        "Bpo Financeiro para Pequenas Empresas",
        "Serviços de Folha de Pagamento",
        "Valuation de Startups",
        "Bpo Financeiro",
        "Blindagem Empresarial",
        "Sistema de Folha de Ponto",
        "Contabilidade de Restaurantes",
        "Contabilidade para Associação",
        "Contabilidade para Empresa",
        "Contabilidade para Comércio",
        "Contabilidade para Empreendedores",
        "Contabilidade para Supermercados",
        "Abrir Empresa em São Paulo",
        "Abertura de Empresa em São Paulo",
        "Contabilidade em Guarulhos",
        "Empresa de BPO Financeiro em Guarulhos",
        "Bpo Financeiro em Guarulhos",
        "Recrutamento e Seleção",
  );
    
    //Pegar da instancia do analytics 
    $codigoAnalytics = 'G-EVHSTSRF48';

    /*
        $usarListaThumbSemWeb
        No caso de true vai usar a Lista Thumb sem a extensão webp com img e nao com picture
    */ 
    $usarListaThumbSemWeb = true; /* false || true*/

    // CSS default
    $borg->css_files_default = array(
        "padroes/padronizacao",
        "padroes/grid-system",
        "padroes/slicknav-menu",
        "estilo-padrao",
        "elementos/fontawesome.min",
        "ferramentas/aviso-cookies",
        "ferramentas/gadget", //Cookies
        "ferramentas/aos",
    );

    // JS Default
    $borg->js_files_default = array(
        "padroes/jquery-3.6.0.min",
        "padroes/jquery.slicknav.min",
        "jquery.buscaorganica.padrao",
        "jquery.buscaorganica.custom",
        "tools/aviso-cookies.buscaorganica", //Cookies
        "tools/scroll",
        "tools/fontawesome",
        "tools/aos",
    );

    $direitosAutorais = "<!-- Desenvolvido por Busca Orgânica | Site: www.buscaorganica.com.br | Email: contato@buscaorganica.com.br -->";
    include "buscaorganica/head.buscaorganica.min.php";

    
    $borg->breadcrumb_text_before_home = '<i class="fa-solid fa-house"></i>';
    
    /**
    * Outras Questões
    * 
    * Submenu
    * 
    * $opcoes = array(
    * "id" => "",
    * "class" => "",
    * "limit" => 9999,
    * "random" => false
    * );
    * 
    * $borg->subMenu($palavras_chave, $opcoes);
    * 
    */

    /**
    * Breadcrumb
    * 
    * -> Propriedades
    * 
    * Altera a url da Home no breadcrumb
    * $borg->breadcrumb_url_home = "";
    * 
    * Altera o texto que antecede a Home
    * $borg->breadcrumb_text_before_home = "";
    * 
    * Altera o texto da Home no breadcrumb
    * $borg->breadcrumb_text_home = "Home";
    * 
    * Altera o divisor de níveis do breadcrumb
    * $borg->breadcrumb_spacer = " » ";
    * 
    * -> Função
    * 
    * Cria o breadcrumb
    * $borg->breadcrumb(array("Informações", $h1));
    * 
    */

/**
    * Lista Thumbs
    * 
    * $opcoes = array(
    * "id" => "",
    * "class_div" => "col-md-3",
    * "class_section" => "",
    * "class_img" => "img-responsive",
    * "title_tag" => "h2",
    * "folder_img" => "imagens/thumbs/",
    * "extension" => "jpg",
    * "limit" => 9999,
    * "type" => 1,
    * "random" => false,
    * "text" => "",
    * "headline_text" => "Veja Mais"
    * );
    * 
    * 
    * $borg->listaThumbs($palavras_chave, $opcoes, $usarListaThumbSemWeb);
    * 
    */

/**
    * Funções Extras
    * 
    * $borg->formatStringToURL();
    * Reescreve um texto em uma URL válida
    * 
    */
    

