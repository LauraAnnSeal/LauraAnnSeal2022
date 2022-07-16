<!-- loop to cycle through contact details -->
<?php $loop = new WP_Query( array('post_type' => 'get_in_touch', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
    <?php while( $loop ->have_posts()) : $loop->the_post(); ?>
    
        
        <section id="get-in-touch" class="d-flex justify-content-center align-items-center">
            <div class="container py-5">
                <div class="row">
                    <div class="col-xs-12  col-lg-8 offset-lg-2 text-white text-center">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <div class="col-xs-12  col-lg-8 offset-lg-2 text-white text-center">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>


    <?php  break; ?>

<?php endwhile; 
    wp_reset_query();
?>