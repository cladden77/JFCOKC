<?php

//vars
$testimonialsTitle = get_sub_field('testimonials_title');
$bg_img_id = get_sub_field('testimonial_bg');
$bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
$bg_img_position = get_sub_field('background_position');

// Conditional classes/styles

?>


<section class="container testimonials-section" style="background: linear-gradient(0deg, rgba(48,170,177,0) 0%, rgba(48,170,177,1) 100%), url('<?php echo $bg_img[0]; ?>') center <?php echo $bg_img_position; ?>/cover no-repeat;">

    <div class="row row--align-items-stretch row--justify-content-center">
      <div class="col-12 text-center sm-col-12">
        <?php if ($testimonialsTitle) : ?>
          <h2><?php echo $testimonialsTitle; ?></h2>
        <?php endif; ?>
      <hr></hr>
    </div>

      <?php if( have_rows('testimonials_columns') ) : ?>

      <div class="col-12 col-no-pad text-center testimonials__grid">

          <?php $load = 100; ?>
          <?php while( have_rows('testimonials_columns') ) : the_row();
            // variables
            $testimonialContent = get_sub_field('testimonial_content');
            $testimonialName = get_sub_field('testimonial_name');
            $testimonialLocation = get_sub_field('testimonial_location');

          ?>
            <div class="stretch text-center" data-aos="fade-up" data-aos-duration="400" data-aos-delay="<?php echo $load; ?>">
                <p><?php echo $testimonialContent; ?></p>
                <h3><?php echo $testimonialName; ?></h3>
                <p><?php echo $testimonialLocation; ?></p>
            </div>
          <?php $load += 100; ?>
          <?php endwhile; ?>
      </div>
    </div>

  <?php endif; ?>
</section>
