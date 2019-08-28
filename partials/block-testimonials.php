<?php
/**
 * Testimonial Carousel Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

<div class="testimonials" style="--testimonials: <?php echo count(get_field('testimonials')); ?>">
   <?php
   $repeater = get_field('testimonials');
   if ($repeater):
   	$first = true;

   	while (have_rows('testimonials')):

   		the_row();
   		if ($first): ?>
                  <input type="radio" name="testimonials" id="<?php the_sub_field(
                  	'company'
                  ); ?>" checked />
               <?php else: ?>
                  <input type="radio" name="testimonials" id="<?php the_sub_field('company'); ?>" />
               <?php endif;
   		?>
               <label for="<?php the_sub_field('company'); ?>"><?php the_sub_field(
	'company'
); ?></label>
               <blockquote>
                  <?php the_sub_field('quote'); ?>
                  <cite>
                     <?php
                     the_sub_field('name');
                     if (get_sub_field('company') !== '') {
                     	echo ' - <span>' . get_sub_field('company') . '</span>';
                     }
                     ?>
                  </cite>
               </blockquote>
            <?php $first = false;
   	endwhile;
   endif;
   ?>
</div>
