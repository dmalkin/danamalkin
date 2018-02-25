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

<section class="container single-page__hero">
  <div class="row">
    <div class="col-10 sm-col-10 col-centered">
      <h1>
        <?php the_title(); ?>
      </h1>
      <div class="row">
        <div class="col-6">
          <p>
            <?php the_content(); ?>
          </p>
        </div>
      </div>
    </div>
    <div class="col-8 offset-3 single-page__hero-image" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) center center/cover no-repeat"></div>
    <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
  </div>
</section>
