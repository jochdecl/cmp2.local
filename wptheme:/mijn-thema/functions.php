<?php
  # …
  function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary Menu' ),
        'secondary-menu' => __( 'Secondary Menu' ),
        'footer-menu' => __( 'Footer Menu Left' ),
        'footer-menu-2' => __( 'Footer Menu Right' )
      )
    );
  }

// add featured image support
  function featured_images() {
    add_theme_support('post-thumbnails');
    
}
add_action('after_setup_theme', 'featured_images');

  
  add_action( 'init', 'register_menu_locations' );

  function register_sidebar_locations() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary-sidebar',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
    // dit zijn zones die we aanmaken.
    register_sidebar(
        array(
            'id'            => 'secondary-sidebar',
            'name'          => __( 'Secondary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'register_sidebar_locations' );
//add_theme_support( 'post-thumbnails' ); // custom tumbnails

//extra image sizze for blog detail pagina
add_image_size( 'header-banner', 1000, 250, true);

//the_post_thumbnail(); // Without parameter ->; Thumbnail
//the_post_thumbnail( 'thumbnail' ); // Thumbnail (default 150px x 150px max)
//the_post_thumbnail( 'medium' ); // Medium resolution (default 300px x 300px max)
//the_post_thumbnail( 'medium_large' ); // Medium-large resolution (default 768px x no height limit max)
//the_post_thumbnail( 'large' ); // Large resolution (default 640px x 640px max)
//the_post_thumbnail( 'full' ); // Original image resolution (unmodified)
//the_post_thumbnail( array( 100, 100 ) ); // Other resolutions (height, width)
//the_post_thumbnail( 'thumbnail', array( 'class' => 'alignleft' ) );

//if ( function_exists( 'add_theme_support' ) ) {
   // add_theme_support( 'post-thumbnails' );
    //set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    //add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
// }

 //set_post_thumbnail_size( 50, 50, true ); // 50 pixels wide by 50 pixels tall, crop mode

 add_theme_support( 'custom-logo' ); //custom logo

 function themename_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
$header_info = array(
    'width'         => 1200,
    'height'        => 400,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);

add_theme_support( 'custom-header' );

//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
// custom types

function custom_post_type_bieren() {
  $labels = array(
    'name'               => _x( 'Bieren', 'post type general name' ),
    'singular_name'      => _x( 'Beer item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'beer' ),
    'add_new_item'       => __( 'Add New beer item' ),
    'edit_item'          => __( 'Edit beer item' ),
    'new_item'           => __( 'New beer item' ),
    'all_items'          => __( 'All beer items' ),
    'view_item'          => __( 'View beer item' ),
    'search_items'       => __( 'Search beer items' ),
    'not_found'          => __( 'No beer item found' ),
    'not_found_in_trash' => __( 'No beer item found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Bieren'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our beer items specific data',
    'public'        => true,
    'menu_position' => 5,
	'menu_icon'     => 'dashicons-bieren',
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'bieren', $args );
}

add_action( 'init', 'custom_post_type_bieren' );

//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------
// taxonomie

function taxonomies_portfolio() {
  $labels = array(
    'name'              => _x( 'Portfolio Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Portfolio Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Portfolio Categories' ),
    'all_items'         => __( 'All Portfolio Categories' ),
    'parent_item'       => __( 'Parent Portfolio Category' ),
    'parent_item_colon' => __( 'Parent Portfolio Category:' ),
    'edit_item'         => __( 'Edit Portfolio Category' ), 
    'update_item'       => __( 'Update Portfolio Category' ),
    'add_new_item'      => __( 'Add New Portfolio Category' ),
    'new_item_name'     => __( 'New Portfolio Category' ),
    'menu_name'         => __( 'Portfolio Categories' )
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true, // do not change
  );
  register_taxonomy( 'portfolio_category', 'portfolio', $args );
}
add_action( 'init', 'taxonomies_portfolio', 0 );


?>