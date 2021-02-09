<?php
  /**
   * The archive template.
   *
   * Used when a category, author, or date is queried.
   */
  get_header();

  if( have_posts() ):
    while( have_posts() ):
      the_post();

      // do your thing
      ?>

        <section class="container">
          <div class="row">
            <div class="col-12 sm-col-11 col-centered">
              <h1><?php the_title(); ?></h1>
              <?php the_content(); ?>
            </div>
          </div>
        </section> <?php

    endwhile;
  endif;

  get_footer();
