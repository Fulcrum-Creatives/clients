<?php
if ( have_posts() ) : 
  while ( have_posts() ) : 
    the_post();
    $approval = get_field('fc_sign_off_required');
    $client   = get_bloginfo( 'name' );
    $project  = get_the_title();
    $form_url = add_query_arg( array(
      'client'  => $client,
      'project' => $project,
    ), home_url() . '/approval' );
    ?>
    <div class="approval">
      <div class="approval__title">
        <h3><?php the_title(); ?></h3>
      </div>
      <?php if( $approval ) : ?>
      <a href="<?php echo $form_url; ?>" class="approval__link">
        Your Approval is Required
      </a>
      <?php endif; ?>
    </div>
    <?php
  endwhile;
endif; 
wp_reset_postdata();
?>