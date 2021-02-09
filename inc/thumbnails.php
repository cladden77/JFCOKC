<?php

/*-----------------------------------------------------------------------------
  Get featured image as url
-----------------------------------------------------------------------------*/
function featuredURL($size = 'full'){
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
  $url = $thumb['0'];
  echo $url;
}

/*-----------------------------------------------------------------------------
  Adds thumbnail support and additional thumbnail sizes
-----------------------------------------------------------------------------*/

if( function_exists('prelude_features') ){
  // Use add_image_size below to add additional thumbnail sizes
  add_image_size('col-image', '1600', '99999', 'true');
  add_image_size('hero', '3840', '99999', 'true');
  add_image_size('1000', '2000', '99999', 'true');
  add_image_size('500', '1000', '99999', 'true' );
  add_image_size('250', '500', '99999', 'true' );
}
