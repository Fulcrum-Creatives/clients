<?php get_template_part( 'template-parts/head' ); ?>
<header id="header" class="header" role="banner">
  <div id="header__logo" class="header__logo">
    <?php get_template_part( 'template-parts/partials/logo' ); ?>
  </div>
  <div class="header__name">
    Fulcrum Creatives
  </div>
  <?php if( current_user_can('manage_options') ) : ?>
    <div class="header__request">
      <a href="<?php echo home_url(); ?>/request">
        <?php echo _e( 'Submit a Sign Off Request', 'fcwp' ); ?>
      </a>
    </div>
  <?php endif; ?>
</header>
<main id="main" class="main content__wrapper" role="main">