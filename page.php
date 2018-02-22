<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="container">
        <div class="row row--justify-content-center home-page">
          <div class="col-centered home-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.svg" alt="Design & Develop" />
          </div>
          <div class="col-7 col-centered">
            <?php the_content(); ?>
          </div>

          <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
          <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
          <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
          <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
          <img class="red-icon" id="icon5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
        </div>
      </section>

    <?php endwhile; endif;

  get_footer();
