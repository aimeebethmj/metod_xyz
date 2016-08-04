<?php
  // get all the pages from the 'fieldnote' category
  $notes = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'fieldnote', 'posts_per_page' => 200 ) );

  foreach($notes as $note) // for each note within notes
  {     
    $URL = get_page_link($note->ID);
    $title = $note->post_title;
    // $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($fieldnote_page->ID), 'large' );
    $blurb = get_field('mini_blurb', $note->ID);

    if($note->ID != $post->ID)
    {
      echo '<div class="one-half column">
              <a href="'. $URL .'">
                <h2>'. $title . '</h2>
                <p>' . $blurb . '</p>
              </a>
            </div>';
    }
  }

?>