<div class="main--aside">
  <div class="projects">
  <?php
    $menu_query = new WP_Query( array(
        'post_type'     => 'page',
        'post_parent'   => 0,
        'no_found_rows' => true
    ) );
    if( have_posts() ) : 
      while( $menu_query->have_posts() ) : 
        $menu_query->the_post('F S, Y');
          $published = get_the_date();
          $page_id = $post->ID;
          $children = get_pages('child_of='.$page_id);
          if( count( $children ) != 0 ) :
            ?>
            <h3 class="projects__heading">
              <?php the_title(); ?>
            </h3>
          <?php
            $args = array(
              'child_of'     => $page_id,
              'title_li'     => '', 
            );
          ?><ul><?php
            wp_list_pages( $args );
          ?></ul><?php
          endif;
      endwhile; 
    endif; 
    wp_reset_postdata();
    ?>
  </div>
</div>