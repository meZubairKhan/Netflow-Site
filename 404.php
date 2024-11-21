<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/404.css">

<section class="error-404">
    <div class="content-404">
        <h2>Page Not Found!</h2>    
        
        <img src="<?php echo get_template_directory_uri(); ?>\Images\404-page-not-found-1-15.png" class="404_img" alt="">
        
        <p class="paragraph">Sorry, the page you are looking for does not exist.</p>
    </div>

    <div class="button-section">
            <a href="contact-us"><button class="btnPrimary">Contact</button></a>
            <a href="home"><button class="btnSecondary">Home</button></a>
        </div>
</section>

<?php get_footer(); ?>
