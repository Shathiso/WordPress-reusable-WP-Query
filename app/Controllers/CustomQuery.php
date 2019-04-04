<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class CustomQuery extends Controller
{
    
    public function custom_wp_query($post_type, $orderby, $posts_per_page) {
      
        $args = array(
            'post_type' => $post_type,
            'orderby'   => $orderby,
            'posts_per_page' => $posts_per_page,
        );

      $the_query = new WP_Query( $args );
      
      if( $the_query->have_posts()):
          
      while( $the_query->have_posts() ): $the_query->the_post();
           return get_the_content();
        endwhile;
      endif;
    }
}
