<?php
/*
Template Name: Services Page
 */




get_header();
?>
    
    
    <section id="services">
       <div class="container">
           <div class="row">
               <div class="col-12 text-center text-white">
                   <h1>services</h1>
               </div>
           
                <div class="col-12">
                    <div class="row services">

                    <!-- loop to cyle through all packages -->
                    <?php $loop = new WP_Query( array('post_type' => 'offering', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                        <?php while( $loop ->have_posts()) : $loop->the_post(); ?>
                        
                        <!-- service -->
                        <div class="col-sm-12 col-md-6 col-lg-4 text-white p-2">
                            <div class="service-box-inner"></div>
                            <div class="p-3">
                                <div class="text-center service-icon">
                                    <?php the_field('fontawesome_icon') ?>
                            </div>
                                <h4><?php the_title() ?></h4>
                                <?php the_field('description') ?>
                            </div>
                        </div>
                        <!-- service end -->

                    
                    
                    <?php endwhile; 
                        wp_reset_query();
                    ?>
    </div>
</div>
           </div>
       </div>
   </section>



<?php 
    get_template_part('template-parts/content', 'get-in-touch');
    get_footer(); 
?>
