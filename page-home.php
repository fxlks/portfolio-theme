<?php get_header(); ?>

<main class="homepage">
    <div class="left-content">
        <div class="hero-text">
            <h1 class="welcome"><?php the_field('welcome'); ?></h1>
            <a href="<?php echo site_url('/portfolio'); ?>" class="btn_view">View My Work</a>
        </div>

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
        <div class="homepage-content">
            <div class="left-content">
                <div class="hero-text">
                    <h1 class="contact"><?php the_field('contact'); ?></h1>
                    <a href="<?php echo site_url('/contact'); ?>" class="btn">Contact me</a>
                </div>
            </div>
        </div>
    </div>

    <div class="video-container">
        <iframe width="100%" height="315" 
            src="https://www.youtube.com/embed/oCQ7CX4cZ_M" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</main>

<?php get_footer(); ?>
