<?php
//vars
$header = get_sub_field('header');
$position = get_sub_field('image_position');
$img_id = get_sub_field('image_one');
$img = wp_get_attachment_image_src($img_id, 'about');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$imgTwo_id = get_sub_field('image_two');
$imgTwo = wp_get_attachment_image_src($imgTwo_id, 'about');
$alt_textTwo = get_post_meta($imgTwo_id , '_wp_attachment_image_alt', true);
$content_header = get_sub_field('content_header');
$content = get_sub_field('content');


// Conditional classes/styles
 ?>

<section class="container about">
  <div class="row row--align-items-center row--align-items-stretch">
    <div class="sm-col-11 col-12 col-centered">
      <div class="row row--align-items-center">

        <?php if($header) : ?>
          <div class="col-12" data-aos="fade-right" data-aos-delay="200">
            <h2 class="text-center">
              <?php echo $header; ?>
            </h2>
          </div>
        <?php endif; ?>

        <div class="col-6 sm-text-center" data-aos="fade-right" data-aos-delay="200">
          <?php if($content_header) : ?>
            <h3><?php echo $content_header; ?></h3>
          <?php endif;

          echo $content; ?>
        </div>

        <div class="col-5 sm-col-8 sm-col-centered about--image-stack" data-aos="fade-left" data-aos-delay="200">
          <div class="image-stack_item image-stack_item--top">
            <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt_text; ?>" />
          </div>

          <div class="image-stack_item image-stack_item--bottom">
            <img src="<?php echo $imgTwo[0]; ?>" alt="<?php echo $alt_textTwo; ?>" />
          </div>
          </div>
        </div>

    </div>
  </div>
</section>
