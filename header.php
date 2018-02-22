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
      <div class="col-4">
        <h5 class="header-logo">
          <a href="<?php echo get_home_url(); ?>">Dana Malkin</a>
        </h5>
      </div>
      <div class="col-8">
        <?php // Primary Menu
          wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_class' => 'primary-nav') );
        ?>
      </div>
    </div>

  </header>

  <?php // Main Content ?>
  <main>
