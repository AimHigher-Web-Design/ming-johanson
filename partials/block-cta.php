<?php
/**
 * CTA Block Template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>
    <div class="cta block">
        <p>
            <?php the_field('cta_text'); ?>
            <a href="<?php the_field('link'); ?>">
                <?php the_field('button'); ?>
            </a>
        </p>     
    </div>