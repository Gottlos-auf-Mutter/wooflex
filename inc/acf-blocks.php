<?php



// Preview CSS in Backend 

function wf_blocks_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/reset.css' );
	add_editor_style( 'assets/css/colors.css' );
	add_editor_style( 'assets/css/fonts.css' );
	add_editor_style( 'assets/css/typography.css' );
	add_editor_style( 'assets/css/grid.css' );
	add_editor_style( 'assets/css/backend.css' );
	add_editor_style( 'assets/css/wf-blocks.css' );
	add_editor_style( 'assets/css/wf-woocommerce.css' );
	add_editor_style( 'assets/css/style.css' );

}

add_action( 'after_setup_theme', 'wf_blocks_setup' );


// Create Custom Block Category
function custom_block_category($categories, $post) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'wooflexblocks',
                'title' => __('Wooflex', 'text-domain'),
                // 'icon' => 'wordpress' (optional),
            ),
        )
    );
}
add_filter('block_categories_all', 'custom_block_category', 1, 2);


add_action('acf/init', 'wf_acf_init');
function wf_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        acf_register_block(array(
            'name'              => 'herobanner',
						'title'             => __('Herobanner'),
            'description'       => __('A custom herobanner block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'wooflexblocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'herobanner', 'banner' ),
        ));
        
        acf_register_block(array(
            'name'              => 'accordion',
            'title'             => __('Accordion'),
            'description'       => __('A custom accordion block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'wooflexblocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'accordion', 'wf' ),
        ));
        
        acf_register_block(array(
            'name'              => 'teaserbanner',
            'title'             => __('Teaserbanner'),
            'description'       => __('A custom teaserbanner block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'wooflexblocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'teaserbanner', 'wf', 'banner','teaser' ),
        ));
        
        acf_register_block(array(
            'name'              => 'textcolumns',
            'title'             => __('Textcolumns'),
            'description'       => __('A custom textcolumns block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'wooflexblocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'textblock', 'text', 'columns' ),
        ));
        
        acf_register_block(array(
            'name'              => 'textwithimage',
            'title'             => __('Text with image'),
            'description'       => __('A custom text-with-image block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'wooflexblocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'textblock', 'text', 'image' ),
        ));
        
        acf_register_block(array(
            'name'              => 'services',
            'title'             => __('Services'),
            'description'       => __('A custom services block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'wooflexblocks',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'services', 'logos', 'solutions' ),
        ));
    }
}


function my_acf_block_render_callback( $block ) {
    
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);
    
    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
    }
}
