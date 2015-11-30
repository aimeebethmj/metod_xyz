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
						<?php echo the_post_thumbnail( 'full' );?>
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
					<div class="twelve columns"><?php the_content();?></div>
				</div>
					
			</div>

		<!-- FIELD NOTES -->
			<div class="container blog">
				<h2 class="main-heading"><?php echo $heading; ?></h2>
				<div class="multiple-slider boxed-content">
					
						<div class="one-half column">
							<h3>123: Documentary Photography</h3>
							<p>Here is just a series of links and comments from films and photography resources you eill most likely enjoy if you are even remotely into documentary photography or photography at large</p>
						</div>
						<div class="one-half column">
							<h3>122: Nature gives more than it takes</h3>
							<p>Here is just a series of links and comments from films and photography resources you eill most likely enjoy if you are even remotely into documentary photography or photography at large</p>
						</div>

						<div class="one-half column">
							<h3>124: Documentary Photography</h3>
							<p>Here is just a series of links and comments from films and photography resources you eill most likely enjoy if you are even remotely into documentary photography or photography at large</p>
						</div>
						<div class="one-half column">
							<h3>122: Nature gives more than it takes</h3>
							<p>Here is just a series of links and comments from films and photography resources you eill most likely enjoy if you are even remotely into documentary photography or photography at large</p>
						</div>
					
				</div>
			</div>







		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>