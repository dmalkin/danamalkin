<?php
  /**
   * The about page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    // Variables
    $img = get_the_post_thumbnail('bio');

    ?>

      <section class="container animsition" data-animsition-in-class="fade-in-right-lg" data-animsition-in-duration="600" data-animsition-out-class="fade-out-left-lg" data-animsition-out-duration="400">
        <div class="row row--justify-content-center about-page">
          <div class="col-4">
            <?php the_post_thumbnail('bio'); ?>
            <img class="red-icon" id="icon5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
          </div>
          <div class="col-6 offset-1">
            <?php the_content(); ?>
          </div>

          <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
          <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
          <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
          <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />

        </div>
      </section>

    <?php endwhile; endif;

  get_footer();
