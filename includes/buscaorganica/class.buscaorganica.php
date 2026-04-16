<?php 

/**
* @copyright Copyright (c) Busca Orgânica. (https://www.buscaorganica.com.br/)
* @responsavel Denis Cedro (contato@buscaorganica.com.br)
*/

class classBuscaOrganica {
    
    public $url = "";
    
    public $canonical = "";
    
    public $breadcrumb_url_home = "";
    
    public $breadcrumb_text_before_home = "";
    
    public $breadcrumb_text_home = "Home";
    
    public $breadcrumb_spacer = " » ";
    
    public $url_extension = "";
    
    public $assets_dir = "assets/";
    
    private $css_compress = "";
    
    public $css_files_default = array();
    
    private $js_compress = "";
    
    public $js_files_default = array();
    
    public $js_custom = array();
    
    /**
    * Define as propriedades url e canonical
    * @param Array $array_urls
    */
    public function __construct($array_urls, $options = null)    {
        if (!empty($options))
        {
            foreach($options as $i => $option)
            {
                $this->$i = $option;
            }
        }
        $this->url = $this->setUrl($array_urls);
        $this->canonical = $this->setCanonical();
    }
    
    private function setUrl($urls) {
        $url = $urls[1];
        if (strpos($_SERVER["SERVER_NAME"], "localhost") !== false)
        {
            $url = $urls[0];
        }
        return $url;
    }
    
    // Seta a canonical para uso na head
    private function setCanonical()    {
        $pag = $_SERVER["PHP_SELF"];
        $url_explode = explode("/", $pag);
        $url_pagina = end($url_explode);
        if ($url_pagina == "index.php" || $url_pagina == "index" || $url_pagina == "")
        {
            $url_pagina = str_replace("index.php", "", $url_pagina);
            $url_canonical = $this->url.$url_pagina;
        }
        else
        {
            $url_pagina = str_replace(".php", "", $url_pagina);
            $url_canonical = $this->url.$url_pagina;
        }
        if (!empty($this->url_extension))
        {
            $url_canonical .= $this->url_extension;
        }
        return $url_canonical;
    }
    
