<?php



/* ---------- Preview CSS in Backend ---------- */

function wf_blocks_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/reset.css' );
	add_editor_style( 'css/colors.css' );
	add_editor_style( 'css/typography.css' );
	add_editor_style( 'css/grid.css' );
	add_editor_style( 'css/backend.css' );
	add_editor_style( 'css/wf-blocks.css' );
	add_editor_style( 'css/wf-woocommerce.css' );
	add_editor_style( 'css/style.css' );

}

add_action( 'after_setup_theme', 'wf_blocks_setup' );



add_action('acf/init', 'wf_acf_init');
function wf_acf_init() {
    
    // check function exists
    if( function_exists('acf_register_block') ) {
        
        // register a Heroanner block
        acf_register_block(array(
            'name'              => 'herobanner',
            'title'             => __('Herobanner'),
            'description'       => __('A custom herobanner block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'herobanner', 'banner' ),
        ));
        
        // register a Accordionc block
        acf_register_block(array(
            'name'              => 'accordion',
            'title'             => __('Accordion'),
            'description'       => __('A custom accordion block.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'accordion', 'wf' ),
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
