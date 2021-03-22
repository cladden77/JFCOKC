<?php

// check if the flexible content field has rows of data
if( have_rows('flexible_content') ): ?>

  <div class="flexible-content">

    <?php

     // loop through all the rows of flexible content
     while ( have_rows('flexible_content') ) : the_row();

       // CTA
       if( get_row_layout() == 'cta' ) :
         get_template_part('parts/flexible-content/cta');

       // Dropdowns
       elseif( get_row_layout() == 'dropdowns' ) :
         get_template_part('parts/flexible-content/dropdowns');

       // 1 Column (Full Width)
       elseif( get_row_layout() == 'one_column' ) :
         get_template_part('parts/flexible-content/one-col');

       // 50/50
       elseif( get_row_layout() == 'fifty_fifty' ) :
         get_template_part('parts/flexible-content/fifty-fifty');

       // 3 Column
       elseif( get_row_layout() == 'three_column' ) :
         get_template_part('parts/flexible-content/three-col');

       // Padding Block
       elseif( get_row_layout() == 'padding_block' ) :
         get_template_part('parts/flexible-content/padding-block');

       // Logos bar
       elseif( get_row_layout() == 'logos_bar' ) :
         get_template_part('parts/flexible-content/logos-bar');

       // Testimonials
       elseif( get_row_layout() == 'testimonials' ) :
         get_template_part('parts/flexible-content/testimonials');

       // About
       elseif( get_row_layout() == 'about' ) :
         get_template_part('parts/flexible-content/about');

       // Contact Form
       elseif( get_row_layout() == 'contact_form' ) :
         get_template_part('parts/flexible-content/contact-form');

       endif;

     endwhile; // close the loop of flexible content

    ?>

  </div>

<?php endif;
