<?php

//vars
$ctaLink = get_field('cta_link', 'option');
$utilityButton = get_field('cta_button', 'option');

// Conditional classes/styles

?>

<div class="container utility-nav">
  <div class="row row--align-items-center">
    <div class="col-6 text-left">
      <h5><a href="<?php echo $ctaLink['url']; ?>"><?php echo $ctaLink['title']; ?></a></h5>
    </div>
    <div class="text-center">
      <a class="button button--primary" href="<?php echo $utilityButton['url']; ?>">
        <?php echo $utilityButton['title']; ?>
      </a>
    </div>
  </div>
</div>
