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
        Dre Geneviève Lafrance, Dre Mylène Gagnon et leur équipe de la Clinique dentaire 
        Geneviève Lafrance de Rivière-du-Loup vous proposent ces quelques articles informatifs. 
        Vous pourrez apprendre davantage sur les conséquences de vos brosses sur les maladies 
        et conditions qui peuvent les toucher, de même que sur les moyens de les prévenir ou 
        d'y remédier. C'est pour nous une autre manière, en plus des soins de qualité que nous 
        offrons, de vous accompagner sur le chemin de la santé buccodentaire.
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

    <!-- Navigation entre articles -->
    <nav class="cd-article-nav">
        <?php
        $prev = get_previous_post();
        $next = get_next_post();

        if ($prev) : ?>
            <a href="<?php echo get_permalink($prev); ?>" class="cd-article-nav-btn cd-article-nav-prev">
                ← <?php echo esc_html(get_the_title($prev)); ?>
            </a>
        <?php endif;

        if ($next) : ?>
            <a href="<?php echo get_permalink($next); ?>" class="cd-article-nav-btn cd-article-nav-next">
                <?php echo esc_html(get_the_title($next)); ?> →
            </a>
        <?php endif; ?>
    </nav>

</article>

<?php get_footer(); ?>