/* ============================================================
   TEAM GRID — Un seul slider mobile
   Collecte tous les cd-team-grid-item de toutes les rows
   ============================================================ */

jQuery(document).on('ready', function() {

    function initTeamSlider() {

        if (jQuery(window).width() <= 768) {

            /* Déjà initialisé */
            if (jQuery('.cd-team-slider-unique').length) return;

            /* 1. Créer le conteneur unique après le titre h2 */
            jQuery('.cd-other-team .cd-h2').after(
                '<div class="cd-team-slider-unique"></div>'
            );

            /* 2. Collecter tous les membres (ignorer colonnes vides) */
            jQuery('.cd-team-grid .cd-team-grid-item').each(function() {
                if (jQuery(this).find('img.vce-single-image').length === 0) return;

                var content = jQuery(this).find('.vce-col-content').clone();
                jQuery('<div class="cd-team-slide"></div>')
                    .append(content)
                    .appendTo('.cd-team-slider-unique');
            });

            /* 3. Cacher les rows VC originales */
            jQuery('.cd-team-grid').hide();

            /* 4. Initialiser Slick */
            jQuery('.cd-team-slider-unique').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                prevArrow: '<button class="cd-slider-prev">←</button>',
                nextArrow: '<button class="cd-slider-next">→</button>'
            });

        } else {

            /* Desktop — détruire slider et réafficher rows */
            if (jQuery('.cd-team-slider-unique').hasClass('slick-initialized')) {
                jQuery('.cd-team-slider-unique').slick('unslick');
            }
            jQuery('.cd-team-slider-unique').remove();
            jQuery('.cd-team-grid').show();
        }
    }

    initTeamSlider();

    var resizeTimer;
    jQuery(window).on('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(initTeamSlider, 300);
    });
});
