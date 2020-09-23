<?php
/**
 * Blog template File
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */

get_header();
 ?>

<div class="container main">
    <h1 class="page-title">Blog</h1>
    <div class="content blogs">
        <?php  
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                $category = get_the_category($post->ID);
             ?>

                <article class="<?php echo $category[0]->slug; ?>" style="--background: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>)">
					<div class="category"><?php echo $category[0]->name; ?> Blogs</div>
					<a href="/<?php echo $post->post_name; ?>"><h3><?php echo $post->post_title; ?></h3></a>
				</article>
                    
                <?php endwhile; 

                echo '</div>'; //End blogs container

                ?> 

                <ul class="pagination">
                    <li><?php next_posts_link( 'Older posts' ); ?></li>
                    <li><?php previous_posts_link( 'Newer posts' ); ?></li>
                </ul>
                
            <?php endif; 
        ?>
    
</div>

<?php
 get_footer();

