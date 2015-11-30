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
						<a href="<?php echo $link; ?>"><h2 class="low-centered"><?php echo $headline; ?></h2></a>
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
				<ul class="gallery">
				
					<?php
						// get all the pages from 'main' category
						$work_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => $post->post_name, 'posts_per_page' => 200 ) );

						foreach($work_pages as $work_page) // for each work page within work pages
						{
							
							$work_URL = get_page_link($work_page->ID);
							$work_name = $work_page->post_title;
							$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($work_page->ID), 'large' );

							// consoleLog($featured_image);
							
							echo '<li style="background-image:url(' . $featured_image[0] .');"><a href="' . $work_URL . '"><h3 class="centered">' . $work_name . '</h3></a></li>';
						}	 
					?>
					
				</ul>		
			</div>










		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>