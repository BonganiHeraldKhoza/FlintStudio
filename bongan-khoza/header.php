<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/Menu Logo_Supreme Moulding.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            
                
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ,'container_class' => 'navbar-nav ml-auto d-flex justify-content-center') ); ?>
                    <!-- <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="contact-us">Contact Us</a></li> -->

                <ul class="d-flex justify-content-center" style="width:100%;list-style-type:none;">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/Search.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/Group.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri();?>/assets/images/User.svg" alt=""></a></li>
                  
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="container mt-4">
    <!-- This container is for the main content -->
