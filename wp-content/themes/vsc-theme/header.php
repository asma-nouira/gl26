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
        <a href="<?php echo esc_url(home_url('/conseils-post-operatoires/')); ?>" class="btn-coin-enfant">
            Coin enfant
        </a>

        <!-- Facebook -->
        <a href="https://www.facebook.com/cliniquedentairegl" 
           class="btn-facebook" 
           target="_blank" 
           rel="noopener noreferrer"
           aria-label="Suivez-nous sur Facebook">
           <svg xmlns="http://www.w3.org/2000/svg" width="47.686" height="47.686" viewBox="0 0 47.686 47.686">
  <g id="Groupe_163" data-name="Groupe 163" transform="translate(-1791.314 -761.304)">
    <path id="Tracé_430" data-name="Tracé 430" d="M767.839,40.351h-5.664V26.446h-4.629v-5.4h4.608c.011-.228.025-.406.028-.584.026-1.5-.018-3.013.089-4.511a6.252,6.252,0,0,1,6.323-6.065c1.433-.042,2.871.071,4.306.12a3.377,3.377,0,0,1,.48.089v4.847c-.578,0-1.112-.012-1.644,0-.742.021-1.489.012-2.223.1a1.652,1.652,0,0,0-1.582,1.587c-.079,1.443-.021,2.893-.021,4.392H773.2l-.7,5.415h-4.664Z" transform="translate(1049.716 760.163)" fill="#625756"/>
    <circle id="Ellipse_2" data-name="Ellipse 2" cx="22.843" cy="22.843" r="22.843" transform="translate(1792.314 762.304)" fill="none" stroke="#625756" stroke-miterlimit="10" stroke-width="2"/>
  </g>
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