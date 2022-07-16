<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lauraannseal
 */

?>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul>
                        <!-- loop to cyle through all social media -->
                        <?php $loop = new WP_Query( array('post_type' => 'media_links', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
							<?php while( $loop ->have_posts()) : $loop->the_post(); ?>
							
							<li><a href="<?php the_field('link'); ?>" target="_blank"><?php the_field('fontawesome_icon'); ?></a></li>

                        <?php endwhile; 
                            wp_reset_query();
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <p class="grey">&copy; 2020 by Laura Ann Seal</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- bootstrap core javascript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- custom scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/navbar.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/scripts/developYour.js"></script>
    
</body>
</html>

