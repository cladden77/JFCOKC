<?php

//vars
$header = get_sub_field('header');
$content = get_sub_field('content');
$link = get_sub_field('link');

?>
<section class="container cta">
  <div class="row">
    <div class="col-10 sm-col-11 col-centered">

      <?php if($header) : ?>
        <h2 class="cta__header">
          <?php echo $header; ?>
        </h2>
      <?php endif; ?>

      <?php if($content) : ?>
        <div class="cta__content">
          <?php echo $content; ?>
        </div>
      <?php endif; ?>

      <?php if($link) : ?>
        <a class="button button--primary" href="<?php echo $link['url']; ?>">
          <?php echo $link['title']; ?>
        </a>
      <?php endif; ?>

    </div>
  </div>
</section>
