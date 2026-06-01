<?php
/**
 * 404.php — Page non trouvée
 * Clinique Dentaire Geneviève Lafrance
 */

get_header(); ?>

<section class="cd-404">
    <div class="cd-404-content">
        <span class="cd-404-number">404</span>
        <h1 class="cd-404-title">Oups ! Page introuvable</h1>
        <p class="cd-404-text">La page que vous recherchez semble avoir été déplacée ou n'existe plus. Pas d'inquiétude, nous allons vous aider à retrouver votre chemin !</p>
        <div class="cd-404-actions">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="cd-btn cd-btn-brown">
                Retour à l'accueil
            </a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="cd-btn cd-btn-outline-brown">
                Nous contacter
            </a>
        </div>
    </div>
    <img class="cd-404-deco" 
         src="<?php echo get_template_directory_uri(); ?>/images/Tooth.svg" 
         alt="" aria-hidden="true">
</section>

<?php get_footer(); ?>