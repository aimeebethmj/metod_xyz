<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php
				// vars
				$heading = get_field('main_heading');
				$blogHeading = get_field('blog_heading');
			?>

		<!-- CAROUSEL -->
		  <?php if( have_rows('carousel') ): ?>

		    <div class="container slider">
				<?php
					$count = 0;
					while( have_rows('carousel') ): the_row();
					// vars
					$image             = get_sub_field('image');
					$headline          = get_sub_field('headline');
					$link              = get_sub_field('carousel_link');
					$id                = 'carousel-' . $count;
					// update count
					$count++;
				?>

					<div class="row">
						<input class="trigger" type="checkbox" id="<?php echo $id; ?>">
						<label class="hamburger" for="<?php echo $id; ?>" onclick>+</label>
						<a href="<?php echo $link; ?>"><img class="u-max-full-width" src="<?php echo $image['url']; ?>">
							<div class="info">
								<h2><?php echo $headline; ?></h2>
								<p><?php echo $blurb; ?></p>
							</div>
							<!-- <h1 class="low-centered"><?php echo $headline; ?></h1> -->
						</a>
					</div>

				<?php endwhile; ?>
				</div>

			<?php endif; ?>

		<!-- PRACTICE -->

			<div class="container work">
				<h2 class="main-heading"><?php echo $heading; ?></h2>
				<?php get_template_part('templates/list-work-types'); ?>
			</div>

		<!-- FIELD NOTES -->
			<div class="blog container">
				<h2 class="main-heading"><?php echo $blogHeading; ?></h2>
				<div class="multiple-slider boxed-content">
					<?php get_template_part('templates/list-fieldnotes'); ?>
				</div>
			</div>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part('templates/404'); ?>

	<?php endif; ?>

<?php get_footer(); ?>
