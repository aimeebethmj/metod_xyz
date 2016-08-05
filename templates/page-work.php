<?php
/*
Template Name: Work Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<!-- CAROUSEL -->
		  <?php if( have_rows('carousel') ): ?>

		    <div class="container slider">
				<?php while( have_rows('carousel') ): the_row(); 
					// vars
					$image             = get_sub_field('image');
			    $headline          = get_sub_field('headline');
					$link              = get_sub_field('carousel_link');
				?>

					<div class="row">
						<img class="u-max-full-width" src="<?php echo $image['url']; ?>">
						<a href="<?php echo $link; ?>">
							<h2 class="low-centered"><?php echo $headline; ?></h2>
						</a>
					</div>
					
				<?php endwhile; ?>
				</div>
			<?php endif; ?>

		<!-- PRACTICE -->
			<?php 
				// vars
				$heading = get_field('main_heading');
			?>

			<div class="container work">				
				<h2 class="main-heading"><?php echo $heading; ?></h2>
				<?php get_template_part('templates/list-projects'); ?>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>