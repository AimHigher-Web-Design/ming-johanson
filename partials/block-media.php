<?php
/**
 * Media Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */

preg_match(
	'%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
	get_field('video'),
	$match
);
$youtube_id = $match[1];
?>
    <div class="media">
        <iframe 
           
            src="https://www.youtube.com/embed/<?php echo $youtube_id; ?>" 
            frameborder="0" 
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
        ></iframe>
        
        <p><?php echo get_field('description'); ?></p>
    </div>