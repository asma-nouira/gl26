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
        <div class="vce-content-background-container" style="position:absolute;inset:0;background:rgba(36,36,36,0.45);z-index:1;"></div>
    </div>
    <div class="cd-hero-col" style="position:relative;z-index:2;">
        <h1 class="hero-title_page">Articles informatifs</h1>
    </div>
</section>

<!-- Contenu article -->
<article class="cd-single-article">

    <!-- En-tête article -->
    <header class="cd-article-header">
        <h2 class="cd-article-title"><?php the_title(); ?></h2>
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