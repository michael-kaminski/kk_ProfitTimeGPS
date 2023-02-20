<?php
/**
 * ProfitTime GPS functions and definitions
 *
 */


function register_ptGPS_menus() {
	register_nav_menus(
		array(
			'top-menu' => __( 'Top Menu' ),
			'header-menu' => __( 'Header Menu' ),
			'footer-menu' => __( 'Footer Menu' ),
			'cta-menu' => __( 'CTA Menu' )
		)
	);
}
add_action( 'init', 'register_ptGPS_menus' );

function remove_editor_from_templates()
{
    global $post;

    if( ! is_a($post, 'WP_Post') ) {
        return;
    }


    /* basename is used for templates that are in the subdirectory of the theme */
    $current_page_template_slug = basename( get_page_template_slug($post_id) );

    /* file names of templates to remove the editor on */
    $excluded_template_slugs = array(
        'variable-management-tutorials-template.php',
        'variable-management-video-post-template.php',
        'product-tutorials-template.php',
        'product-video-post-template.php',
        'homepage-template.php'
    );

    if( in_array($current_page_template_slug, $excluded_template_slugs) ) {
        /* remove editor from pages */
        remove_post_type_support('page', 'editor');
        /* if needed, add posts or CPTs to remove the editor on */
        remove_post_type_support('post', 'editor');
        // remove_post_type_support('movies', 'editor');
    }

}

add_action('admin_enqueue_scripts', 'remove_editor_from_templates');