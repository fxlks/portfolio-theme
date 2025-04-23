<?php
get_header(); ?>

<main class="portfolio-page">
    <section class="portfolio-header">
        <h1>My Work</h1>
        <p>Explore some of my recent projects.</p>
    </section>

    <section class="portfolio-grid">
        <?php
        $portfolio_query = new WP_Query(array(
            'post_type' => 'portfolio',
            'posts_per_page' => -1, 
        ));

        if ($portfolio_query->have_posts()) :
            while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
                <div class="portfolio-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="portfolio-info">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                            <p class="author"><?php the_field('author'); ?></p>
                            <p class="location"><?php the_field('location'); ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <p>No portfolio items found.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
