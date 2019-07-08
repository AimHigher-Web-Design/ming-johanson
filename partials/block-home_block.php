<?php
/**
 * Home Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

   <div class="block">
      <?php echo file_get_contents(get_field('image')); ?>
      <blockquote><?php the_field('heading'); ?></blockquote>
      <p><?php the_field('text'); ?></p>
   </div>

<?php

   if(get_field('call_to_action')) : ?>
      <div class="cta block">
         <p><?php the_field('cta'); ?></p>
         <a href="<?php the_field('link'); ?>"><?php the_field('button'); ?></a>
      </div>
<?php
   endif; ?>