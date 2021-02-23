<?php
//vars

$images = get_field('logos-bar');
$size = 'full'; // (thumbnail, medium, large, full or custom size)


// Conditional classes/styles

?>

<section class="container logos-bar">

  <?php if($images): ?>
    <div class="row row--full-width row--align-items-stretch">
      <div class="sm-col-12 col-12 col-no-pad col-centered image-slider__slide">

       <?php foreach( $images as $image ): ?>

         <img src="<?php echo wp_get_attachment_image( $image, $size ); ?>" alt="<?php echo $image['alt']; ?>" />

       <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

</section>
