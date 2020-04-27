<?php
/**
 * The template for a blog post
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */


get_header(); ?>

<div class="container main blog">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="headings" style="--bannerImage:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>)">
        <p class="title"><?php the_title(); ?></p>
    </div>
    <div class="content">
        <?php  
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        ?>
    </div>
</div>

<?php get_footer();