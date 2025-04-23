<?php get_header(); ?>

<main class="homepage">
    <!-- Left content section for everything except the video -->
    <div class="left-content">
        <div class="hero-text">
            <h1 class="welcome"><?php the_field('welcome'); ?></h1>
            <a href="<?php echo site_url('/portfolio'); ?>" class="btn_view">View My Work</a>
        </div>

        <!-- About Preview Section -->
        <section class="about-preview">
            <div class="about-container">
                <div class="about-text">
                    <h1 class="about_me_field"><?php the_field('about_me_field'); ?></h1>
                    <p class="about_me_field_text"><?php the_field('about_me_field_text'); ?></p>
                    <a href="<?php echo site_url('/about'); ?>" class="btn">Learn More</a>
                    <a href="http://martinkovakarolina.dk/wp-content/uploads/2025/04/resume-done-martinkova.pdf" download>
                        <button class="btn">Download CV</button>
                    </a>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <div class="homepage-content">
            <div class="left-content">
                <div class="hero-text">
                    <h1 class="contact"><?php the_field('contact'); ?></h1>
                    <a href="<?php echo site_url('/contact'); ?>" class="btn">Contact me</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Video container will be placed to the right -->
    <?php 
    $video_url = get_field('video'); 
    if ($video_url): ?>
        <div class="video-container">
            <video controls>
                <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
            </video>
        </div>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
