<?php
if( have_rows('fc_files') ):
  while ( have_rows('fc_files') ) : the_row();
  $file  = get_sub_field( 'fc_file' ); 
  echo do_shortcode( '[pdf-embedder url="' . $file['url'] . '"]' );
  endwhile;
endif;
?>