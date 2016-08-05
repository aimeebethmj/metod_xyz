<?php
/*
Template Name: Fieldnote Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<!-- MAIN IMAGE -->

			<?php $imageURL = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

	    <div class="container">
				<div class="row">
					<img class="u-max-full-width" src="<?php echo $imageURL; ?>">
				</div>
			</div>

		<!-- DETAIL -->
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
				<h2 class="main-heading">Field notes</h2>
				<div class="multiple-slider boxed-content">
					<!-- include(locate_template('templates/fieldnotes.php')); -->
					<?php get_template_part('templates/list-fieldnotes'); ?>
				</div>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>