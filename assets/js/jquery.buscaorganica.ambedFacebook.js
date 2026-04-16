$(function() {
    setTimeout(function() {
        var elementos = $('[data-facebook]');
        $.each(elementos, function(key, value) {
            var elementoVez = $(value).data('facebook');
            var etabs = $(value).data('tabs') == undefined ? 'timeline,messages' : $(value).data('tabs');
            var eheight = $(value).data('height') == undefined ? '290' : $(value).data('height');
            var esmalheader = $(value).data('smalheader') == undefined ? false : $(value).data('smalheader');
            var efacepile = $(value).data('facepile') == undefined ? true : $(value).data('facepile');

            $(value).html('<iframe style="height: ' + eheight + 'px" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F' + elementoVez + '&tabs=' + etabs + '&height=' + eheight + '&small_header=' + esmalheader + '&adapt_container_width=true&hide_cover=false&show_facepile=' + efacepile + '&appId" allow="encrypted-media"></iframe>');
        });
    }, 2000);
});