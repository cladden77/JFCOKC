<?php
  /**
   * The default blog / index template.
   */
  get_header();

  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="container">
      <div class="row">
        <div class="col-12 sm-col-11 col-centered">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </div>
    </section> <?php

  endwhile;
      the_posts_pagination( array('mid_size' => 2) );
  else :
    echo '<h2>Sorry, no posts have been found</h2>';
  endif;

  get_footer();
