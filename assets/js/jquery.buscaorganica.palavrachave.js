/*! 
 * JsBuscaOrganica v1.0.0 
 * https://www.buscaorganica.com.br 
 * Denis Cedro | contato@buscaorganica.com.br 
 */

var buscaorganicaPcJs = {
    formularioOrcamento: function(modal_id, input_form_id, form_id) {
        $(modal_id).on("show.bs.modal", function(event) {
            var button = $(event.relatedTarget);
            var recipient = button.data("assunto");
            var modal = $(this);
            modal.find(".modal-body " + input_form_id).val(recipient);
        });
    }
}; 

$(function() {
    jsBuscaorganica.geralFormularios();
    buscaorganicaPcJs.formularioOrcamento("#modal-orcamento-borg", ".input-form-assunto", "#form-orcamento-borg");
    
    /*Veja também rotativo*/
    setTimeout(() => {
        /*Veja também rotativo*/
        if (window.screen.width < 768 ) {
            $(".container-veja-tambem").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplaySpeed: 2000
            }); 
        } else {
            $(".container-veja-tambem").slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplaySpeed: 2000
            }); 
        }
    }, 2000);

    $('.sidebar-main h3').click(function(){
        $(this).parents('.sidebar-main').find('ul').slideToggle(400);
        $(this).parents('.sidebar-main').toggleClass('sidebar-main-aberto');
    });
});