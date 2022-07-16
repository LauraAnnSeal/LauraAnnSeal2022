<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lauraannseal
 */

get_header();
?>
<a href="<?php echo get_field('link') ?>" target="_blank" class="view-website">View</a>
<div class="container-fluid py-5 project-container">
		<div class="row mx-auto">
			<div class="col-12">
				<h1><?php echo get_field('project_name') ?></h1>
				<p><?php echo get_field('client') ?></p>
				<p><?php echo get_field('year') ?></p>
			</div>
		</div>
	<div class="row mx-auto">
		<?php if( have_rows('project_images') ): ?>
			<?php while( have_rows('project_images') ): the_row(); 
				$image = get_sub_field('image');
				$mobile = get_sub_field('size')
				?>
				<div class="text-center <?php if($mobile){echo 'col-6 mobile-view'; } else {echo 'col-12';}?>">
					<div class="img-container">
						<img class='w-100 mx-auto' src="<?php echo $image ?>" alt="">
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>


<?php get_template_part('template-parts/content', 'projects'); ?>

<?php
get_footer();
