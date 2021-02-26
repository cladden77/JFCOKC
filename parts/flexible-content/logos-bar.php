<?php
//vars

$images = get_field('logos_bar');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$size = 'full'; // (thumbnail, medium, large, full or custom size)


// Conditional classes/styles

?>

<section class="container logos-bar">

  <?php if($images) : ?>
    <div class="row row--full-width">
      <div class="sm-col-12 col-12 col-no-pad text-center col-centered logos-bar__image">

       <?php foreach( $images as $image ) : ?>

         <img src="<?php echo wp_get_attachment_image( $image, $size ); ?>" alt="<?php echo $alt_text; ?>" />

       <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

</section>
