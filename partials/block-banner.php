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
   <?php echo file_get_contents(get_field('image')); ?>
</div>

<?php