<?php
/**
 * Single Hero template part
 *
 * Template part used on the single page
 *
 * @package Dana Malkin
 * @author Dana Malkin <danamalkin.com>
 * @since 0.0.1
 */

 // Variables

?>

<section class="container">
  <div class="row single-page__hero">
    <div class="col-7 md-col-10 offset-4">
      <div class="single-page__hero-image" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) center center/cover no-repeat"></div>
      <img class="red-icon" id="icon5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
    </div>

    <div class="col-10 sm-col-10 offset-1 col-centered single-page__hero-text">
      <h1>
        <?php the_title(); ?>
      </h1>
      <div class="row">
        <div class="col-10">
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
    </div>

    <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
    <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
    <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
    <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
  </div>
</section>
