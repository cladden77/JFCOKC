<?php

//vars
$utilityLink = get_field('cta_button');

// Conditional classes/styles

?>

<div class="container utility-nav">
  <div class="row row--align-items-center">
    <div class="col-6 text-left">
      <h5><a href="#contact">Get a free quote today!</a></h5>
    </div>
    <div class="text-center">
      <a class="button button--primary hero-button" href="<?php echo $link['url']; ?>">
        <?php echo $utilityLink['title']; ?>
      </a>
    </div>
  </div>
</div>
