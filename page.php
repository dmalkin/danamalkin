<?php
  /**
   * The default page template.
   *
   * Used when a default template individual page is queried.
   */
  get_header();
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <section class="container animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="600" data-animsition-out-class="fade-out" data-animsition-out-duration="400">
        <div class="row row--justify-content-center home-page">
          <div class="col-centered home-bg" data-aos="zoom-in-right" data-aos-delay="600" data-aos-duration="1000" data-tilt data-tilt-reset="false">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg.svg" alt="Design & Develop" />
          </div>
          <div class="col-7 col-centered" data-aos="fade-left" data-aos-delay="100">
            <?php the_content(); ?>
          </div>

          <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
          <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
          <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
          <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
          <img class="red-icon" id="icon5" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
        </div>
      </section>

    <?php endwhile; endif;

  get_footer();
