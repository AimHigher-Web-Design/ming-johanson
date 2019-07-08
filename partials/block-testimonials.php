<?php
/**
 * Testimonial Carousel Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

<div class="facts block">
   <h2>This Year</h2>
   <?php 
      $repeater = get_field('testimonials');
      if($repeater):
          echo '<div>';
            while ( have_rows('testimonials') ) : the_row(); ?>
               <blockquote>
                  <?php the_sub_field('quote') ?>
                  <cite>
                     <?php the_sub_field('name');
                        if(get_sub_field('company') !== '') {
                           echo ' - <span>' . get_sub_field('company') . '</span>';
                        } 
                     ?>
                  </cite>
               </blockquote>
            <?php endwhile;
          echo '</div>';
      endif;
   ?>
</div>

<?php