<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php wp_title(); ?></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/Images/favicon.png" type="image/x-icon">

    <!-- Default Stylesheets --------------------------->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/index.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburger.css">

    <!-- Linking Icons ------------------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- linking Bootstrap --------------------------------------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Embeded Google Font "Open Sans" -------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"rel="stylesheet">

    <!-- Adding Font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
        <div class="nav-bar">
            <div class="navbar-1 side-padding">
                <div class="navbar-1-left">
                    <p>support@netflow.com.pk | 0327 4060296</p>
                </div>

                <div class="navbar-1-right">
                    <a class="header-social-icons" href="https://maps.app.goo.gl/2qmbLzLuRYc4yuVR6" target="_blank"><i
                            class="bi bi-google"></i></a>

                    <a class="header-social-icons" href="https://wa.me/+923274060296" target="_blank"><i
                            class="bi bi-whatsapp"></i></a>

                    <a class="header-social-icons" href="https://linkedin.com/company/netflow-tel" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="navbar-2 side-padding">
                <input type="checkbox" id="burger">
                <label for="burger" class="is-close"><i class="fa-solid fa-bars"></i></label>
                
                <div class="logo">
                    <a href="https://netflow.com.pk">
                        <img src="<?php echo get_template_directory_uri(); ?>/Images/Website Logo.png" alt="">
                    </a>
                </div>


                <div class="navbar-menu">
                    <label for="burger" class="is-open"><i class="fa-solid fa-xmark"></i></label>
                    <a href="home">Home</a>
                    <a href="about-us">About us</a>
                    <a href="services">Services</a>
                    <a href="our-clients">Our Clients</a>
                    <a href="contact-us">Contact us</a>
                </div>
            </div>
        </div>
    </header>

