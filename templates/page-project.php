<?php
/*
Template Name: Project Page
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
						<h2 class="low-centered"><?php echo $headline; ?></h2>
					</div>
					
				<?php endwhile; ?>
				</div>
			<?php endif; ?>

		<!-- PROJECT DETAIL -->
			<?php 
				// vars
				$projectBlurb = get_field('project_blurb');
				$projectDate = get_field('project_date');
			?>

			<div class="container project">				
				<h1 class="sub-heading"><?php echo get_the_title(); ?></h1>
				
				<div class="text-content">
					<h3 class="sub-sub-heading"><?php echo $projectBlurb;?></h3>
					<h3 class="sub-sub-heading"><?php echo $projectDate;?></h3>
					<div class="twelve columns"><?php the_content();?></div>
				</div>
					
			</div>


		<!-- PRACTICE FEED -->
			<?php 
				// vars
				$heading = get_field('second_heading');
			?>

			<div class="container work">				
				<h2 class="main-heading"><?php echo $heading; ?></h2>
				<ul class="gallery">
				
					<?php
						// get all the pages from 'main' category
						$work_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'art', 'posts_per_page' => 200 ) );

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