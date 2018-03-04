<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php the_title(); ?>" />
  <meta property="og:site_name" content="<?php bloginfo('name') ?>">

  <?php
  /* Theme color for browsers that support it
  <meta name="theme-color" content="#000">
  */
  ?>

  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php endif; ?>

  <?php if (is_search()) { ?>
   <meta name="robots" content="noindex, nofollow" />
	<?php } ?>

  <?php if ( is_singular() && comments_open() ) wp_enqueue_script( 'comment-reply' ); ?>

  <?php wp_head(); ?>

    <link rel="stylesheet" href="https://use.typekit.net/goo3vtx.css">
</head>

<body <?php body_class(); ?>>

  <?php // Header ?>
  <header class="container">
    <div class="row">
      <div class="col-4 md-col-4 sm-col-10">
        <h3 class="header-logo">
          <a href="<?php echo get_home_url(); ?>">Dana Malkin</a>
        </h3>
      </div>
      <div class="col-8 md-col-8 sm-hide">
        <?php // Primary Menu
          wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') );
        ?>
      </div>

      <?php // Small Navigation ?>
      <div class="sm-col-2 sm-only">
        <a href="#" id="nifty-nav-toggle"><span></span></a>
      </div>
    </div>
  </header>

  <div class="nifty-panel">
    <div class="container">
      <div class="row row--justify-content-end">
        <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'mobile-nav')); ?>
        <img data-tilt class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
        <img data-tilt class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
      </div>
    </div>
  </div>

  <?php // Main Content ?>
  <main>
