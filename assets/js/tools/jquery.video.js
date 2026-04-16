$('body').on('click', '.show', function(){
    let videoId = $('.iframe-div').data('video');
    $('.iframe-div').html('<iframe src="https://www.youtube.com/embed/'+videoId+'" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><button class="close"><i class="fa-solid fa-xmark"></i></button>');
    setTimeout(() => {
        $('.iframe-div').addClass('active');
        $('.iframe-div').fadeIn(400);
    }, 500);
});
$('body').on('click', '.close, .video', function(){
    let ia = $('.iframe-div.active').length;
    if (ia != 0) {
        $('.iframe-div').fadeOut(400);
        setTimeout(() => {
            $('.iframe-div').removeClass('active');
        }, 800);
    }
});