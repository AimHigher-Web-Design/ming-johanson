<?php
/**
 * Gallery Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>
    <?php
    $images = get_field('gallery');
    if ($images): ?>
            <ul class="gallery">
                <?php foreach ($images as $image): ?>
                    <li>
                            <img src="<?php echo esc_url(
                            	$image['sizes']['thumbnail']
                            ); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif;


?>
