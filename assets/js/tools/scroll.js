$(function() {
    var $topHeader = $('header .top-header');
    var $main = $('main');

    function totalHeaderHeight() {
        var h = 0;
        $('header').children(':visible').each(function() {
            h += $(this).outerHeight(true);
        });
        return h;
    }

    function handleScroll() {
        if ($(window).scrollTop() < 50) {
            $topHeader.show(250, function() {
                $main.css('margin-top', totalHeaderHeight() + 'px');
            });
        } else {
            $topHeader.hide(250, function() {
                $main.css('margin-top', totalHeaderHeight() + 'px');
            });
        }
    }

    $(window).on('scroll', handleScroll);
    $(window).on('resize', handleScroll);
    $main.css('margin-top', totalHeaderHeight() + 'px');
});
