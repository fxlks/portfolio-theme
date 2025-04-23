<?php
/* Template Name: About Page */
get_header(); ?>

<main class="about-page">
    <section class="about-header">
        <section class="about">
            <h1 class="about_me"><?php the_field('about_me'); ?></h1>
            <p class="about_me_text"><?php the_field('about_me_text'); ?></p>
            <?php
$image_url = get_field('profile_img');
if ($image_url) {
    echo '<img src="' . esc_url($image_url) . '" alt="">';
}
?>
        </section>

        <section class="experience-container">
            <h1 class="experience"><?php the_field('experience'); ?></h1>
            <p class="experience_text"><?php the_field('experience_text'); ?></p>
            <div class="about-section">
                <h1 class="education"><?php the_field('education'); ?></h1>
                <p class="education_text"><?php the_field('education_text'); ?></p>
                <p class="education_text_2"><?php the_field('education_text_2'); ?></p>
            </div>
        </section>

        <section class="about-details">
            <div class="about-section">
                <h1 class="soft_skills"><?php the_field('soft_skills'); ?></h1>
                <p class="soft_skills_text"><?php the_field('soft_skills_text'); ?></p>
                <h1 class="hard_skills"><?php the_field('hard_skills'); ?></h1>
                <p class="skill_1"><?php the_field('skill_1'); ?></p>
                <p class="skill_2"><?php the_field('skill_2'); ?></p>
                <p class="skill_3"><?php the_field('skill_3'); ?></p>
                <p class="skill_4"><?php the_field('skill_4'); ?></p>
                <p class="skill_5"><?php the_field('skill_5'); ?></p>
                <h1 class="languages"><?php the_field('languages'); ?></h1>
                <p class="language_1"><?php the_field('language_1'); ?></p>
                <p class="language_2"><?php the_field('language_2'); ?></p>
                <p class="language_3"><?php the_field('language_3'); ?></p>
                <p class="language_4"><?php the_field('language_4'); ?></p>
                <p class="language_5"><?php the_field('language_5'); ?></p>
            </div>

            <div class="about-section">
            <h1 class="about_contact"><?php the_field('about_contact'); ?></h1>
            <p class="about_contact_text"><?php the_field('about_contact_text'); ?></p>
                <a href="<?php echo site_url('/contact'); ?>" class="btn">Get in Touch</a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>
