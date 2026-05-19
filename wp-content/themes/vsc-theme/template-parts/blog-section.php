<?php
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
);
$posts = new WP_Query($args);
?>

<section class="cd-blog-section">
    <div class="cd-blog-header">
        <h2>Blogue</h2>
        <p>L'équipe de la Clinique dentaire Geneviève Lafrance de Rivière-du-Loup vous propose des articles variés. Ceux-ci vous permettront d'apprendre davantage sur les différentes manières de conserver une bonne santé buccodentaire.</p>
    </div>

    <div class="cd-blog-grid">
        <?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>
        <article class="cd-blog-card">
            <div class="cd-blog-card-img">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                <?php endif; ?>
            </div>
            <h3 class="cd-blog-card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <div class="cd-blog-card-excerpt">
                <?php the_excerpt(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="cd-blog-card-link">
                Lire plus
            </a>
        </article>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
</section>