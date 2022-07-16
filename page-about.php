<?php
/*
Template Name: About Page
 */

// about me
$about_heading = get_field('about_heading');
$name = get_field('name');
$about_body = get_field('about_body');
$headshot = get_field('headshot');

// ethos
$ethos_heading = get_field('ethos_heading');
$ethos_body = get_field('ethos_body');


get_header();
?>
    
    
    <section id="about-me">
        <div class="container">
            <div class="row">
                <!-- dots desktop -->
                <div class="col-xl-1 d-flex align-items-center">
                    <img src="/wp-content/themes/lauraannseal/assets/images/dots-tablet.png" alt="..." class="w-100 hide-until-desktop">
                </div>
                <!-- info -->
                <div class="col-sm-12 col-md-6 col-lg-8 col-xl-6 text-white">
                    <h1><?php echo $about_heading; ?></h1>
                    <h2><?php echo $name; ?></h2>
                    <img class="profile-image hide-tablet-up" src="<?php echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>">
                    <img src="/wp-content/themes/lauraannseal/assets/images/dots-mobile.png" alt="..." class="w-100 hide-tablet-up dots">
                    <?php echo $about_body ?>
                    <img src="/wp-content/themes/lauraannseal/assets/images/dots-mobile.png" alt="..." class="w-100 hide-tablet-up dots">
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4 d-flex align-items-center">
                    <img src="<?php echo $headshot['url']; ?>" alt="<?php echo $headshot['alt']; ?>" class="w-100 hide-mobile">
                </div>
                <div class="col-xl-1 d-flex align-items-center">
                    <img src="/wp-content/themes/lauraannseal/assets/images/dots-tablet.png" alt="..." class="w-100 hide-until-desktop">
                </div>
            </div>
        </div>
    </section>

    <section id="ethos">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 text-white">
                    <h1><?php echo $ethos_heading; ?></h1>
                    <img src="/wp-content/themes/lauraannseal/assets/images/ethos.png" alt="OOO" class="w-100 ethos-img hide-from-desktop">
                    <?php echo $ethos_body; ?>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <img src="/wp-content/themes/lauraannseal/assets/images/ethos-desktop.png" alt="OOO" class="w-100 ethos-img hide-until-desktop">
                </div>
            </div>
        </div>
    </section>



<?php 
    get_template_part('template-parts/content', 'get-in-touch');
    get_footer(); 
?>
