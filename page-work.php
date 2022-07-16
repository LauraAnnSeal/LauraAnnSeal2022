<?php
/*
Template Name: Work
 */

$heading = get_field('heading');
$tags = get_field('tags');

get_header();
?>
    
    <section id="work">
        <div class="container">
            <div class="row">
                <div class="col-12 text-white text-center">
                    <h1><?php echo $heading; ?></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12 pb-3 hide tag-container">
                </div>
            </div>

            <div class="row">
                 
                <!-- loop through all posts -->
                <?php
                    $args = array(
                        'post_type' => 'post'
                    );

                    $post_query = new WP_Query($args);

                    if($post_query->have_posts() ) {
                        while($post_query->have_posts() ) {
                            $post_query->the_post();
                            ?>
                            
                            <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                                <a href="<?php echo get_permalink(); ?>" class="project-image"><img src="<?php echo get_field('overview_image')['url'] ?>" class="w-100" alt="<?php echo get_field('overview_image')['alt'] ?>"></a>
                            </div>  



                            <?php
                            }
                        }
                ?>
                <!-- finshed looping through all posts -->

            </div>
        </div>
    </section>


<?php 
    get_footer(); 
?>
