<?php
/*
Template Name: Get a quote Page
 */

$heading = get_field('heading');
$sub_heading = get_field('sub-heading');
$form = get_field('form_shortcode');


get_header();
?>
    
    <section id="quote">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 text-white text-center">
                    <h1><?php echo $heading; ?></h1>
                    <p><?php echo $sub_heading; ?></p>
                </div>
                <div class="col-12">
                    <?php echo do_shortcode($form); ?>
                </div>
            </div>
        </div>
    </section>


<?php 
    get_footer(); 
?>
