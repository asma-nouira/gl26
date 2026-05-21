<?php
/**
 * single.php — Page article individuel
 * Clinique Dentaire Geneviève Lafrance
 */

get_header(); ?>

<!-- Hero page article -->
<section class="cd-hero-page cd-hero-blog">
    <div class="vce-content-background-container">
        <div class="vce-asset-background-simple-item"
             style="background-image: url('/wp-content/uploads/2026/05/Articles-informatifs.jpg');">
        </div>
    </div>
    <div class="cd-hero-col" style="position:relative;z-index:2;">
        <h1 class="hero-title_page">Articles informatifs</h1>
    </div>
</section>

<!-- Contenu article -->
<article class="cd-single-article">
     
    <!-- En-tête article -->
  <!-- En-tête article -->
<header class="cd-article-header">

    <h2 class="cd-blog-main-title">Blogue</h2>

    <p class="cd-blog-intro">
        Dre Geneviève Lafrance , Dre Mylène Gagnon et leur équipe de la Clinique dentaire Geneviève Lafrance de Rivière-du-Loup vous proposent ces quelques articles informatifs. Vous pourrez ainsi en apprendre davantage sur les composantes de votre bouche, sur les maladies et conditions qui peuvent les toucher, de même que sur les moyens de les prévenir ou d’y remédier. C’est pour nous une autre manière, en plus des soins de qualité que nous offrons,de vous accompagner sur le chemin de la santé buccodentaire !
    </p>

    <h3 class="cd-article-title"><?php the_title(); ?></h3>

    <div class="cd-article-meta">
        Publié le <?php echo get_the_date('Y / m / d'); ?>
        par <?php the_author(); ?>
    </div>

</header>
    <!-- Image mise en avant -->
    <?php if (has_post_thumbnail()) : ?>
    <div class="cd-article-thumbnail">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <?php endif; ?>

    <!-- Contenu -->
    <div class="cd-article-content">
        <?php the_content(); ?>
    </div>

/* Lien retour */
<div class="cd-back-to-blog">
    <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="cd-back-link">
        ← Revenir aux articles
    </a>
</div>

/* Section urgence */
<section class="cd-urgence-cta">
    <div class="cd-urgence-cta-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/urgence-secretaire.jpg" 
             alt="Urgence dentaire">
    </div>
    <div class="cd-urgence-cta-text">
        <h2>Une urgence ?<br>N'attendez pas plus longtemps !</h2>
        <p>En cas d'urgence, contactez-nous et nous trouverons un moment, à l'intérieur de nos heures d'ouverture, pour évaluer votre cas et vous proposer des soins pour vous soulager et vous éviter bien des complications.</p>
        <a href="tel:+14188672260" class="cd-btn cd-btn-dark">418 867-2260</a>
    </div>
</section>
</article>

<?php get_footer(); ?>