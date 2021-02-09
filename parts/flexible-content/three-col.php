<?php

//vars
$header = get_sub_field('header');
$removePadding = ('remove_padding');
$btnToggle = get_sub_field('button_toggle');
$btn = get_sub_field('button');

// Conditional classes/styles

?>

<section class="container three-col">
  <div class="row">
    <div class="sm-col-11 col-12 columns col-centered">
      <?php if($header) : ?>
        <h2 class="text-center">
          <?php echo $header; ?>
        </h2>
      <?php endif; ?>
    </div>
  </div>

  <?php if( have_rows('columns') ) : ?>

    <div class="row">
      <div class="col-10 sm-col-11 col-centered">
        <div class="sm-block-grid-1 md-block-grid-2 block-grid-3 three-col__grid">
          <?php $load = 100; ?>
          <?php while( have_rows('columns') ) : the_row();
            // variables
            $img_id = get_sub_field('image');
            $img = wp_get_attachment_image_src($img_id, '');
            $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
            $img_link_selection = get_sub_field('image_link');
            $img_link = get_sub_field('link');
            $text = get_sub_field('text');

          ?>
            <div class="col stretch text-center" data-aos="fade-up" data-aos-duration="400" data-aos-delay="<?php echo $load; ?>">
              <?php if ($img_link_selection) : ?><a href="<?php echo esc_url($img_link['url']); ?>" role="link"><?php endif; ?>
                <div class="col-wrap">
                  <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>" />
                  <?php echo $text; ?>
                </div>
              <?php if ($img_link_selection) : ?></a><?php endif; ?>
            </div>
          <?php $load += 100; ?>
          <?php endwhile; ?>

        </div>

        <?php if( $btnToggle ) : ?>
          <div class="text-center" data-aos="fade-up" data-aos-duration="500">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--primary" role="link" title="<?php echo $btn['title']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>
        <?php endif; ?>

      </div>
    </div>

  <?php endif; ?>

</section>
