<?php

  // variables
  $bg_img_id = get_field('background_image');
  $bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
  $bg_img_position = get_field('background_position');
  $header = get_field('header');
  $subheader = get_field('subheader');
  $link = get_field('cta_button');

  // Conditional classes
  $sectionClass = $hero_bottom_divider ? ' hero--bottom-divider' : '';
  $rowClass = $background_box_for_text_content ? ' hero--fifty-fifty__row--background' : '';


?>


<section class="container hero" style="background: linear-gradient(180deg, rgba(33,115,189,0.70) 0%, rgba(17,58,95,1) 100%), url('<?php echo $bg_img[0]; ?>') center <?php echo $bg_img_position; ?>/cover no-repeat;">
  <div class="row row--full-width hero__row">
    <div class="col-6 sm-col-11 col-centered text-center sm-col-centered sm-text-center hero__row__content">
      <?php if($header) : ?>
        <h1 class="hero__header">
          <?php echo $header; ?>
        </h1>
      <?php endif; ?>
      <?php if($subheader) : ?>
        <h2 class="hero__subheader">
          <?php echo $subheader; ?>
        </h2>
      <?php endif; ?>
      <div  class="text-center">
        <a class="button button--primary hero-button" href="<?php echo $link['url']; ?>">
          <?php echo $link['title']; ?>
        </a>
      </div>
    </div>
  </div>
</section>
