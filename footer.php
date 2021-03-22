<?php // Close main

// variables
$bg_img_id = get_field('background_image');
$bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
$bg_img_position = get_field('background_position');
$header = get_field('header');
$subheader = get_field('subheader');
$link = get_field('cta_button');

// Conditional classes
$sectionClass = $hero_bottom_divider ? ' hero--bottom-divider' : '';
$rowClass = $background_box_for_text_content ? ' hero--fifty-fifty__row--background' : '';
?>
</main>

<footer>
  <section class="container footer">
    <div class="row row--align-items-center">
      <div class="col-4 text-left sm-col-12 sm-col-centered">
        <a href="<?php echo home_url(); ?>">
          <img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-primary--white.svg" alt="JF consulting" />
        </a>
        <?php // Footer Social Menu
          wp_nav_menu( array('theme_location' => 'social', 'container' => 'nav', 'container_class' => 'menu-social') );
        ?>
      </div>
      <div class="col-4 sm-col-12 sm-col-centered">
        <!-- Footer Content and menu here -->
        <h3>Contact Us</h3>
        <div class="text-center stretch">
          <a href="<?php echo $twitter; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" alt="JF Consulting Twitter" />
          </a>
          <a href="<?php echo $facebook; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook.svg" alt="JF Consulting Facebook" />
          </a>
          <a href="<?php echo $instagram; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Instagram-Icon-v2.svg" alt="JF Consulting Instagram" />
          </a>
          <a href="<?php echo $linkedin; ?>" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin.svg" alt="JF Consulting LinkedIn" />
          </a>
        </div>
      </div>
      <div class="col-4 sm-col-12 sm-col-centered">
        <!-- Google Map -->

      </div>
    </div>
  </section>
  <section class="container footer footer--copywright">
    <div class="row">
      <!-- Footer Copywright and Credit here -->
      <div class="col-12 sm-col-12 sm-text-center footer--copywright__wrap text-left">
        <h5 class="copyright">&copy; <?php echo date("Y"); ?> JF Consulting All Rights Reserved.</h5>
      </div>
    </div>
  </section>
</footer>

<?php get_template_part('parts/partials/remodal'); ?>

<?php wp_footer(); ?>
</body>
</html>
