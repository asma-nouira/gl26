jQuery(document).on('ready', function() {
    jQuery(".cd-gallery-slider > .vce-row-content").slick({
        centerMode: true,
        centerPadding: '100px',
        slidesToShow: 3,
        autoplay: false,
        autoplaySpeed: 20000,
        infinite:  true, 
        dots: false,
        arrows: true,
    prevArrow: '<button class="cd-slider-prev">←</button>',
    nextArrow:  '<button class="cd-slider-next">→</button>',
        responsive: [
            {
                breakpoint: 1366,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 766,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 400,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 1
                }
            }
        ]
    })
.on('setPosition', function (event, slick) {
    slick.$slides.css('height', slick.$slideTrack.height() + 'px');
    slick.$slideTrack.css('display', 'flex');
});

});

