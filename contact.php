<?php
    /*Template Name: Contact us*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contact.css">

<section class="contact-us">
        <div class="content">
            <div class="content-top">
                <div class="text-section">

                    <h1 class="contact-heading">
                        Have a Question?
                    </h1>
                    <p class="paragraph2">We're here to help! Fill out the form or reach us via email or phone. Our Customer Care Team is available to help you get the best experience whether you have any issue or you are looking for help.</p>
                    <p class="paragraph2">Everyone gets a personalized response, so please allow 24 hours during business hours for a reply. Our business hours are Monday to Friday 9:30am to 6:00pm PST</p>

                    <a href="mailto:support@netflow.com.pk" target="_blank"><i class="bi bi-envelope-at-fill"></i> support@netflow.com.pk</a>
                    <a href="tel:+923274060296" target="_blank"><i class="bi bi-telephone-fill"></i> +92 327 4060296</a>
                    <!-- <a href="https://www.google.com/maps/place/NetFlow/@30.3629572,68.9966984,1465155m/data=!3m1!1e3!4m6!3m5!1s0x4feadf1cbdb23c91:0xc52e1a2ebe70be!8m2!3d30.3629572!4d68.9966984!16s%2Fg%2F11sck90p24?entry=ttu&g_ep=EgoyMDI0MDkyNS4wIKXMDSoASAFQAw%3D%3D" target="_blank"><i class="bi bi-geo-alt-fill"></i> Office no.1 2nd floor, 18KM Ferozpur Road Lahore, Al-Hafeez Plaza.</a> -->
                    </div>
                </div>
    
            <div class="form-section">

                <h1>Contact Us!</h1>

                <!-- Form Starts Here -->
                <form action="sendEmail()"; reset(); return false;>
                    <div class="name-field">
                        <div class="input">
                            <label for="firstname">First Name</label>
                            <input name="firstname" type="text" placeholder="First Name" required>
                        </div>
                        <div class="input">
                            <label for="lastname">Last Name</label>
                            <input name="lastname" type="text" placeholder="Last Name" required>
                        </div>
                    </div>
    
                    <div class="input">
                        <label for="email">Email</label>
                        <input name="email" type="text" placeholder="Enter your Email" required>
                    </div>
                    
                    <div class="input">
                        <label for="phone">Phone</label>
                        <input name="phone" type="tel" placeholder="Enter your Phone Number" required>
                    </div>
                    
                    <div class="input">
                        <label for="subject">Enter Subject Here</label>
                        <input name="subject" type="text" placeholder="Subject">
                    </div>
                    
                    <div class="input">
                        <label for="message">Type your message here</label>
                        <textarea name="message" cols="" rows="15" id="" placeholder="Message" required></textarea>
                    </div>

                    <div class="button-section">
                        <a href="form-fall-back"><input type="submit" class="btnPrimary"></a>
                    </div>

                </form>
            </div>
        </div>
</section>

<?php get_footer(); ?>
