<ul class="gallery">
        
  <?php
    
    $work_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => $post->post_name, 'posts_per_page' => 200 ) );

    foreach($work_pages as $work_page) // for each work page within work pages
    {
      
      $work_URL = get_page_link($work_page->ID);
      $work_name = $work_page->post_title;
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($work_page->ID), 'large' );

      // consoleLog($featured_image);
      
      echo '<li style="background-image:url(' . $featured_image[0] .');">
              <a href="' . $work_URL . '">
                <h2 class="centered">' . $work_name . '</h2>
              </a>
            </li>';
    }
      
  ?>
  
</ul>