<?php
/*
Template Name: Text Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>


		<!-- MAIN IMAGE -->

		<?php 
			$imageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

		?>

		    	<div class="container">
					<div class="row">
						<img class="u-max-full-width" src="<?php echo $imageURL; ?>">
					</div>
				</div>



		<!-- PROJECT DETAIL -->
			<?php 
				// vars
				$noteDate = get_field('note_date');
				$heading = get_field('second_heading');
			?>

			<div class="container project">				
				
				<div class="text-content">
					<h1 class="sub-heading"><?php echo get_the_title(); ?></h1>
					<h3 class="sub-sub-heading"><?php echo $noteDate;?></h3>
					<div class="twelve columns fieldnotes"><?php the_content();?></div>
				</div>
					
			</div>

		<!-- FIELD NOTES -->
			<div class="container blog">
				<h2 class="main-heading"><?php echo $heading; ?></h2>
				<div class="multiple-slider boxed-content">
					
					<?php
					// get all the pages from 'main' category
					$fieldnote_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'fieldnote', 'posts_per_page' => 200 ) );

					foreach($fieldnote_pages as $fieldnote_page) // for each school within schools
					{
						
						$fieldnote_URL = get_page_link($fieldnote_page->ID);
						$fieldnote_name = $fieldnote_page->post_title;
						$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($fieldnote_page->ID), 'large' );
						$slider_blurb = get_field('mini_blurb', 82);

						if($fieldnote_page->ID != $post->ID):
						
						echo '<div class="one-half column">
						<a href="'. $fieldnote_URL .'"><h3>'. $fieldnote_name . '</h3>
						<p>' . $slider_blurb . '</p></a>
						</div>';

						endif;
					}

					?>
					
				</div>
			</div>







		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>