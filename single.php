<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ):

    while( have_posts() ): the_post();

    get_template_part('parts/single/hero');
    get_template_part('parts/single/info');
    get_template_part('parts/single/image-capture');

    endwhile;

  endif;

  get_footer();
