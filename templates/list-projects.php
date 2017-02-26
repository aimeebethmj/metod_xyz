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
      $project_URL = get_page_link($project_page->ID);
      $project_name = $project_page->post_title;
      $project_slug = $project_page->post_name;
      $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id($project_page->ID), 'large' );

      echo '<li style="background-image:url(' . $featured_image[0] .');">
              <input class="trigger" type="checkbox" id="' . $project_slug . '">
              <label class="hamburger" for="' . $project_slug . '" onclick>+</label>
              <a href="' . $project_URL . '">
                <h2 class="centered">' . $project_name . '</h2>
              </a>
            </li>';
    }

  ?>

</ul>
