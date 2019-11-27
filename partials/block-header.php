<?php
/**
 * Image Header Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

<div class="headings">
   <p class="title"><?php echo get_field('title'); ?></p>
   <p class="subtitle"><?php echo get_field('subtitle'); ?></p>
   <?php if (get_field('sub_subtitle') !== '') {
   	echo '<p class="sub">' . get_field('sub_subtitle') . '</p>';
   } ?>
</div>
