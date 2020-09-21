<?php
/**
 * The header template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <link href="/wp-content/themes/ming-johanson/style.css?v=2019-09-08T07:37:49.353Z?v=2019-09-06T13:50." rel="stylesheet" />

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5672HC8');</script>
        <!-- End Google Tag Manager -->
        
        <title>Ming Johanson</title>
        <meta name="description" content="WordPress Template" />

        <meta property="og:title" content="WordPress Template" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="WordPress Template" />

        <meta name="twitter:title" content="WordPress Template" />
        <meta name="twitter:description" content="WordPress Template" />
        <meta name="twitter:image" content="WordPress Template" />

        <?php wp_head(); ?>
    </head>

<body class="<?php if (is_front_page()) {
	echo 'home image-header';
} elseif (get_field('image_header')) {
	echo 'image-header';
} ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5672HC8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header>
        <a href="/" class="site-logo">
            <?php
            $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0];			
			if(preg_match('/\.png$/', $logo)) {
				echo '<img src="' . $logo . '" />';
			}
			else {
				echo file_get_contents(preg_replace('/f_auto/i', 'f_svg', $logo));
			}
            
            ?>
        </a>



        <?php
        $hamburger =
        	get_site_url() . '/wp-content/themes/ming-johanson/resources/img/hamburger_close.svg';
        $menu_toggle =
        	'<button class="hamburger" onClick="mobileMenu()">' .
        	file_get_contents($hamburger) .
        	'<span>Open Menu</span></button>';

        wp_nav_menu(array(
        	'theme_location' => 'main_menu',
        	'container' => 'nav',
        	'container_class' => 'menu main',
        	'items_wrap' => $menu_toggle . '<ul id="%1$s" data-test="true" class="%2$s">%3$s</ul>',
        ));
        ?>
    </header>

    <main  class="<?php if (is_front_page()) {
    	echo 'home';
    } ?>">
