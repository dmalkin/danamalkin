<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ): while( have_posts() ): the_post(); ?>

    <section class="single-page">

      <?php

        get_template_part('parts/single/hero');
        get_template_part('parts/single/info');
        get_template_part('parts/single/image-capture');

      ?>

    </section>

  <?php endwhile; endif;

  get_footer();
