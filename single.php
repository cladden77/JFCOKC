<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ):

    while( have_posts() ): the_post(); ?>

      <section class="container">
        <div class="row">
          <div class="col-12 sm-col-11 col-centered">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
        </div>
      </section>

   <?php endwhile;

  endif;

  get_footer();
