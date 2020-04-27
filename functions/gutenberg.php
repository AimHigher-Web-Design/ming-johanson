<?php

// Add Colour Palette to Gutenberg
function disable_gutenberg_custom_colour_picker() {
	add_theme_support( 'disable-custom-colors' );
}
add_action( 'after_setup_theme', 'disable_gutenberg_custom_colour_picker' );

function disable_gutenberg_custom_font_sizes() {
	add_theme_support('disable-custom-font-sizes');
}
add_action( 'after_setup_theme', 'disable_gutenberg_custom_font_sizes' );

function mingjohanson_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => 'Teal',
				'slug'  => 'teal',
				'color' => '#10bdc8',
			],
			[
				'name'  => 'Purple',
				'slug'  => 'purple',
				'color' => '#92278f',
			],
			[
				'name'  => 'Sunset',
				'slug'  => 'sunset',
				'color' => '#F2664E',
			],
			[
				'name'  => 'Sunrise',
				'slug'  => 'sunrise',
				'color' => '#ED1065',
			],
			[
				'name'  => 'Water',
				'slug'  => 'water',
				'color' => '#279DD9',
			],
			[
				'name'  => 'Forest',
				'slug'  => 'forest',
				'color' => '#587F43',
			],
			[
				'name'  => 'White',
				'slug'  => 'white',
				'color' => '#ffffff',
			],
			[
				'name'  => 'Grey',
				'slug'  => 'grey',
				'color' => '#58595c',
			],
		]
	);

	add_theme_support(
		'editor-gradient-presets',
		array(
			array(
				'name'     => 'Teal to Purple Linear',
				'gradient' => 'linear-gradient(45deg, rgb(144, 46, 144) 0%, rgb(144, 46, 144) 30%, rgb(125, 81, 154) 40%, rgb(125, 81, 154) 50%, rgb(52, 163, 183) 60%, rgb(28, 189, 201) 70%, rgb(50, 193, 209) 80%, rgb(50, 193, 209) 100%)',
				'slug'     => 'teal-to-purple'
			),
			
		)
	);
}
add_action( 'after_setup_theme', 'mingjohanson_add_custom_gutenberg_color_palette' );

?>