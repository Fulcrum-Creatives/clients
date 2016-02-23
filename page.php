<?php 
get_header();
?>
<div id="content" class="main--body">
  <?php 
  get_template_part( 'template-parts/entry/link', 'signoff' );
  get_template_part( 'template-parts/entry/page', 'content' );
  ?>
  <section class="files">
    <?php 
    get_template_part( 'template-parts/entry/gallery', 'images' );
    get_template_part( 'template-parts/entry/gallery', 'pdf' );
    ?>
  </section>
  <?php get_template_part( 'template-parts/entry/form', 'change' ); ?>
</div>
<?php
get_template_part( 'template-parts/menu' );
get_footer();
?>