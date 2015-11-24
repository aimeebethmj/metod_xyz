<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<!-- CAROUSEL -->
		    <?php if( have_rows('carousel') ): ?>

				<?php while( have_rows('carousel') ): the_row(); 
					// vars
					$image             = get_sub_field('image');
			    	$headline          = get_sub_field('headline');
					$link              = get_sub_field('carousel_link');
				?>

					<div class="container">
						<div class="row single-item">
							<img class="u-max-full-width" src="<?php echo $image['url']; ?>">
							<a href="<?php echo $link; ?>"><h2><?php echo $headline; ?></h2></a>
						</div>
					</div>

				<?php endwhile; ?>

			<?php endif; ?>






		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>




<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

	  <script type="text/javascript">
	    $(document).ready(function(){
	      $('.single-item').slick({
	        dots: true,
			infinite: true,
			speed: 300,
	      });
	    });
	  </script>

<?php get_footer(); ?>
