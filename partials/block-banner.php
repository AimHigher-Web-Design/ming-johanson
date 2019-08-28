<?php
/**
 * Banner Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

<div class="banner">
   <blockquote>
      <?php the_field('text'); ?>
   </blockquote>
   <?php 
      if(preg_match("/\.svg$/", get_field('image'))) {
         echo file_get_contents(get_field('image')); 
      }
      else {
         echo '<img src="' . get_field('image') . '" />';
      }
   ?>
</div>
