<?php
    add_action('acf/init', 'my_acf_init');
    function my_acf_init() {
        
        // check function exists
        if( function_exists('acf_register_block') ) {
            
            // Home Blocks
            acf_register_block(array(
                'name'				=> 'home-block',
                'title'				=> __('Home Block'),
                'description'		=> __('A custom home block.'),
                'post_types'        => array('page'),
                'category'			=> 'layout',
                'icon'				=> 'align-left',
                'mode'              => 'preview',
                'render_template'   => 'partials/block-home_block.php',
            ));

            // Banner
            acf_register_block(array(
                'name'				=> 'banner',
                'title'				=> __('Banner'),
                'description'		=> __('Banner block for top of page'),
                'post_types'        => array('page'),
                'category'			=> 'layout',
                'icon'				=> 'align-center',
                'mode'              => 'preview',
                'render_template'   => 'partials/block-banner.php',
            ));

            // Testimonials
            acf_register_block(array(
                'name'				=> 'testimonials',
                'title'				=> __('Testimonials'),
                'description'		=> __('Carousel of testimonials'),
                'category'			=> 'common',
                'icon'				=> 'format-quote',
                'mode'              => 'preview',
                'post_types'        => array('page'),
                'render_template'   => 'partials/block-testimonials.php',
            ));

            // Fun Facts
            acf_register_block(array(
                'name'				=> 'fun-facts',
                'title'				=> __('Fun Facts/Numbers'),
                'description'		=> __('List of numbers and fun facts'),
                'category'			=> 'widgets',
                'icon'				=> 'screenoptions',
                'mode'              => 'preview',
                'post_types'        => array('page'),
                'render_template'   => 'partials/block-fun_facts.php',
            ));
        }
    }

    if( function_exists('acf_add_local_field_group') ):

        //Add social icons to social menu
        acf_add_local_field_group(array(
            'key' => 'group_5c9ad2a1d1415',
            'title' => 'Menu Icons',
            'fields' => array(
                array(
                    'key' => 'field_5c9ad2cb3f1f4',
                    'label' => 'Social Icon',
                    'name' => 'icon',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'thumbnail',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'nav_menu_item',
                        'operator' => '==',
                        'value' => '3',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'acf_after_title',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

        endif;
?>