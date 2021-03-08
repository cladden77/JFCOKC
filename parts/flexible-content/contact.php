<?php

//vars
$header = get_field('contact_header');
$content = get_field('contact_form');

// Conditional classes/styles

?>

<section class="container contact-form">
  <div class="row">
    <div class="sm-col-11 col-10 columns col-centered">
      <?php if($header) : ?>
        <h2 class="text-center" data-aos="fade-up">
          <?php echo $header; ?>
        </h2>
      <?php endif; ?>

      <hr />
      
      <?php if($content) : ?>
        <div class="contact-form__content">
          <?php echo $content; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
