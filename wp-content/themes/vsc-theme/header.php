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
       wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
        ?>
    </nav>



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