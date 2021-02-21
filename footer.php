<?php // Close main ?>
</main>

<footer>
  <section class="container footer">
    <div class="row row--align-items-center">
      <div class="col-6 text-left sm-col-10 sm-col-centered">
        <a href="<?php echo home_url(); ?>">
          <img class="footer__logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logos/logo-primary--white.svg" alt="Jon Freemon consulting" />
        </a>
        <?php // Footer Social Menu
          wp_nav_menu( array('theme_location' => 'social', 'container' => 'nav', 'container_class' => 'menu-social') );
        ?>
      </div>
      <div class="col-6 sm-col-10 sm-col-centered">
        <!-- Footer Content and menu here -->
        <h3>Footer Menu</h3>
        <?php // Footer Menu
          wp_nav_menu( array('theme_location' => 'footer', 'container' => 'nav', 'container_class' => 'footer-nav') );
        ?>
      </div>
    </div>
  </section>
  <section class="container footer footer--copywright">
    <div class="row">
      <!-- Footer Copywright and Credit here -->
      <div class="col-12 sm-col-12 sm-text-center footer--copywright__wrap text-left">
        <h5 class="copyright">&copy; <?php echo date("Y"); ?> Business Name All Rights Reserved.</h5>
      </div>
    </div>
  </section>
</footer>

<?php get_template_part('parts/partials/remodal'); ?>

<?php wp_footer(); ?>
</body>
</html>
