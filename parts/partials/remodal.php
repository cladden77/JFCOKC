<!-- Tell Me More -->

<?php
  // variables
  $tmm_title = get_field('tmm_title', 'option');
  $tmm_description = get_field('tmm_description', 'option');
  $tmm_content = get_field('tmm_content', 'option');

?>

<div class="remodal" data-remodal-id="contact">
  <div class="remodal__wrap">
    <div data-remodal-action="close" class="remodal-close">
      <i class="far fa-times-circle"></i>
      <div class="close-bg"></div>
    </div>
    <div class="remodal__header">
      <?php if($tmm_title) : ?>
        <h2>
          <?php echo $tmm_title; ?>
        </h2>
      <?php endif; ?>
    </div>
    <div class="remodal__body">
      <?php if($tmm_description) : ?>
        <p class="text-center">
          <?php echo $tmm_description; ?>
        </p>
      <?php endif; ?>
      <?php echo $tmm_content; ?>
    </div>
  </div>
</div>
