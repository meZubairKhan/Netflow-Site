<?php
    /*Template Name: Form Fall Back*/
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/formFallBack.css">

<?php get_header(); ?>

<main>
    <section class="error-submitting-form">
        <h2>Internal Error</h2>

        <img src="<?php echo get_template_directory_uri(); ?>/Images/404-page-not-found-73.png" alt="">

        <p class="paragraph">There has been an internal error submitting the form. Please retry in a few minutes. If the issue persist, get in touch through email or phone number and you'll be supported immediately!</p>

        <div class="button-section">
            <a href="contact-us"><button class="btnPrimary">Go Back</button></a>
            <a href="home"><button class="btnSecondary">Home Page</button></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
