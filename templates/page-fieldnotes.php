<?php
/*
Template Name: Fieldnotes Page
*/
?>

<?php get_header(); ?>

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <div class="container fieldnotes"> 
        <div class="boxed-content">       
          <h2 class="main-heading"><?php echo get_the_title(); ?></h2> 
          <ul>
          <?php
            // get all the pages from the 'fieldnote' category
            $notes = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'fieldnote', 'posts_per_page' => 200 ) );

            foreach($notes as $note) // for each note within notes
            {     
              $URL = get_page_link($note->ID);
              $title = $note->post_title;
              $image = wp_get_attachment_image_src( get_post_thumbnail_id($note->ID), 'large' );
              $blurb = get_field('mini_blurb', $note->ID);

              // print_r($image);

              echo '<li class="one-half column">
                      <img src="' . $image[0] . '">
                      <a href="'. $URL .'">
                        <h3>'. $title . '</h3>
                      </a>
                      <p>' . $blurb . '</p>
                    </li>';
            }

          ?>  
          </ul>
        </div>
      </div>

    <?php endwhile; ?>

  <?php else : ?>

    <?php get_template_part('templates/404'); ?>

  <?php endif; ?>

<?php get_footer(); ?>
