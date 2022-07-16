<?php
/*
Template Name: Home Page
 */

//  landing section
 $svg = get_field('logo_svg');
 $website_name = get_field('website_name');

//  brand section
$opening_line = get_field('develop_your');
$words = get_field('words');
$short_bio = get_field('short_bio');
$about_link = get_field('link_to_about');

// services
$services_link = get_field('services_link');
$design_heading = get_field('heading_for_services_1');
$design_list = get_field('list_of_services_1');
$production_heading = get_field('heading_for_services_2');
$production_list = get_field('list_of_services_2');



get_header();
?>
    <!-- landing section with animation -->
    <section id="landing">

        <!-- hexes -->
        <div class="landing-bg text-center animated fadeIn delay-1s">
            <img id="hex1" src="wp-content/themes/lauraannseal/assets/images/hex-1.png">
            <img id="hex2" src="wp-content/themes/lauraannseal/assets/images/hex-2.png">
            <img id="hex3" src="wp-content/themes/lauraannseal/assets/images/hex-3.png">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center animated fadeIn">
                    <div class="logo">
                        <?php echo $svg; ?>
                        <h1 class="text-white"><?php echo $website_name; ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="brand" class="py-5">

        <div class="container py-1 py-xl-5">

            <div class="row d-flex justify-content-end d-lg-none">
                <div class="col-5 col-md-3 offset-md-3">
                    <img src="wp-content/themes/lauraannseal/assets/images/brand-mobile.png" class="img-fluid" alt="brand icons">
                </div>
            </div><!--row-->

            <div class="row">
                <!-- content -->
                <div class="col-sm-12 col-xl-9">

                    <!-- text -->
                    <div class="row">
                        <div class="col-sm-12 text-white">
                            <h2><?php echo $opening_line; ?></h2>
                            <h1 class="show-text">brand</h1>
                        </div>
                        <!-- changing words from wordpress -->
                        <script>
                            const textFields = [<?php echo $words ?>];
                        </script>
                        <div class="col-md-4">
                            <img src="wp-content/themes/lauraannseal/assets/images/hori-lines.png" class="hide-mobile w-100" alt="|||">
                        </div>
                        <div class="col-md-8 col-xl-6 text-white">
                            <?php echo $short_bio; ?>
                            <a href="<?php echo $about_link ?>" class="py-2 btn btn-primary">about me</a>
                        </div>
                    </div><!--row-->

                </div><!--col-->
                <div class="col-3 d-none d-lg-block">
                    <img src="wp-content/themes/lauraannseal/assets/images/brand-mobile.png" class="img-fluid" alt="brand icons">

                </div><!--col-->

            </div><!--row-->

        </div><!--container-->
    </section>


    <?php get_template_part('template-parts/content', 'projects'); ?>
   


<?php 
    get_template_part('template-parts/content', 'get-in-touch');
    get_footer(); 
?>
