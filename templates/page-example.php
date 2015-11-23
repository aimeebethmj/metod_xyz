<?php
/**
 * Template Name: CHANGE THIS
 */
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

        <!-- PUT YOUR PAGE CONTENT HERE -->
        
        
        
        
        
        
        
        

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>


