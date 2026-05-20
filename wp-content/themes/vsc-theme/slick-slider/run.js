jQuery(document).on('ready', function() {
    jQuery(".cd-gallery-slider > .vce-row-content").slick({
        centerMode: true,
        centerPadding: '460px',
        slidesToShow: 1,
        autoplay: false,
       infinite: true,
        dots: false,
        arrows: true,
    prevArrow: '<button class="cd-slider-prev">←</button>',
    nextArrow:  '<button class="cd-slider-next">→</button>',
        responsive: [
       {
                breakpoint: 1366,
                settings: {
                    centerPadding: '280px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    centerPadding: '120px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    centerPadding: '0',
                    slidesToShow: 1
                }
            }
        ]
    })
.on('setPosition', function (event, slick) {
    slick.$slides.css('height', slick.$slideTrack.height() + 'px');
});

});

