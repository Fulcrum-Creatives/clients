<?php
if( have_rows('fc_image_gallery') ):
  ?><div class="gallery__images"><?php
  while ( have_rows('fc_image_gallery') ) : the_row();
    $file  = get_sub_field( 'fc_image' );
    $title = get_sub_field( 'fc_image_title' );
    ?>
      <div class="files__container">
        <div class="files__item">
          <img src="<?php echo $file['url']; ?>" alt="<?php echo $title; ?>" />
        </div>
      </div>
    <?php
  endwhile;
  ?></div><?php
endif;
?>