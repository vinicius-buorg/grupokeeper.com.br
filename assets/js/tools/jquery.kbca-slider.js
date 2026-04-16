$(document).ready(function() {
var sliderWrapper = $('.slider-wrapper');
var slides = $('.slider-slide');
var captions = $('.html-captions .html-caption');
var pagination = $('.slider-pagination');
var prevButton = $('.slider-button-prev');
var nextButton = $('.slider-button-next');
var slideWidth = slides.eq(0).width();
var currentIndex = 0;
var autoplayInterval;

function goToSlide(index) {
    sliderWrapper.css('transform', 'translateX(-' + (slideWidth * index) + 'px)');
    currentIndex = index;
    updatePagination();
}

function updatePagination() {
    pagination.find('.slider-pagination-bullet').removeClass('slider-pagination-bullet-active');
    pagination.find('.slider-pagination-bullet').eq(currentIndex).addClass('slider-pagination-bullet-active');
    captions.hide();
    $(captions[currentIndex]).show();
}

    captions.hide();

    $(captions[currentIndex]).show();
    $('.slider-slide img').attr('title','');

function goToPrevSlide() {
    if (currentIndex === 0) {
    goToSlide(slides.length - 1);
    } else {
    goToSlide(currentIndex - 1);
    }
}

function goToNextSlide() {
    if (currentIndex === slides.length - 1) {
    goToSlide(0);
    } else {
    goToSlide(currentIndex + 1);
    }
    captions.hide();
    $(captions[currentIndex]).show();
}

function startAutoplay() {
    autoplayInterval = setInterval(goToNextSlide, 3000);
}

function stopAutoplay() {
    clearInterval(autoplayInterval);
}

function initializePagination() {
    pagination.empty();
    for (var i = 0; i < slides.length; i++) {
    var bullet = $('<div></div>').addClass('slider-pagination-bullet');
    bullet.on('click', function() {
        var index = $(this).index();
        goToSlide(index);
        stopAutoplay();
    });
    pagination.append(bullet);
    }
    updatePagination();
}

prevButton.on('click', function() {
    goToPrevSlide();
    stopAutoplay();
});

nextButton.on('click', function() {
    goToNextSlide();
    stopAutoplay();
});

initializePagination();
startAutoplay();
});