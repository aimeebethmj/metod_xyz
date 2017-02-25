<ul class="gallery">

  <?php

    $project_pages = get_posts(
      array(
        'post_type' => 'page',
        'order' => 'ASC',
        'orderby' => 'menu_order',
        'category_name' => $post->post_name,
        'posts_per_page' => 200 )
      );

    foreach($project_pages as $project_page)
    {

      $work_URL = get_page_link($project_page->ID);
      $work_name = $project_page->post_title;
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($project_page->ID), 'large' );

      // consoleLog($featured_image);

      echo '<li style="background-image:url(' . $featured_image[0] .');">
              <a href="' . $work_URL . '">
                <h2 class="centered">' . $work_name . '</h2>
              </a>
            </li>';
    }

  ?>

</ul>
