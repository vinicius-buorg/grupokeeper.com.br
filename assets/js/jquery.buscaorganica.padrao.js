/*! 
 * JsBuscaOrganica v1.0.0 
 * https://www.buscaorganica.com.br 
 * Denis Cedro | contato@buscaorganica.com.br 
 */
var buscaorganicaUrl = 'https://www.buscaorganica.com.br/includes/email/envio-form-remoto.php';

var jsBuscaorganica = {
    verificaParametros: function() {
        var url = window.location;
        if (url.href.indexOf("localhost/") >= 0) {
            var errors = [];
            var title = $("title").html();
            var desc = $("head meta[name=description]").attr("content");
            var canncl = $("head link[rel=canonical]").attr("href");
            var imgs = $("img");
            var mensagem_t = "TEMOS PROBLEMAS!";
            var html_erros = "";
            var s_errors = "width:100%;margin:0 auto;padding: 1px 0 1px 0px;background: #d9d9d9;position: fixed;bottom: 0;z-index: 2;";
            if (title.length > 70) { errors.push("Title acima dos 70 caracteres."); }
            if (desc.length === 0) { errors.push("Description vazia."); }
            if (url.href !== canncl) { errors.push("Cannonical incorreta."); }

            var achouImgJpgPng = false;
            var achouImgSemAlt = false;
            for (var i = imgs.length - 1; i >= 0; i--) {
                var alt = imgs[i].alt;
                
                if (alt.length === 0 && achouImgSemAlt == false) {
                    errors.push("Imagem sem alt.");
                    achouImgSemAlt = true
                }

                if (achouImgJpgPng == true && achouImgSemAlt == true) {
                    break;
                }
            }

            if (errors.length > 0) {

                html_erros += "<div class=\"erros-seo\" style=\"" + s_errors + "\">";
                html_erros += "<div class=\"erros-container\" style=\"display:none;padding: 1px 0 1px 10px\">";
                html_erros += "<h2 style=\"margin:15px 0;font-size:16px\">" + mensagem_t + "</h2>";
                $.each(errors, function(i, val) {
                    i++;
                    html_erros += "<p style=\"font-size:14px\">" + i + " - " + val + "</p>";
                });
                html_erros += "</div>";
                html_erros += "<div data-abre-erros-seo class=\"btn\" style=\"display: block;color: #2d2d2d;text-align: center;font-size: 12px;padding: 1px 0;cursor: pointer; font-weight: bold;border: solid 1px #777;\"> Temos <span style=\"font-weight: 900; border: solid 2px #ea6060; padding: 0 4px; border-radius: 3px;\">" + errors.length + "</span> " + (errors.length > 1 ? "problemas" : "problema") + " <i class='fa fa-warning'></i> </div>";
                html_erros += "</div>";

                $('.erros-seo').remove();
                $("body").prepend(html_erros);
                $('body').on('click', '[data-abre-erros-seo]', function() {
                    $('.erros-container').slideToggle(400);
                });
            }
        }
    },
    voltaTopo: function() {
        $(".mm-up-to-top").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
        });
    },
    menuMobile: function() {
        var basehref = $("head base").attr("href");
        var nomeempre = $("head meta[name=author]").attr("content");
        var logo = $('header .logo');
        var bslick = logo.html();
        $(".menu-list").slicknav({
            brand: bslick,
            label: "",
            prependTo: "header",
            removeClasses: true
        });        
        
    },
    menuMobileScroll: function() {
        $(document).scroll( function() {
            if ($(window).scrollTop() > $("main").offset().top) {
                $(".slicknav_menu").addClass('slicknav_scroll');
            } else {
                $(".slicknav_menu").removeClass('slicknav_scroll');
            }
        });
    },
    menuAnimate: function() {
        $('.slicknav_icon').click(function(){
            $(this).toggleClass('active');
        });
    },
    geralFormularios: function() {
        var a = function(a) {
            return 11 === a.replace(/\D/g, "").length ? "(00) 00000-0000" : "(00) 0000-00009";
        },
        b = {
            onKeyPress: function(b, c, d, e) {
                d.mask(a.apply({}, arguments), e);
            },
            placeholder: "(__) ____-____"
        };

        $(".mask-phone").mask(a, b), $.extend($.validator.messages, {
            required: "Este campo é obrigatório.",
            email: "Por favor, insira um endereço de email válido.",
            minlength: "Por favor, digite pelo menos {0} caracteres."
        });

        /* Formulario */
        $('body').on('click', '[data-ajax]', function(){
            var _this = $(this);
            var form = _this.parents('form');
            var dados = new FormData(form[0]);
            var id = Math.random().toString(36).substring(2, 10);

            /* Validação de campos obrigatórios*/
            var camposObrigatorios = _this.parents('form').find('.campo-obrigatorio');
            var camposOk = true;
            $.each(camposObrigatorios, function(key, value) {
                if ($(value).val().trim().length == 0) {
                    $(value).addClass('campo-invalido');
                    camposOk = false;
                }
            });
            if (camposOk == false) {
                return false;
            }
            

            dados.append('ajax', _this.attr('data-ajax'));
            
            /*Parametros para envio de e-mail*/
            if(_this.attr('data-emailsReceberEnvio') != undefined && _this.attr('data-emailsReceberEnvio').length > 0) {
                dados.append('emailsReceberEnvio', _this.attr('data-emailsReceberEnvio'));
            }
            if(_this.attr('data-siteCliente') != undefined && _this.attr('data-siteCliente').length > 0) {
                dados.append('siteCliente', _this.attr('data-siteCliente'));
            }
            if(_this.attr('data-emailsReceberCopia') != undefined && _this.attr('data-emailsReceberCopia').length > 0) {
                dados.append('emailsReceberCopia', _this.attr('data-emailsReceberCopia'));
            }
            if(_this.attr('data-emailsReceberCopiaOculta') != undefined && _this.attr('data-emailsReceberCopiaOculta').length > 0) {
                dados.append('emailsReceberCopiaOculta', _this.attr('data-emailsReceberCopiaOculta'));
            }
            
            _this.html("Aguarde...").attr("disabled", "disabled");
            $(".form-control").prop("disabled", true);

            $.ajax({
                type: 'POST',
                data: dados,
                url: buscaorganicaUrl,
                processData: false,
                contentType: false,
            }).done(function(xhrRet){
                try {
                    var xhr = JSON.parse(xhrRet);
                    var tipoMsg = 'erro';
                    if(xhr.success) {
                        tipoMsg = 'sucesso';
                    }
                    $('body').append('<div data-msg="'+id+'" class="msg-box"><div class="msg msg-'+tipoMsg+'">'+xhr.msg+'</div></div>');
                    setTimeout(function(){
                        $('[data-msg="'+id+'"]').remove();
                    }, 5000);
                    if(xhr.success) {
                        form[0].reset();
                        form.find('.campo-invalido').removeClass('campo-invalido');
                    }
                } catch(e) {
                }
            }).always(function(xhrRet){
                _this.html("Enviar").removeAttr("disabled");
                $(".form-control").prop("disabled", false);
            });
            return false;
        });

        $('body').on('click focus active', '.campo-invalido', function(){
            $(this).removeClass('campo-invalido');
        });

        $('body').on('click', '[data-msg]', function(){
            $(this).remove();
        });
        /* /Formulario */
    },
    activeSidebar: function() {
        var url = window.location;
        $('.sidebar-main ul li a[href="' + url + '"]').addClass("active-link-sidebar");
    },
    boxPesquisaDois: function() {
        $('body').on('click', '.pesquisa-box-2', function() {
            if ($('.pesquisa-box-2 input').val().length <= 0) {
                $('.pesquisa-box-2 input').animate({
                    width: '250px',
                    padding: '5px'
                }, 200);

                $('.pesquisa-box-2 button span').fadeOut(200);
                return false;
            }
        });
    },
    clickSlide: function() {
        $('body').on('click', '.action-scroll', function() {
            $(this).parent('.tabs-regioes').find('.scroll-div').slideToggle(400);
            $(this).toggleClass('tab-ativo');
        });
    },
    diminuiHeader: function(){
        $(document).on("scroll", function(){
            if($(document).scrollTop() > 80)
            {
                $("#header").addClass("muda-bg-menu"); 
                $(".logo-block").addClass("logo-revert");    
                $(".logo").addClass("logo-in");   
                $(".menu a").addClass("box-menu-js");    
                $(".menu").addClass("box-nav-js");    
            }
                else
                {
                    $("#header").removeClass("muda-bg-menu");
                $(".logo-block").removeClass("logo-revert");
                $(".logo").removeClass("logo-in");   
                $(".menu a").removeClass("box-menu-js");
                $(".menu").removeClass("box-nav-js");    
            }
        });
    },
    colorMenu: function() {
        var styles = {
            backgroundColor: "#148ece",
            borderRadius: "9px",
            color: "#fff"
        };
        $(".busca-bg").css(styles); 
    }
};
$(function() {
    jsBuscaorganica.verificaParametros();
    jsBuscaorganica.voltaTopo();
    jsBuscaorganica.menuMobile();
    jsBuscaorganica.menuMobileScroll();
    jsBuscaorganica.activeSidebar();
    jsBuscaorganica.boxPesquisaDois();
    jsBuscaorganica.clickSlide();
    jsBuscaorganica.diminuiHeader();
    jsBuscaorganica.colorMenu();
    jsBuscaorganica.menuAnimate();
});