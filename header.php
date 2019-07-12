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
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />

        <link href="/wp-content/themes/ming-johanson/style.css" rel="stylesheet" />
        
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

<body id="root" class="<?php if(is_front_page()) {echo 'home';}; ?>">
    <header>
        <a href="/" class="site-logo">
            <?php
                $logo = wp_get_attachment_image_src(get_theme_mod( 'custom_logo' ), 'full')[0];
                echo file_get_contents($logo);
            ?>
        </a>

        <?php wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'container' => 'nav',
            'container_class' => 'menu main'
            ));
        ?>
    </header>

    <main>
