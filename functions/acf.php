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
            
    //         // Home Blocks
    //         acf_register_block(array(
    //             'name'				=> 'home-block',
    //             'title'				=> __('Home Block'),
    //             'description'		=> __('A custom home block.'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'layout',
    //             'icon'				=> 'align-left',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-home_block.php',
    //         ));

    //         // CTA Blocks
    //         acf_register_block(array(
    //             'name'				=> 'cta',
    //             'title'				=> __('CTA'),
    //             'description'		=> __('A call to action'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'common',
    //             'icon'				=> 'megaphone',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-cta.php',
    //         ));

    //         // Banner
    //         acf_register_block(array(
    //             'name'				=> 'banner',
    //             'title'				=> __('Banner'),
    //             'description'		=> __('Banner block for top of page'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'layout',
    //             'icon'				=> 'align-center',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-banner.php',
    //         ));

    //         // Image Header
    //         acf_register_block(array(
    //             'name'				=> 'image_header',
    //             'title'				=> __('Image Header'),
    //             'description'		=> __('Image Header for top of page'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'layout',
    //             'icon'				=> 'align-center',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-image_header.php',
    //         ));

    //         // Header
    //         acf_register_block(array(
    //             'name'				=> 'header',
    //             'title'				=> __('Header Titles'),
    //             'description'		=> __('Titles for top of page, for use with Image Header'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'layout',
    //             'icon'				=> 'align-center',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-header.php',
    //         ));

    //         // Testimonials
    //         acf_register_block(array(
    //             'name'				=> 'testimonials',
    //             'title'				=> __('Testimonials'),
    //             'description'		=> __('Carousel of testimonials'),
    //             'category'			=> 'common',
    //             'icon'				=> 'format-quote',
    //             'mode'              => 'preview',
    //             'post_types'        => array('page'),
    //             'render_template'   => 'partials/block-testimonials.php',
    //         ));

    //         // Fun Facts
    //         acf_register_block(array(
    //             'name'				=> 'fun-facts',
    //             'title'				=> __('Fun Facts/Numbers'),
    //             'description'		=> __('List of numbers and fun facts'),
    //             'category'			=> 'widgets',
    //             'icon'				=> 'screenoptions',
    //             'mode'              => 'preview',
    //             'post_types'        => array('page'),
    //             'render_template'   => 'partials/block-fun_facts.php',
    //         ));

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

    //         //Gallery 
    //         acf_register_block(array(
    //             'name'				=> 'gallery',
    //             'title'				=> __('Gallery'),
    //             'description'		=> __('Image Gallery'),
    //             'post_types'        => array('page'),
    //             'category'			=> 'common',
    //             'icon'				=> 'screenoptions',
    //             'mode'              => 'preview',
    //             'render_template'   => 'partials/block-gallery.php',
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

        // //Block - Banner
        // acf_add_local_field_group(array(
        //     'key' => 'group_5d22ba7c15621',
        //     'title' => 'Block - Banner',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5d22bd0971f89',
        //             'label' => 'Text',
        //             'name' => 'text',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 1,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => 'You\'re a wizard, Harry',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22bd4171f8a',
        //             'label' => 'Image',
        //             'name' => 'image',
        //             'type' => 'image',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'return_format' => 'url',
        //             'preview_size' => 'medium',
        //             'library' => 'all',
        //             'min_width' => '',
        //             'min_height' => '',
        //             'min_size' => '',
        //             'max_width' => '',
        //             'max_height' => '',
        //             'max_size' => '',
        //             'mime_types' => '',
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/banner',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));
        
        // //Block - Fun Facts
        // acf_add_local_field_group(array(
        //     'key' => 'group_5d22bfe845925',
        //     'title' => 'Block - Fun Facts',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5d22bfefdf78f',
        //             'label' => 'Facts',
        //             'name' => 'facts',
        //             'type' => 'repeater',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'collapsed' => '',
        //             'min' => 1,
        //             'max' => 4,
        //             'layout' => 'table',
        //             'button_label' => '',
        //             'sub_fields' => array(
        //                 array(
        //                     'key' => 'field_5d22c00ddf790',
        //                     'label' => 'Label',
        //                     'name' => 'label',
        //                     'type' => 'text',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                     'prepend' => '',
        //                     'append' => '',
        //                     'maxlength' => '',
        //                 ),
        //                 array(
        //                     'key' => 'field_5d22c01adf791',
        //                     'label' => 'Number',
        //                     'name' => 'number',
        //                     'type' => 'number',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                     'prepend' => '',
        //                     'append' => '',
        //                     'min' => '',
        //                     'max' => '',
        //                     'step' => '',
        //                 ),
        //             ),
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/fun-facts',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));
        
        // //Block - Home Block
        // acf_add_local_field_group(array(
        //     'key' => 'group_5d22b03dce501',
        //     'title' => 'Block - Home Block',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5d725b03fa876',
        //             'label' => 'Parallax Image',
        //             'name' => 'image',
        //             'type' => 'image',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'return_format' => 'url',
        //             'preview_size' => 'full',
        //             'library' => 'all',
        //             'min_width' => 2500,
        //             'min_height' => '',
        //             'min_size' => '',
        //             'max_width' => '',
        //             'max_height' => '',
        //             'max_size' => '',
        //             'mime_types' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b04df73cc',
        //             'label' => 'Graphic',
        //             'name' => 'graphic',
        //             'type' => 'image',
        //             'instructions' => '',
        //             'required' => 1,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'return_format' => 'url',
        //             'preview_size' => 'medium',
        //             'library' => 'all',
        //             'min_width' => '',
        //             'min_height' => '',
        //             'min_size' => '',
        //             'max_width' => '',
        //             'max_height' => '',
        //             'max_size' => '',
        //             'mime_types' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b091f73cd',
        //             'label' => 'Heading/Quote',
        //             'name' => 'heading',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 1,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => '"Now Ron, the Sorting\'s much more important than food"',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b0acf73ce',
        //             'label' => 'Text',
        //             'name' => 'text',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => 'said Nearly Headless Nick as "Modley, Laura" became a Hufflepuff',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array (
        //             'key' => 'field_5d22b0ac3243c',
        //             'label' => 'Image Left Aligned',
        //             'name' => 'left',
        //             'type' => 'true_false',
        //         ),
        //         array(
        //             'key' => 'field_5d22b0bcf73cf',
        //             'label' => 'Call to Action?',
        //             'name' => 'call_to_action',
        //             'type' => 'true_false',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'message' => '',
        //             'default_value' => 0,
        //             'ui' => 0,
        //             'ui_on_text' => '',
        //             'ui_off_text' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b0ddf73d0',
        //             'label' => 'CTA Text',
        //             'name' => 'cta_text',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => array(
        //                 array(
        //                     array(
        //                         'field' => 'field_5d22b0bcf73cf',
        //                         'operator' => '==',
        //                         'value' => '1',
        //                     ),
        //                 ),
        //             ),
        //             'wrapper' => array(
        //                 'width' => '23',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => 'Is that, a dragon?',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b102f73d1',
        //             'label' => 'Button Text',
        //             'name' => 'button',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => array(
        //                 array(
        //                     array(
        //                         'field' => 'field_5d22b0bcf73cf',
        //                         'operator' => '==',
        //                         'value' => '1',
        //                     ),
        //                 ),
        //             ),
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => 'Find out here',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b117f73d2',
        //             'label' => 'Link',
        //             'name' => 'link',
        //             'type' => 'page_link',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => array(
        //                 array(
        //                     array(
        //                         'field' => 'field_5d22b0bcf73cf',
        //                         'operator' => '==',
        //                         'value' => '1',
        //                     ),
        //                 ),
        //             ),
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'post_type' => array(
        //                 0 => 'post',
        //                 1 => 'page',
        //             ),
        //             'taxonomy' => '',
        //             'allow_null' => 0,
        //             'allow_archives' => 1,
        //             'multiple' => 0,
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/home-block',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));

        // //Block - CTA Block
        // acf_add_local_field_group(array(
        //     'key' => 'group_5d22b03dce501',
        //     'title' => 'Block - CTA Block',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5d22b0ddf73d0',
        //             'label' => 'CTA Text',
        //             'name' => 'cta_text',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 0,
        //             'wrapper' => array(
        //                 'width' => '23',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => 'Is that, a dragon?',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b102f73d1',
        //             'label' => 'Button Text',
        //             'name' => 'button',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => 'Find out here',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5d22b117f73d2',
        //             'label' => 'Link',
        //             'name' => 'link',
        //             'type' => 'page_link',
        //             'instructions' => '',
        //             'required' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'post_type' => array(
        //                 0 => 'post',
        //                 1 => 'page',
        //             ),
        //             'taxonomy' => '',
        //             'allow_null' => 0,
        //             'allow_archives' => 1,
        //             'multiple' => 0,
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/cta',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));
        
        // //Block - Testimonials
        // acf_add_local_field_group(array(
        //     'key' => 'group_5d22bde5e1540',
        //     'title' => 'Block - Testimonials',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5d22bdf2e7dfb',
        //             'label' => 'Testimonials',
        //             'name' => 'testimonials',
        //             'type' => 'repeater',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'collapsed' => '',
        //             'min' => 0,
        //             'max' => 0,
        //             'layout' => 'block',
        //             'button_label' => '',
        //             'sub_fields' => array(
        //                 array(
        //                     'key' => 'field_5d22be0ae7dfc',
        //                     'label' => 'Quote',
        //                     'name' => 'quote',
        //                     'type' => 'textarea',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                     'maxlength' => '',
        //                     'rows' => '',
        //                     'new_lines' => 'wpautop',
        //                 ),
        //                 array(
        //                     'key' => 'field_5d22be28e7dfd',
        //                     'label' => 'Name',
        //                     'name' => 'name',
        //                     'type' => 'text',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                     'prepend' => '',
        //                     'append' => '',
        //                     'maxlength' => '',
        //                 ),
        //                 array(
        //                     'key' => 'field_5d22be7be7dfe',
        //                     'label' => 'Company/Business/Organisation',
        //                     'name' => 'company',
        //                     'type' => 'text',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                     'prepend' => '',
        //                     'append' => '',
        //                     'maxlength' => '',
        //                 ),
        //                 array(
        //                     'key' => 'field_5',
        //                     'label' => 'Profile Image',
        //                     'name' => 'image',
        //                     'type' => 'image',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'return_format' => 'url',
        //                     'preview_size' => 'thumbnail',
        //                     'library' => 'all',
        //                     'min_width' => '',
        //                     'min_height' => '',
        //                     'min_size' => '',
        //                     'max_width' => '',
        //                     'max_height' => '',
        //                     'max_size' => '',
        //                     'mime_types' => '',
        //                 ),
        //             ),
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/testimonials',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));

        // //Block - Timetable
        // acf_add_local_field_group(array(
        //     'key' => 'group_5d901a630d7c4',
        //     'title' => 'Timetable',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5d901a7ad67dd',
        //             'label' => 'Day',
        //             'name' => 'day',
        //             'type' => 'repeater',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'collapsed' => '',
        //             'min' => 0,
        //             'max' => 0,
        //             'layout' => 'block',
        //             'button_label' => 'Add Day',
        //             'sub_fields' => array(
        //                 array(
        //                     'key' => 'field_5d901a8bd67de',
        //                     'label' => 'Heading',
        //                     'name' => 'heading',
        //                     'type' => 'text',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                     'prepend' => '',
        //                     'append' => '',
        //                     'maxlength' => '',
        //                 ),
        //                 array(
        //                     'key' => 'field_5d901aa4d67df',
        //                     'label' => 'Items',
        //                     'name' => 'items',
        //                     'type' => 'repeater',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'collapsed' => '',
        //                     'min' => 0,
        //                     'max' => 0,
        //                     'layout' => 'row',
        //                     'button_label' => 'Add Item',
        //                     'sub_fields' => array(
        //                         array(
        //                             'key' => 'field_5d901ae6d67e0',
        //                             'label' => 'Item',
        //                             'name' => 'item',
        //                             'type' => 'text',
        //                             'instructions' => '',
        //                             'required' => 0,
        //                             'conditional_logic' => 0,
        //                             'wrapper' => array(
        //                                 'width' => '',
        //                                 'class' => '',
        //                                 'id' => '',
        //                             ),
        //                             'default_value' => '',
        //                             'placeholder' => '',
        //                             'prepend' => '',
        //                             'append' => '',
        //                             'maxlength' => '',
        //                         ),
        //                     ),
        //                 ),
        //             ),
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/timetable',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));
        
        //Image Header Selection
        acf_add_local_field_group(array(
            'key' => 'group_5db2bf00316ef',
            'title' => 'Custom Meta',
            'fields' => array(
                array(
                    'key' => 'field_5db2bf46e2616',
                    'label' => 'Image Header',
                    'name' => 'image_header',
                    'type' => 'true_false',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'message' => '',
                    'default_value' => 0,
                    'ui' => 0,
                    'ui_on_text' => '',
                    'ui_off_text' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'page',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'side',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

        // //Block - Image Header
        // acf_add_local_field_group(array(
        //     'key' => 'group_5db2c3aa1bbaa',
        //     'title' => 'Image Header',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5db2c3bfb6bd0',
        //             'label' => 'Image',
        //             'name' => 'image',
        //             'type' => 'image',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'return_format' => 'url',
        //             'preview_size' => 'medium',
        //             'library' => 'all',
        //             'min_width' => '',
        //             'min_height' => '',
        //             'min_size' => '',
        //             'max_width' => '',
        //             'max_height' => '',
        //             'max_size' => '',
        //             'mime_types' => '',
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/image-header',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));

        // //Block - Heading Titles
        // acf_add_local_field_group(array(
        //     'key' => 'group_5db6502c3a275',
        //     'title' => 'Titles',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5db6504391457',
        //             'label' => 'Title',
        //             'name' => 'title',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 1,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => '',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5db6507b91458',
        //             'label' => 'Subtitle',
        //             'name' => 'subtitle',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => '',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //         array(
        //             'key' => 'field_5db6508e91459',
        //             'label' => 'Sub-Subtitle',
        //             'name' => 'sub-subtitle',
        //             'type' => 'text',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'default_value' => '',
        //             'placeholder' => '',
        //             'prepend' => '',
        //             'append' => '',
        //             'maxlength' => '',
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/header',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));

        // //Block - Gallery
        // acf_add_local_field_group(array(
        //     'key' => 'group_5db814d00e126',
        //     'title' => 'Gallery',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5db814e4614f5',
        //             'label' => 'Gallery',
        //             'name' => 'gallery',
        //             'type' => 'gallery',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'return_format' => 'array',
        //             'preview_size' => 'medium',
        //             'insert' => 'append',
        //             'library' => 'all',
        //             'min' => '',
        //             'max' => '',
        //             'min_width' => 300,
        //             'min_height' => 300,
        //             'min_size' => '',
        //             'max_width' => '',
        //             'max_height' => '',
        //             'max_size' => '',
        //             'mime_types' => '',
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/gallery',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));

        // //Block - Media Item
        // acf_add_local_field_group(array(
        //     'key' => 'group_5db816fc68255',
        //     'title' => 'Media',
        //     'fields' => array(
        //         array(
        //             'key' => 'field_5dd252be77d0c',
        //             'label' => 'Media Item',
        //             'name' => 'items',
        //             'type' => 'repeater',
        //             'instructions' => '',
        //             'required' => 0,
        //             'conditional_logic' => 0,
        //             'wrapper' => array(
        //                 'width' => '',
        //                 'class' => '',
        //                 'id' => '',
        //             ),
        //             'collapsed' => '',
        //             'min' => 0,
        //             'max' => 0,
        //             'layout' => 'block',
        //             'button_label' => 'Add Item',
        //             'sub_fields' => array(
        //                 array(
        //                     'key' => 'field_5db8170349b83',
        //                     'label' => 'Video',
        //                     'name' => 'video',
        //                     'type' => 'url',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                 ),
        //                 array(
        //                     'key' => 'field_5db8172f49b84',
        //                     'label' => 'Overlay Image',
        //                     'name' => 'overlay',
        //                     'type' => 'image',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'return_format' => 'array',
        //                     'preview_size' => 'medium',
        //                     'library' => 'all',
        //                     'min_width' => '',
        //                     'min_height' => '',
        //                     'min_size' => '',
        //                     'max_width' => '',
        //                     'max_height' => '',
        //                     'max_size' => '',
        //                     'mime_types' => '',
        //                 ),
        //                 array(
        //                     'key' => 'field_5db8175249b85',
        //                     'label' => 'Description',
        //                     'name' => 'description',
        //                     'type' => 'textarea',
        //                     'instructions' => '',
        //                     'required' => 0,
        //                     'conditional_logic' => 0,
        //                     'wrapper' => array(
        //                         'width' => '',
        //                         'class' => '',
        //                         'id' => '',
        //                     ),
        //                     'default_value' => '',
        //                     'placeholder' => '',
        //                     'maxlength' => '',
        //                     'rows' => '',
        //                     'new_lines' => '',
        //                 ),
        //             ),
        //         ),
        //     ),
        //     'location' => array(
        //         array(
        //             array(
        //                 'param' => 'block',
        //                 'operator' => '==',
        //                 'value' => 'acf/media',
        //             ),
        //         ),
        //     ),
        //     'menu_order' => 0,
        //     'position' => 'normal',
        //     'style' => 'default',
        //     'label_placement' => 'top',
        //     'instruction_placement' => 'label',
        //     'hide_on_screen' => '',
        //     'active' => true,
        //     'description' => '',
        // ));
        
        
    endif;
?>