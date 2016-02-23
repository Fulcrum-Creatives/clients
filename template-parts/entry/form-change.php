<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $approval = get_field('fc_sign_off_required');
    $client   = get_bloginfo( 'name' );
    $project  = get_the_title();
  endwhile;
endif; 
wp_reset_postdata();
if( !is_page( array('approval', 'request' ) ) ) :
  if( $approval ) : ?>
    <div class="change_request">
      <?php 
      $values = array( 'client' => $client, 'project' => $project );
      gravity_form( 'Change Request', $display_title = true, $field_values = $values, $ajax = true );
      ?>
    </div>
  <?php
  endif;
endif;