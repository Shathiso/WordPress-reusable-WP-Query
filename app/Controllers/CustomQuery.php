<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class CustomQuery extends Controller
{
  public $post_type;
  public $orderby;
  public $posts_per_page;
  public $title_class_name;
  public $image_class_name;
  public $content_class_name;

 


  public function custom_wp_query($post_type, $order, $posts_per_page, $title_class_name, $image_class_name, $content_class_name ) {
      
        $args = array(
            'post_type' => $post_type,
            'order'   => $order,
            'posts_per_page' => $posts_per_page,
        );

      $the_query = new WP_Query( $args );
      
      if( $the_query->have_posts()):  
        while( $the_query->have_posts() ): $the_query->the_post();
           echo '<h1 class="' . $title_class_name . '"/> ' . get_the_title(). '</h1>' . ' <div class="' . $image_class_name . '"/> ' . the_post_thumbnail() . '</div>' . '<div class="' . $content_class_name . '/">' . get_the_content() . '</div>';
        endwhile;
      endif;

      wp_reset_postdata();
  }
}
