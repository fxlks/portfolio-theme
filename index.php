<?php get_header(); ?>
<main class="main-content">
    <section class="default-page">
        <h1><?php the_title(); ?></h1>
        <div class="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
