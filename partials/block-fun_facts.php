<?php
/**
 * Fun Facts Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

<div class="facts">
   <h2>This Year</h2>
   <?php 
      $repeater = get_field('facts');
      if($repeater):
          echo '<dl>';
            while ( have_rows('facts') ) : the_row(); ?>
               <dt><?php the_sub_field('label') ?></dt>    
               <dd><?php the_sub_field('number') ?></dd>
            <?php endwhile;
          echo '</dl>';
      endif;
   ?>
</div>
