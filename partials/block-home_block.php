<?php
/**
 * Home Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

   <div class="block parallax <?php if (get_field('left')) {
   	echo 'left';
   } ?>">
      <div>
         <?php echo file_get_contents(get_field('graphic')); ?>
         <blockquote><?php the_field('heading'); ?></blockquote>
         <p class="subtitle"><?php the_field('text'); ?></p>
      </div>
      <img class="paral" src="<?php echo get_field('image'); ?>" />
   </div>

<?php if (get_field('call_to_action')): ?>
      <div class="cta block">
         <p><?php the_field('cta_text'); ?> <a href="<?php the_field('link'); ?>"><?php the_field(
	'button'
); ?></a></p>
         
      </div>
<?php endif; ?>
