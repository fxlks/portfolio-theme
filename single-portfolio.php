<?php get_header(); ?>

<main>
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <section class="project-details">
        <h2>About this project</h2>
          <h3 class="work"><?php the_field('work'); ?></h3>
          <p class="project_description"><?php the_field('project_description'); ?></p>
      </section>

      <div class="portfolio-content">
        <?php the_content(); ?>
      </div>

    <?php endwhile;
  else :
    echo '<p>No content found.</p>';
  endif;
  ?>

</main>

<?php get_footer(); ?>
