<?php
/* Template Name: Contact Page */
get_header(); ?>

<main class="contact-page">
    <h1>Reach out!</h1>

    <!-- Social Media Links -->
    <div class="contact-socials">
        <?php if( get_field('linkedin_url') ): ?>
            <a href="<?php the_field('linkedin_url'); ?>" target="_blank">
                <i class="fab fa-linkedin"></i> LinkedIn
            </a>
        <?php endif; ?>
        
        <?php if( get_field('instagram_url') ): ?>
            <a href="<?php the_field('instagram_url'); ?>" target="_blank">
                <i class="fab fa-instagram"></i> Instagram
            </a>
        <?php endif; ?>

        <?php if( get_field('facebook_url') ): ?>
            <a href="<?php the_field('facebook_url'); ?>" target="_blank">
                <i class="fab fa-facebook"></i> Facebook
            </a>
        <?php endif; ?>
    </div>
</main>


    <!-- Contact Form Section -->
    <section class="contact-form">
       <h1 class="contact_form"><?php the_field('contact_form'); ?></h1>
       <p class="feel_free"><?php the_field('feel_free'); ?></p>
        <form method="post" action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
            <input type="text" name="contact-name" placeholder="Your Name" required>
            <input type="email" name="contact-email" placeholder="Your Email" required>
            <textarea name="contact-message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" name="contact-submit">Send Message</button>
        </form>
        
        <?php
        if (isset($_POST['contact-submit'])) {
            $name = sanitize_text_field($_POST['contact-name']);
            $email = sanitize_email($_POST['contact-email']);
            $message = sanitize_textarea_field($_POST['contact-message']);

            $to = get_option('admin_email');
            $subject = "New Contact Form Submission";
            $headers = "From: $name <$email>";

            wp_mail($to, $subject, $message, $headers);
            echo "<p class='contact-success'>Message sent successfully!</p>";
        }
        ?>
    </section>


<?php get_footer(); ?>


