<?php
//vars

$images = get_field('logos_bar');
$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
$img_id = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)


// Conditional classes/styles

?>

<section class="container logos-bar">

  <?php if($images) : ?>
    <div class="row">
      <div class="sm-col-12 col-12 text-center logos-bar__image">

         <?php foreach( $images as $image ): ?>

         <!-- <img src="<?php echo wp_get_attachment_image( $image, $size, "", ["class" => "no-lazyload", "loading" => "eager"] ); ?>" alt="<?php echo $image['alt']; ?>" /> -->
         <?php echo wp_get_attachment_image( $image, $size, "", ["class" => "no-lazyload", "loading" => "eager"] ); ?>


       <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>

</section>
