<?php

function blog_block() {
	ob_start();

	$postsBusiness = get_posts(array(
		'numberposts'	=> '1',
		'category'   	=> '7',
		'orderby'		=> 'date',
		'order'			=> 'DESC',
		'post_type'		=> 'post'
	));

	$postsSocial = get_posts(array(
		'numberposts'	=> '1',
		'category'   	=> '4',
		'orderby'		=> 'date',
		'order'			=> 'DESC',
		'post_type'		=> 'post'
	));

	$postsMental = get_posts(array(
		'numberposts'	=> '1',
		'category'   	=> '5',
		'orderby'		=> 'date',
		'order'			=> 'DESC',
		'post_type'		=> 'post'
	));

	?>

		<div class="blogs">
			<?php foreach($postsBusiness as $post) : ?>
				<article class="business" style="--background: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>)">
					<div class="category">Business Strategy Blogs</div>
					<a href="/<?php echo $post->post_name; ?>"><h3><?php echo $post->post_title; ?></h3></a>
				</article>
			<?php endforeach; ?>

			<?php foreach($postsSocial as $post) : ?>
				<article class="social" style="--background: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>)">
					<div class="category">Social & Digital Blogs</div>
					<a href="/<?php echo $post->post_name; ?>"><h3><?php echo $post->post_title; ?></h3></a>
				</article>
			<?php endforeach; ?>

			<?php foreach($postsMental as $post) : ?>
				<article class="mental-health" style="--background: url(<?php echo get_the_post_thumbnail_url( $post->ID, 'medium' ); ?>)">
					<div class="category">Mental Health Blogs</div>
					<a href="/<?php echo $post->post_name; ?>"><h3><?php echo $post->post_title; ?></h3></a>
				</article>
			<?php endforeach; ?>
		</div>
	<?php

	$content = ob_get_clean();

	return $content;
  }

  add_shortcode('blog_posts', 'blog_block');

?>