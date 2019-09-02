<?php
/**
 * Home Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

   <div class="block parallax">
      <img class="paral" src="https://images.unsplash.com/photo-1518946222227-364f22132616?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80" />
      <div>
         <?php echo file_get_contents(get_field('image')); ?>
         <blockquote><?php the_field('heading'); ?></blockquote>
         <p class="subtitle"><?php the_field('text'); ?></p>
      </div>
   </div>

<?php if (get_field('call_to_action')): ?>
      <div class="cta block">
         <p><?php the_field('cta_text'); ?> <a href="<?php the_field('link'); ?>"><?php the_field(
	'button'
); ?></a></p>
         
      </div>
<?php endif; ?>
