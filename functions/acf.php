<?php
    // add_action('acf/init', 'my_acf_init');
    // function my_acf_init() {
        
    //     // check function exists
        if( function_exists('acf_register_block') ) {
            // Blogs Blocks
            acf_register_block(array(
                'name'				=> 'blogs-block',
                'title'				=> __('Blog Block'),
                'description'		=> __('Selecting and displaying blog posts'),
                'post_types'        => array('page'),
                'category'			=> 'layout',
                'icon'				=> 'admin-post',
                'mode'              => 'preview',
                'render_template'   => 'blocks/block-blogs.php',
            ));
            

    //         // Timetable
    //         acf_register_block(array(
    //             'name'				=> 'timetable',
    //             'title'				=> __('Timetable'),
    //             'description'		=> __('Timetable/Workshop Overview'),
    //             'category'			=> 'widgets',
    //             'icon'				=> 'schedule',
    //             'mode'              => 'preview',
    //             'post_types'        => array('page'),
    //             'render_template'   => 'partials/block-timetable.php',
    //         ));

    //         //Media Block 
    //         acf_register_block(array(
    //             'name'				=> 'media',
    //             'title'				=> __('Media Block'),
    //             'description'		=> __('Media Block with YouTube Clip'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'common',
    //             'icon'				=> 'format-video',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-media.php',
    //         ));

    //         //Media Block 
    //         acf_register_block(array(
    //             'name'				=> 'grid',
    //             'title'				=> __('Grid Container'),
    //             'description'		=> __('Grid Layout Container'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'layout',
    //             'icon'				=> 'screenoptions',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-grid.php',
    //         ));
    //     }
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