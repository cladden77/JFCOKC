<?php // Close main

// variables
$header = get_field('header');
$subheader = get_field('subheader');
$googleMap = get_field('google_map', 'option');
$bg_img_id = get_field('background_image');
$bg_img = wp_get_attachment_image_src($bg_img_id, 'full');
$bg_img_position = get_field('background_position');
$footerTagline = get_field('footer_tagline', 'option');
$phone = get_field('phone_number', 'option');
$email = get_field('email', 'option');
$address = get_field('physical_address', 'option');

// Conditional classes

?>
</main>

<footer>
  <section class="container footer">
    <div class="row row--align-items-start">
      <div class="col-4 text-left sm-col-12 sm-col-centered">
        <a href="<?php echo home_url(); ?>">
          <img class="footer__logo text-left" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-primary--white.svg" alt="JF consulting" />
        </a>
        <p class="text-left"><?php echo $footerTagline; ?></p>
        <div class="text-left">
        <?php // Footer Social Menu
          wp_nav_menu( array('theme_location' => 'social', 'container' => 'nav', 'container_class' => 'menu-social') );
        ?>
        </div>
      </div>

      <div class="col-4 sm-col-12 sm-col-centered text-left">
        <!-- Footer Content and menu here -->
        <h3>Contact Us</h3>
        <div class="text-center stretch footer--contact">
          <ul>
            <?php if($phone) : ?>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/phone.svg" alt="JF Consulting Phone number" />
            <?php echo $phone; ?></li>
            <?php endif; ?>

            <?php if($address) : ?>
            <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/envelope.svg" alt="JF Consulting Email" />
            <?php echo $email; ?></li>
            <?php endif; ?>

            <?php if($address) : ?>
            <li><p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/location.svg" alt="JF Consulting Mailing Address" />
            <?php echo $address; ?></p></li>
            <?php endif; ?>

          </ul>
        </div>
      </div>

      <div class="col-4 sm-col-12 sm-col-centered">
        <div class="google-map">
        <!-- Google Map -->
          <?php echo $googleMap; ?>
        </div>
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
