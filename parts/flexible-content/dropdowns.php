<?php

//vars
$header = get_sub_field('header');
$subline = get_sub_field('subline');

// Conditional classes/styles

?>

<section class="container dropdown">
  <div class="row">
    <div class="sm-col-12 col-12 columns col-centered">
      <?php if($header) : ?>
        <h2 class="text-center">
          <?php echo $header; ?>
        </h2>
      <?php endif; ?>
      <?php if($subline) : ?>
        <h6 class="text-center">
          <?php echo $subline; ?>
        </h6>
      <?php endif; ?>
    </div>

    <?php if( have_rows('columns') ): ?>

      <div class="row row--full-width hide-overflow">

        <?php while( have_rows('columns') ): the_row();
          // variables
          $title = get_sub_field('title');
          $content = get_sub_field('content');

        ?>

          <div class="col-12 sm-col-11 sm-col-centered text-center dropdown__box__bottom-text">
          <button class="accordion">
            <h2><?php echo $title; ?></h2>
          </button>

          <div class="col-12 sm-col-11 sm-col-centered text-center panel">
            <?php echo $content; ?>
          </div>
        </div>

        <?php endwhile; ?>

      </div>

    <?php endif; ?>

  </div>

</section>