    /**
    * Formata uma string em uma url amigável
    * @param String $string
    */
    public function formatStringToURL($string)    {
        $str   = trim($string);
        $str_a = strtolower($str);
        $str_b = strip_tags($str_a);
        $str_c = preg_replace_callback('!\s+!',
        function($m) {
            return "-";
        }, $str_b);
        $array_a = array('.', '!', '@', '#', '$', '%', '&', '*', '+', '=', '(', ')', '[', ']', '{', '}', '<', '>', '\'');
        $array_b = array('-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-');
        $str_d = str_replace($array_a, $array_b, $str_c);
        $array_1 = array(',', ';', ':', '/', '~', '?', '!', 'á', 'é', 'í', 'ó', 'ú', 'â', 'ê', 'î', 'ô', 'û', 'à', 'è', 'ì', 'ò', 'ù', 'ã', 'õ', 'ç', 'ñ', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Â', 'Ê', 'Î', 'Ô', 'Û', 'À', 'È', 'Ì', 'Ò', 'Ù', 'Ã', 'Õ', 'Ç', 'Ñ', 'ä', 'Ä', 'ë', 'Ë', 'ï', 'Ï', 'ö', 'Ö', 'ü', 'Ü');
        $array_2 = array('', '', '', '-', '-', '', '', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'e', 'i', 'o', 'u', 'a', 'o', 'c', 'n', 'a', 'a', 'e', 'e', 'i', 'i', 'o', 'o', 'u', 'u');
        $str_e = str_replace($array_1, $array_2, $str_d);
        $str_f = preg_replace_callback('/[-]+/',
        function($m) {
            return "-";
        }, $str_e);
        $url = trim($str_f, "-");
        return $url;
    }
    
    /**
    * Forma uma lista de links para uso no aside
    * @param Array $array - Recebe uma lista de palavras chave
    * @param Array $set_options - Recebe os parametros opicionais
    */
    public function subMenu($array, $set_options = null)    {
        $html = "";
        $options = array(
            "id" => empty($set_options["id"]) ? "" : $set_options["id"],
            "class" => empty($set_options["class"]) ? "" : $set_options["class"],
            "random" => empty($set_options["random"]) ? false : true,
            "limit" => empty($set_options["limit"]) ? 9999 : $set_options["limit"]
        );
        $class = !empty($options["class"]) ? " class=\"" . $options["class"] . "\"" : "";
        if ($options["random"] == true) {
            shuffle($array);
        }
        $i = 1;
        foreach ($array as $chave => $valor) {
            $palavra = $valor;
            if (!is_numeric($chave)) {
                $palavra = $chave;
            }
            if ($i <= $options["limit"]) {
                $url_palavra = $this->formatStringToURL($palavra);
                if (!empty($this->url_extension))
                {
                    $url_palavra .= $this->url_extension;
                }
                $html .= "<li" . (!empty($options["id"]) ? " id=\"" . $options["id"] . "-" . $i . "\" " : "") . $class . ">";
                $html .= "<a href=\"" . $this->url . $url_palavra . "\" title=\"" . $palavra . "\">" . $palavra . "</a></li>\n";
                $i++;
            }
        }
        return $html;
    }
    
    /**
    * Forma uma lista de links para o blog, usado no aside e pode ser usado em outros locais conforme necessidade
    * @param Array $array - Recebe uma lista de páginas
    * @param Array $set_options - Recebe os parametros opicionais
    * @param String $tipo - thumb ou lista
    * @param Boolean $webp - true ou false
    */
    public function subMenuBlog($arrayPaginas, $set_options = null, $tipo = 'thumb', $webp = false)    {
        $html = "";
        $options = array(
            "id" => empty($set_options["id"]) ? "" : $set_options["id"],
            "class" => empty($set_options["class"]) ? "" : $set_options["class"],
            "random" => empty($set_options["random"]) ? false : true,
            "limit" => empty($set_options["limit"]) ? 9999 : $set_options["limit"]
        );
        $class = !empty($options["class"]) ? " class=\"" . $options["class"] . "\"" : "";
        if ($options["random"] == true) {
            shuffle($arrayPaginas);
        }
        $i = 1;
        if ($tipo == 'thumb') {
            foreach ($arrayPaginas as $url => $pagina) {
                if ($i <= $options["limit"]) {
                    $imgFolder = !empty($pagina['imgPath']) ? $pagina['imgPath'] : 'imagens/blog/thumbs/';
                    $src_img = $this->verificaImagem($this->url . $imgFolder . $pagina['image']);
                    if ($webp) {
                        $imgWebp = preg_replace('/\.(png|jpg|webp)$/i', '', $src_img);
                        $src_img_webp = $this->verificaImagem($imgWebp . '.webp');
                    }

                    $html .= '<li' . (!empty($options["id"]) ? ' id="' . $options["id"] . '-' . $i . '" ' : "") . $class . '>';
                    $html .= '  <a href="' . $this->url .'blog/'. $url . '" title="' . $pagina['title'] . '">';
                    $html .= '      <div class="display-table">';
                    if ($webp) {
                        $html .= '          <picture class="td">';
                        $html .= '              <source type="image/webp" srcset="' . $src_img_webp . '">';
                        $html .= '              <img src="' . $src_img . '" alt="' . $pagina['title'] . '" title="' . $pagina['title'] . '">';
                        $html .= '          </picture>';
                    } else {
                        $html .= '              <img src="' . $src_img . '" alt="' . $pagina['title'] . '" title="' . $pagina['title'] . '">';
                    }
                    $html .=            '<div class="td title-submenu-blog">' . $pagina['title'] . ' <span class="description-submenu-blog">' . $pagina['title'] . '</span></div>';
                    $html .= '      </div>';
                    $html .= '  </a>';
                    $html .= '</li>';
                    $i++;
                }
            }
        } else {
            foreach ($arrayPaginas as $url => $pagina) {
                if ($i <= $options["limit"]) {
                    $html .= '<li' . (!empty($options["id"]) ? ' id="' . $options["id"] . '-' . $i . '" ' : "") . $class . '>';
                    $html .= '  <a href="' . $this->url .'blog/'. $url . '" title="' . $pagina['title'] . '">' . $pagina['title'] . '</a>';
                    $html .= '</li>';
                    $i++;
                }
            }
        }
        return $html;
    }
    
    /**
    * Forma uma lista de Thumbs
    * @param Array $array - Recebe uma lista de palavras chave
    * @param Array $set_options - Recebe os parametros opicionais
    * @param Boolean $projetoRegional - Recebe true ou false para designar projeto regional, isso faz colocar ou não os webp nas thumbs
    */
    public function listaThumbs($array, $set_options = null, $projetoRegional = false)    {
        $html = "";
        $options = array(
            "id" => empty($set_options["id"]) ? "" : $set_options["id"],
            "class_div" => empty($set_options["class_div"]) ? "col-md-3" : $set_options["class_div"],
            "class_section" => empty($set_options["class_section"]) ? "" : $set_options["class_section"],
            "class_img" => empty($set_options["class_img"]) ? "img-responsive" : $set_options["class_img"],
            "title_tag" => empty($set_options["title_tag"]) ? "h2" : $set_options["title_tag"],
            "folder_img" => empty($set_options["folder_img"]) ? "imagens/thumbs/" : $set_options["folder_img"],
            "extension" => empty($set_options["extension"]) ? "jpg" : $set_options["extension"],
            "limit" => empty($set_options["limit"]) ? 9999 : $set_options["limit"],
            "type" => empty($set_options["type"]) ? 1 : $set_options["type"],
            "random" => empty($set_options["random"]) ? false : true,
            "text" => empty($set_options["text"]) ? false : true,
            "headline_text" => empty($set_options["headline_text"]) ? "Veja Mais" : $set_options["headline_text"],
        );
        
        if ($options["random"] === true) {
            $nova_array = array();
            foreach ($array as $chave => $valor) {
                $nova_array[] = array("chave" => $chave, "valor" => $valor);
            }
            shuffle($nova_array);
            $array = array();
            foreach ($nova_array as $valor) {
                $array[$valor["chave"]] = $valor["valor"];
            }
        }
        $class_div = !empty($options["class_div"]) ? " class=\"" . $options["class_div"] . "\"" : "";
        $class_div_sem_div = !empty($options["class_div"]) ? " " . $options["class_div"] . " " : "";
        $class_section = !empty($options["class_section"]) ? " class=\"" . $options["class_section"] . "\"" : "";
        $class_img = !empty($options["class_img"]) ? " class=\"" . $options["class_img"] . "\"" : "";
        $img_folder = $options["folder_img"];
        $i = 1;
        foreach ($array as $chave => $valor) {
            $palavra = $valor;
            $text = "";
            if (!is_numeric($chave)) {
                $palavra = $chave;
                $text = $valor;
            }
            if ($i <= $options["limit"]) {
                $src_img = $this->verificaImagem($this->url . $img_folder . $this->formatStringToURL($palavra) . "." . $options["extension"], $options["extension"]);
                
                $imgWebp = $this->retiraExtensoesEPoeWebP($src_img);
                $src_img_webp = $this->verificaImagem($imgWebp);
                
                $url_page = $this->url . $this->formatStringToURL($palavra);
                if (!empty($this->url_extension))
                {
                    $url_page .= $this->url_extension;
                }
                switch ($options["type"]) {
                    case 3:
                        $html .= "<div" . (!empty($options["id"]) ? " id=\"".$options["id"] . "-" . $i . "\" " : "") . $class_div . ">\n";
                        $html .= "<div class=\"icon-block viewport\">\n";
                        $html .= "<a rel=\"nofollow\" href=\"" . $url_page . "\" title=\"" . $palavra . "\">\n";
                        $html .= "<div class=\"dark-background\">\n";
                        $html .= "<" . $options["title_tag"] . ">\n";
                        $html .= $palavra . "\n";
                        $html .= "</" . $options["title_tag"] . ">\n";
                        $html .= "</div>\n";
                        
                        if ($projetoRegional) {
                            $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $palavra . "\" title=\"" . $palavra . "\" " . $class_img . ">\n";
                        } else {
                            $html .= "<picture>";
                            $html .=     "<source type=\"image/webp\" srcset=\"".$src_img_webp."\">";
                            $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $palavra . "\" title=\"" . $palavra . "\" " . $class_img . ">\n";
                            $html .= "</picture>";
                        }
                        
                        $html .= "</a>\n";
                        $html .= "</div>\n";
                        if ($options["text"] === true && !empty($text)) {
                            $html .= "<p>" .$text . "</p>\n";
                        }
                        $html .= "</div>\n";
                        break;
                    case 2:
                        $html .= "<div" . (!empty($options["id"]) ? " id=\"".$options["id"] . "-" . $i . "\" " : "") . $class_div . ">\n";
                        $html .= "<div class=\"icon-block viewport\">\n";
                        $html .= "<a rel=\"nofollow\" href=\"" . $url_page . "\" title=\"" . $palavra . "\">\n";
                        $html .= "<div class=\"dark-background\">\n";
                        $html .= "<em>" . $options["headline_text"] . "</em>\n";
                        $html .= "</div>\n";
                        
                        if ($projetoRegional) {
                            $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $palavra . "\" title=\"" . $palavra . "\" " . $class_img . ">\n";
                        } else {
                            $html .= "<picture>";
                            $html .=     "<source type=\"image/webp\" srcset=\"".$src_img_webp."\">";
                            $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $palavra . "\" title=\"" . $palavra . "\" " . $class_img . ">\n";
                            $html .= "</picture>";
                        }
                        
                        $html .= "</a>\n";
                        $html .= "</div>\n";
                        $html .= "<" . $options["title_tag"] . ">\n";
                        $html .= "<a href=\"". $url_page . "\" title=\"" . $palavra . "\">" . $palavra . "</a>\n";
                        $html .= "</" . $options["title_tag"] . ">\n";
                        if ($options["text"] === true && !empty($text)) {
                            $html .= "<p>" .$text . "</p>\n";
                        }
                        $html .= "</div>\n";
                        break;
                    default:
                        $html .= "<div" . (!empty($options["id"]) ? " id=\"".$options["id"] . "-" . $i . "\" " : "") . $class_div . ">\n";
                        // $html .= "<div class=\"box-thumb\">\n";
                        $html .= "<div class=\"box-thumb \">\n";
                        $html .= "<a rel=\"nofollow\" href=\"" . $url_page . "\" title=\"" . $palavra . "\">\n";
                        
                        if ($projetoRegional) {
                            $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $palavra . "\" title=\"" . $palavra . "\" " . $class_img . ">\n";
                        } else {
                            $html .= "<picture>";
                            $html .=     "<source type=\"image/webp\" srcset=\"".$src_img_webp."\">";
                            $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $palavra . "\" title=\"" . $palavra . "\" " . $class_img . ">\n";
                            $html .= "</picture>";
                        }
                        $html .= "</a>\n";
                        $html .= "<" . $options["title_tag"] . ">\n";
                        $html .= "<a href=\"". $url_page . "\" title=\"" . $palavra . "\">" . $palavra . "</a>\n";
                        $html .= "</" . $options["title_tag"] . ">\n";
                        // $html .= "</div>\n";
                        $html .= "</div>\n";
                        $html .= "</div>\n";
                        break;
                }
                $i++;
            }
        }
        return $html;
    }

    /**
    * Forma o breadcrumb html para as páginas
    * @param Array $array - Recebe uma lista de palavras chave
    * @param Array $set_options - Recebe os parametros opicionais
    * Alteração: Retirada de data-vocabulary: não é mais usado pelo google. Alteração em: 03/2020
    */
    public function breadcrumb($array)
    {
        $html = "";
        $n_array = count($array);
        $link_home = $this->url;
        if (!empty($this->breadcrumb_url_home)) {
            $link_home = $this->breadcrumb_url_home;
        }
        $html .= "<div id=\"breadcrumb\">\n";
        $html .= $this->breadcrumb_text_before_home;
        $html .= "<a rel=\"home\" href=\"" . $link_home . "\" title=\"" . $this->breadcrumb_text_home . "\"><span>" . $this->breadcrumb_text_home . "</span></a>" . $this->breadcrumb_spacer;
        $i = 1;
        foreach($array as $string) {
            $html .= $this->setBreadcrumb($i, $n_array, $string);
            if ($i < $n_array) {
                $html .= $this->breadcrumb_spacer;
            }
            $i++;
        }
        for ($index = 1; $index < $i; $index++) {
            $html .= "</div>\n";
        }
        $html .= "</div>\n";
        return $html;
    }

    /**
    * Auxilia na formação do breadcrumb
    * @param Int $n - Recebe o numero do atual da página
    * @param Int $total - Recebe a quantidade total de páginas
    * @param String $string - Recebe o nome da página
    */
    private function setBreadcrumb($n, $total, $string)
    {
        $convert_string_to_url = $this->formatStringToURL($string);
        if ($convert_string_to_url == "mapa-do-site")    {
            $convert_string_to_url = "mapa-site";
        }
        $url_breadcrumb = $this->url . $convert_string_to_url;
        if (!empty($this->url_extension)) {
            $url_breadcrumb .= $this->url_extension;
        }
        $html  = "<div>\n";
        $html .= "<a href=\"" . $url_breadcrumb . "\" title=\"" . $string . "\">\n";
        $html .= $n == $total ? "<strong>" : "";
        $html .= "<span class=\"page\">" . $string . "</span>";
        $html .= $n == $total ? "</strong>" : "";
        $html .= "\n</a>\n";
        return $html;
    }

    /**
    * Verifica se a imagem existe no diretório
    * @param String $src - Recebe o endereço da imagem
    */
    private function verificaImagem($src, $extensao = 'jpg')
    {
        $new_img = $this->url . "imagens/thumbs/sem-imagem.".$extensao;
        if (strpos($this->url, "localhost") == true)    {
            $file = str_replace($this->url, "", $src);
            if (file_exists($file))
            {
                $new_img = $src;
            }
        }
        else    {
            $new_img = $src;
        }
        return $new_img;
    }

    /**
    * Roda o parametro de palavra e quantidade e monta a galeraia usando o fancy
    * @param String $palavra - Recebe o nome da palavra chave
    * @param Int $quantidade - Recebe a quantiade de imagens da galeria
    * @param String $formato - Recebe o formato das imagens da galeria
    * @param String $webp - Recebe se é com ou sem webp
    */
    public function listaGaleria($palavra = null, $quantidade = null, $formato = 'jpg', $webp = false)
    {
        $html = "";
        try {
            if (empty($palavra)) {
                throw new Exception("Palavra chave não definida", 1);
            }
            if (empty($quantidade)) {
                throw new Exception("Quantidade não definida", 2);
            }
            $html .= "<div class=\"lista-galeria-fancy flex\">";
            $url_palavra = $this->formatStringToURL($palavra);
            $src_default = $this->url."imagens/".$url_palavra."/";
            for ($i = 1; $i <= $quantidade; $i++) {
                $img_big   = $src_default.$url_palavra."-".$i.".".$formato;
                $img_small = $src_default.$url_palavra."-thumb-".$i.".".$formato;

                $html .= "<div class=\"col-xs-4 col-sm-3 col-md-3 col-lg-3\">";
                $html .= "<a href=\"".$img_big."\" title=\"".$palavra." - ".$i."\" data-fancybox-group=\"".$url_palavra."\">";
                
                /*
                    Filtra se as imagens são webp ou não
                */
                if ($webp) {
                    $imgWebp = $this->retiraExtensoesEPoeWebP($img_small);
                    $img_small_webp = $this->verificaImagem($imgWebp);
    
                    $html .= "<picture>";
                    $html .=     "<source type=\"image/webp\" srcset=\"".$img_small_webp."\">";
                    $html .=     "<img src=\"".$img_small."\" alt=\"".$palavra." - ".$i."\" title=\"".$palavra." - ".$i."\" class=\"img-responsive\">";
                    $html .= "</picture>";
                } else {
                    $html .= "<img src=\"".$img_small."\" alt=\"".$palavra." - ".$i."\" title=\"".$palavra." - ".$i."\" class=\"img-responsive\">";
                }
               
                $html .= "</a>";
                $html .= "</div>";
            }
            $html .= "</div>";
            $html .= "<p class=\"font-12\">Clique nas imagens para ampliar.</p>";
            return $html;
        } catch (Exception $e) {
            switch ($e->getCode()){
                case 1:
                    return "<p style=\"text-align:center\">".$e->getMessage()."</p>";
                    break;
                case 2:
                    return $html;
                    break;
                default:
                break;
            }
        }
    }

    public function retiraExtensoesEPoeWebP($src_img) {
        $imgWebp = str_replace('.png', '', $src_img);
        $imgWebp = str_replace('.jpg', '', $imgWebp);
        return $imgWebp.'.webp';
    }
        

    public function cssCompress($array_files = null)
    {
        $retorno = "";
        $root_files = $this->assets_dir."css/";
        if (!empty($this->css_files_default)) {
            foreach ($this->css_files_default as $file) {
                $this->css_compress .= (is_file($root_files.$file.".css") ? $this->my_file_get_contents($this->url.$root_files.$file.".css") : "");
            }
        }
        if (isset($array_files) && !empty($array_files)) {
            foreach ($array_files as $file) {
                $this->css_compress .= (is_file($root_files.$file.".css") ? $this->my_file_get_contents($this->url.$root_files.$file.".css") : "");
            }
        }
        $this->css_compress = str_replace(array("\r", "\n"), '', $this->css_compress);
        $this->css_compress = preg_replace_callback('!/\*[^*]*\*+([^/][^*]*\*+)*/!', function($m) {
                return "";
            },
            $this->css_compress
        );
        $this->css_compress = str_replace('{ ','{', $this->css_compress);
        $this->css_compress = str_replace(' }', '}', $this->css_compress);
        $this->css_compress = str_replace('; ', ';', $this->css_compress);
        $this->css_compress = str_replace(["\r\n","\r","\n","\t",'  ','    ','     '], '', $this->css_compress);
        $this->css_compress = preg_replace_callback(['(( )+{)','({( )+)'], function($m) {
            return "{";
            }, $this->css_compress
        );
        $this->css_compress = preg_replace_callback(['(( )+})','(}( )+)','(;( )*})'], function($m) {
                return "}";
            }, $this->css_compress
        );
        $this->css_compress = preg_replace_callback(['(;( )+)','(( )+;)'], function($m) {
                return ";";
            }, $this->css_compress
        );
        if (!empty($this->css_compress)) {
            echo "<style>".$this->css_compress."</style>";
        }
    }
    

    /** 
    * jsCompress pega arquivos da variavel js_files_default e js_custom
    */
    public function jsCompress()
    {
        $root_files = $this->assets_dir."js/";
       
        if (!empty($this->js_files_default)) {
            foreach ($this->js_files_default as $file) {
                $this->js_compress .= (is_file($root_files.$file.".js") ? $this->my_file_get_contents($this->url.$root_files.$file.".js") : "");
            }
        }
       
        if (isset($this->js_custom) && !empty($this->js_custom))
        {
            foreach ($this->js_custom as $file) {
                $this->js_compress .= (is_file($root_files.$file.".js") ? $this->my_file_get_contents($this->url.$root_files.$file.".js") : "");
            }
        }
       
        $this->js_compress = str_replace(array("\r", "\n"), '', $this->js_compress);
       
        $this->js_compress = str_replace(["\r\n","\r","\t","\n",'  ','    ','     '], '', $this->js_compress);
        
        $this->js_compress = preg_replace_callback(['(( )+\))','(\)( )+)'], function($m) {
                return ")";
            }, $this->js_compress
        );
       
        $this->js_compress = preg_replace_callback('!/\*.*?\*/!s', function($m) {
                return "";
            }, $this->js_compress
        );
        $this->js_compress = preg_replace_callback('/\n\s*\n/', function($m) {
                return "\n";
            }, $this->js_compress
        );
        
        if (!empty($this->js_compress)) {
            echo "<script>".$this->js_compress."</script>";
        }
       
    }

    private function my_file_get_contents($url)
    {
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        ob_start();
        curl_exec($ch);
        curl_close($ch);
        $file_contents = ob_get_contents();
        ob_end_clean();
        return $file_contents;
    }
    
    public function alerta($string)
    {
        header('Content-type: text/html; charset=utf-8');
        echo "<p style=\"text-align:center;font-size:26px;color:red;margin:32px 0px;\">".$string."</p>";
    }
    
        
    /**
    * Faz um replace lógico por primeira ou ultima dentro de uma variavel
    * @param Array $procurar_nessa
    * @param String $primeira_occorencia_dessa
    * @param Int $primeira_ou_ultima
    * @param String $trocar_por
    */
    public function replace($procurar_nessa, $primeira_occorencia_dessa, $primeira_ou_ultima = 1, $trocar_por = '') {
        if (!empty($primeira_occorencia_dessa)) {
            if ($primeira_ou_ultima === 1) {
                $encontrado = strpos($procurar_nessa, $primeira_occorencia_dessa, 0);
            } else {
                $encontrado = strrpos($procurar_nessa, $primeira_occorencia_dessa);
            }
            if ($encontrado === true || $encontrado === 0 || is_numeric($encontrado)) {
                return substr_replace($procurar_nessa, $trocar_por, $encontrado, strlen($primeira_occorencia_dessa));
            }
        }
        return $procurar_nessa;
    }

    /**
    * Remove o primeiro caracter com default para /
    * @param String $string
    * @param String $caracterer
    */
    public function removePrimeiroCaracter($string, $caracterer = '/') {
        if (empty($string) || empty($caracterer)) return $string;
        if (substr($string, 0, 1) === $caracterer) {
            return replace($string, $caracterer);
        }
        return $string;
    }


    /**
    * Retorna o box para pesquisa
    * @param Array $opcoes - Recebe opções, tipo e tema
    */
    public function retornarBoxPesquisa($opcoes = null) {
        $tipo = isset($opcoes['tipo']) ? $opcoes['tipo'] : 1;
        
        $tema = '';
        if (isset($opcoes['tema']) && ($opcoes['tema'] == 'cinza' || $opcoes['tema'] == 'branco')) {
            $tema = 'pesquisa-box-'.$opcoes['tema'];
        }

        switch ($tipo) {
            case 1:
                $html = '
                <div class="pesquisa-box '.$tema.'">
                    <form method="post" class="search" action="pesquisa">
                        <input type="search" name="pesquisa" placeholder="Pesquisar">
                        <button name="ir" title="Pesquisar"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                ';
                break;
            case 2:
                $html = '
                <div class="pesquisa-box pesquisa-box-2 '.$tema.'">
                    <form method="post" class="search" action="pesquisa">
                        <input type="search" name="pesquisa" placeholder="Pesquisar">
                        <button name="ir" title="Pesquisar"><span class="inline-block">Pesquisar</span> <i class="fa fa-search"></i></button>
                    </form>
                </div>
                ';
            break;

            default:
                # code...
                break;
        }
        
        return $html;
    }

    /**
    * Forma uma lista com links para pequisa
    * @param Array $array - Recebe uma lista de palavras chave
    */
    public function retornaPesquisa($palavrasChave, $pesquisar) {
        $arrayEncontrado = [];
        $p = $this->formatStringToURL($pesquisar);
        foreach ($palavrasChave as $key => $value) {
			if (strpos($this->formatStringToURL($value), $p) !== false) {
                $arrayEncontrado[$key] = $value;
            }
        }

        $retornoListaCompleta = $this->listaThumbs($arrayEncontrado, array(
            "class_div" => "col-xs-6 col-sm-4 col-md-3 col-lg-3",
        ));

        return $retornoListaCompleta;
    }

    /**
    * Retorna o blog, área geral de posts e página específica
    * @param Array $paginasBlog - Recebe uma lista de palavras chave
    * @param Boolean $areaGeral - Indica se é área geral ou página específica
    * @param Boolean $webp - true ou false
    */
    public function blog($paginasBlog, $areaGeral, $webp = false) {
        $arrayNovo = [];
        $html = "";
        
        if ($areaGeral) {
            foreach ($paginasBlog as $key => $value) {
                $src_img = $this->verificaImagem($this->url . 'imagens/blog/thumbs/' . $value['image']);
                if ($webp) {
                    $imgWebp = $this->retiraExtensoesEPoeWebP($src_img);
                    $src_img_webp = $this->verificaImagem($imgWebp);
                }

                $html .= "<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3\">\n";
                $html .= "<div class=\"box-thumb\">\n";
                $html .= "<a rel=\"nofollow\" href=\"" . $this->url .'blog/'. $key . "\" title=\"" . $value['title'] . "\">\n";
                if ($webp) {
                    $html .= "<picture>";
                    $html .=     "<source type=\"image/webp\" srcset=\"".$src_img_webp."\">";
                    $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $value['title'] . "\" title=\"" . $value['title'] . "\">\n";
                    $html .= "</picture>";
                } else {
                    $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $value['title'] . "\" title=\"" . $value['title'] . "\">\n";
                }
                
                $html .= "</a>\n";
                $html .= "<h2>\n";
                $html .= "<a href=\"" . $this->url .'blog/'. $key . "\" title=\"" . $value['title'] . "\">" . $value['title'] . "</a>\n";
                $html .= "</h2>\n";
                $html .= "</div>\n";
                $html .= "</div>\n";
            }
        } elseif (!$areaGeral) {
            $src_img = $this->verificaImagem($this->url . 'imagens/blog/' . $paginasBlog['image']);
            if ($webp) {
                $imgWebp = $this->retiraExtensoesEPoeWebP($src_img);
                $src_img_webp = $this->verificaImagem($imgWebp);
            }    
            $html .= "<div>";
            $html .= '  <div class="imagem-destaque">';
            $html .= '      <a rel="nofollow" href="' . $this->url .'blog/'. $paginasBlog['urlSolicitada'] . '" title="' . $paginasBlog['title'] . '">';
            if ($webp) {
                $html .= '          <picture>';
                $html .= '              <source type="image/webp" srcset="'.$src_img_webp.'">';
                $html .= '              <img src="' . $src_img . '" alt="' . $paginasBlog['title'] . '" title="' . $paginasBlog['title'] . '">';
                $html .= '          </picture>';
            } else {
                $html .= '              <img src="' . $src_img . '" alt="' . $paginasBlog['title'] . '" title="' . $paginasBlog['title'] . '">';
            }
            $html .= '      </a>';
            $html .= '  </div>';
            $html .= '  <div class="artigo-blog">';
            $html .=        $paginasBlog['artigo'];
            $html .= '  </div>';
            $html .= '</div>';
        }
        
        return $html;
    }

    /**
    * Retorna a página de loop personalizada, área geral de posts e página específica
    * @param Array $paginasBlog - Recebe uma lista de palavras chave
    * @param Boolean $areaGeral - Indica se é área geral ou página específica
    * @param Boolean $webp - true ou false
    */
    public function paginaLoopArray($paginasPerson, $areaGeral, $webp = false, $paginaRef = 'blog') {
        $arrayNovo = [];
        $html = "";
        
        if ($areaGeral) {
            foreach ($paginasPerson as $key => $value) {
                $src_img = $this->verificaImagem($this->url . 'imagens/'.$paginaRef.'/'.'thumbs/' . $value['image']);
                if ($webp) {
                    $imgWebp = $this->retiraExtensoesEPoeWebP($src_img);
                    $src_img_webp = $this->verificaImagem($imgWebp);
                }

                $html .= "<div class=\"col-xs-6 col-sm-4 col-md-3 col-lg-3\">\n";
                $html .= "<div class=\"box-thumb\">\n";
                $html .= "<a rel=\"nofollow\" href=\"" . $this->url . $paginaRef . '/'. $key . "\" title=\"" . $value['title'] . "\">\n";
                if ($webp) {
                    $html .= "<picture>";
                    $html .=     "<source type=\"image/webp\" srcset=\"".$src_img_webp."\">";
                    $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $value['title'] . "\" title=\"" . $value['title'] . "\">\n";
                    $html .= "</picture>";
                } else {
                    $html .=     "<img src=\"" . $src_img . "\" alt=\"" . $value['title'] . "\" title=\"" . $value['title'] . "\">\n";
                }
                
                $html .= "</a>\n";
                $html .= "<h2>\n";
                $html .= "<a href=\"" . $this->url . $paginaRef .'/'. $key . "\" title=\"" . $value['title'] . "\">" . $value['title'] . "</a>\n";
                $html .= "</h2>\n";
                $html .= "</div>\n";
                $html .= "</div>\n";
            }
        } elseif (!$areaGeral) {
            $src_img = $this->verificaImagem($this->url . 'imagens/' . $paginaRef . '/' . $paginasPerson['image']);
            if ($webp) {
                $imgWebp = $this->retiraExtensoesEPoeWebP($src_img);
                $src_img_webp = $this->verificaImagem($imgWebp);
            }    
            $html .= "<div>";
            $html .= '  <div class="imagem-destaque">';
            $html .= '      <a rel="nofollow" href="' . $this->url . $paginaRef . '/'. $paginasPerson['urlSolicitada'] . '" title="' . $paginasPerson['title'] . '">';
            if ($webp) {
                $html .= '          <picture>';
                $html .= '              <source type="image/webp" srcset="'.$src_img_webp.'">';
                $html .= '              <img src="' . $src_img . '" alt="' . $paginasPerson['title'] . '" title="' . $paginasPerson['title'] . '">';
                $html .= '          </picture>';
            } else {
                $html .= '      <img src="' . $src_img . '" alt="' . $paginasPerson['title'] . '" title="' . $paginasPerson['title'] . '">';
            }
            $html .= '      </a>';
            $html .= '  </div>';
            $html .= '  <div class="artigo-blog">';
            $html .=        $paginasPerson['artigo'];
            $html .= '  </div>';
            $html .= '</div>';
        }
        
        return $html;
    }

    /**
    * Forma uma lista de links para personalizar o link
    * @param Array $array - Recebe uma lista de páginas
    * @param Array $set_options - Recebe os parametros opicionais
    * @param String $tipo - thumb ou lista
    * @param Boolean $webp - true ou false
    */
    public function subMenuPerson($arrayPaginas, $set_options = null, $tipo = 'thumb', $webp = false, $paginaRef)    {
        $html = "";
        $options = array(
            "id" => empty($set_options["id"]) ? "" : $set_options["id"],
            "class" => empty($set_options["class"]) ? "" : $set_options["class"],
            "random" => empty($set_options["random"]) ? false : true,
            "limit" => empty($set_options["limit"]) ? 9999 : $set_options["limit"]
        );


        $class = !empty($options["class"]) ? " class=\"" . $options["class"] . "\"" : "";
        if ($options["random"] == true) {
            shuffle($arrayPaginas);
        }
        $i = 1;
        if ($tipo == 'thumb') {
            foreach ($arrayPaginas as $url => $pagina) {
                if ($i <= $options["limit"]) {
                    $src_img = $this->verificaImagem($this->url . 'imagens/'.$paginaRef.'/'.'thumbs/' . $pagina['image']);
                    if ($webp) {
                        $imgWebp = str_replace('.png', '', $src_img);
                        $imgWebp = str_replace('.jpg', '', $imgWebp);
                        $src_img_webp = $this->verificaImagem($imgWebp . 'webp');
                    }

                    $html .= '<li' . (!empty($options["id"]) ? ' id="' . $options["id"] . '-' . $i . '" ' : "") . $class . '>';
                    $html .= '  <a href="' . $this->url . $paginaRef . '/'. $url . '" title="' . $pagina['title'] . '">';
                    $html .= '      <div class="display-table">';
                    if ($webp) {
                        $html .= '          <picture class="td">';
                        $html .= '              <source type="image/webp" srcset="' . $src_img_webp . '">';
                        $html .= '              <img src="' . $src_img . '" alt="' . $pagina['title'] . '" title="' . $pagina['title'] . '">';
                        $html .= '          </picture>';
                    } else {
                        $html .= '              <img src="' . $src_img . '" alt="' . $pagina['title'] . '" title="' . $pagina['title'] . '">';
                    }
                    $html .=            '<div class="td title-submenu-blog">' . $pagina['title'] . ' <span class="description-submenu-blog">' . $pagina['title'] . '</span></div>';
                    $html .= '      </div>';
                    $html .= '  </a>';
                    $html .= '</li>';
                    $i++;
                }
            }
        } else {
            foreach ($arrayPaginas as $url => $pagina) {
                if ($i <= $options["limit"]) {
                    $html .= '<li' . (!empty($options["id"]) ? ' id="' . $options["id"] . '-' . $i . '" ' : "") . $class . '>';
                    $html .= '  <a href="' . $this->url . $paginaRef.'/'. $url . '" title="' . $pagina['title'] . '">' . $pagina['title'] . '</a>';
                    $html .= '</li>';
                    $i++;
                }
            }
        }
        return $html;
    }
}