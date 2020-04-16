<?php
/**
 * Timetable Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

<div class="timetable">
   <?php if (get_field('day')):
   	while (have_rows('day')):

   		the_row();
   		echo '<div>';
   		?>
            <h3><?php the_sub_field('heading'); ?></h3>
            <?php
            if (get_sub_field('items')):
            	echo '<ul>';
            	while (have_rows('items')):
            		the_row(); ?>

                        <li><?php the_sub_field('item'); ?></li>

                    <?php
            	endwhile;
            	echo '</ul>';
            endif;
            echo '</div>';

   	endwhile;
   endif; ?>
</div>
