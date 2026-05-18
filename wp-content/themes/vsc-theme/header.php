<?php
/**
 * Header — Clinique Dentaire Geneviève Lafrance
 * Fichier : header.php
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ========================================================
     HEADER PRINCIPAL
     ======================================================== -->
<header class="site-header" role="banner">

    <!-- Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo" aria-label="<?php bloginfo('name'); ?> — Accueil">
        <?php
        // Logo image si disponible, sinon texte
        if (has_custom_logo()) :
            the_custom_logo();
        else : ?>
            <span style="font-family: 'SuperBlue', serif; font-size: 1.6rem; color: #242424;">
                +<span style="color: #849994;">🦷</span>GL
            </span>
        <?php endif; ?>
    </a>

    <!-- Navigation principale -->
    <nav role="navigation" aria-label="Navigation principale">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class'     => 'main-nav',
            'container'      => false,
            'items_wrap'     => '<ul class="main-nav" id="main-nav">%3$s</ul>',
            'fallback_cb'    => function () {
                // Menu de fallback si aucun menu assigné
                echo '<ul class="main-nav">
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/equipe">Équipe</a></li>
                    <li><a href="/la-clinique">La clinique</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/blogue">Blogue</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>';
            },
        ]);
        ?>
    </nav>

    <!-- Actions : téléphone + Coin enfant + Facebook -->
    <div class="header-actions">

        <!-- Bouton téléphone -->
        <a href="tel:+14188672260" class="btn-phone" aria-label="Nous appeler">
            (418) 867-2260
        </a>

        <!-- Bouton Coin enfant -->
        <a href="<?php echo esc_url(home_url('/coin-enfant')); ?>" class="btn-coin-enfant">
            Coin enfant
        </a>

        <!-- Facebook -->
        <a href="https://www.facebook.com/cliniquedentairegl" 
           class="btn-facebook" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Suivez-nous sur Facebook">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
            </svg>
        </a>

    </div>

    <!-- Hamburger mobile -->
    <button class="hamburger" 
            aria-label="Ouvrir le menu" 
            aria-expanded="false" 
            aria-controls="main-nav">
        <span></span>
        <span></span>
        <span></span>
    </button>

</header><!-- .site-header -->