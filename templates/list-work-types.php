<ul class="gallery">

  <?php

    // get all the pages from 'work-types' category
    $work_pages = get_posts( array( 'post_type' => 'page', 'order' => 'ASC', 'orderby' => 'menu_order', 'category_name' => 'work-types', 'posts_per_page' => 200 ) );

    foreach($work_pages as $work_page)
    {
      // echo('<pre>');
      // print_r($work_page);
      // echo('</pre>');
      $work_URL = get_page_link($work_page->ID);
      $work_name = $work_page->post_title;
      $work_slug = $work_page->post_name;
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($work_page->ID), 'large' );

      // consoleLog($featured_image);

      echo '<li style="background-image:url(' . $featured_image[0] .');">
              <input class="trigger" type="checkbox" id="' . $work_slug . '">
              <label class="hamburger" for="' . $work_slug . '" onclick>+</label>
              <a href="' . $work_URL . '">
                <h2 class="centered">' . $work_name . '</h2>
              </a>
            </li>';
    }

  ?>

</ul>
