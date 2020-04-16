<?php
/**
 * Media Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */

$items = get_field('items');
if ($items):
	echo '<ul class="media">';

	while (have_rows('items')):

		the_row();
		preg_match(
			'%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
			get_sub_field('video'),
			$match
		);
		$youtube_id = $match[1];
		?>

            <li>
                <iframe 
                        
                        src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen
                ></iframe>
                <p><?php echo the_sub_field('description'); ?></p>
            </li>
    <?php
	endwhile;
	echo '</ul>';
endif;
?>
