<?php
  /**
   * The default blog / index template.
   */
  get_header();

  if ( have_posts() ) : ?>

    <section class="container">
      <div class="row row--justify-content-center work-page">
        <div class="col-4">
          <ol>
          <?php while ( have_posts() ) : the_post(); ?>
            <li class="post-title" id="<?php echo get_the_ID(); ?>">
              <?php the_title(); ?>
            </li>
          <?php endwhile; ?>
          </ol>
        </div>
        <div class="col-6 offset-1">
          <?php while ( have_posts() ) : the_post();
            // Variables
            $id = get_the_ID();
          ?>
            <a class="image-wrap" id="<?php echo $id; ?>" href="<?php the_permalink(); ?>">
              <div class="featured-image" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>) center center/cover no-repeat"></div>
              <img class="red-icon" id="icon4" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" />
              <div class="white-lines"></div>
            </a>
          <?php endwhile; ?>
        </div>

        <img class="red-icon" id="icon1" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
        <img class="red-icon" id="icon2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />
        <img class="red-icon" id="icon3" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-sm.svg" />

      </div>
    </section>

  <?php endif;

  get_footer();
