<?php 

/* Register menu */

function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );



/* Custom Post Type Start */

function create_posttype() {
    register_post_type( 'news',
    // CPT Options
    array(
      'labels' => array(
       'name' => __( 'news' ),
       'singular_name' => __( 'News' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'news'),
     )
    );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'create_posttype' );


/* Edit custom post type */

function cw_post_type_news() {
    $supports = array(
  
    'title', // post title
    'editor', // post content
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
    'revisions', // post revisions
    'post-formats', // post formats
    );
    $labels = array(
    'name' => _x('Produkty', 'plural'),
    'singular_name' => _x('Produkt', 'singular'),
    'menu_name' => _x('Produkty', 'admin menu'),
    'name_admin_bar' => _x('produkty', 'admin bar'),
    'add_new' => _x('Dodaj', 'add new'),
    'add_new_item' => __('Dodaj produkt'),
    'new_item' => __('Nowy '),
    'edit_item' => __('Edytuj '),
    'view_item' => __('Zobacz'),
    'all_items' => __('Wszystkie produkty'),
    'search_items' => __('Wyszukaj'),
    'not_found' => __('Brak'),
    );
    $args = array(
    'supports' => $supports,
  
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'news'),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type('news', $args);
    }
  
    add_action('init', 'cw_post_type_news');
    


/* Post Excerpt length */

function custom_excerpt_length( $length ) {
    return 20;
  }
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
  
/* Post Excerpt delete [...] */

function sydney_child_elipsis($content) {
	return str_replace('[&hellip;]', ' ', $content);
}
add_filter('the_excerpt', 'sydney_child_elipsis');


/* Support thumbnail */

add_theme_support( 'post-thumbnails', array( 'post', 'page', 'news' ) );



/* Register widgets */

function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Footer area one',
      'id'            => 'footer_area_one',
      'description'   => 'This widget area discription',
      'before_widget' => '<section class="footer-area footer-area-one">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area two',
      'id'            => 'footer_area_two',
      'description'   => 'This widget area discription',
      'before_widget' => '<section class="footer-area footer-area-two">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area three',
      'id'            => 'footer_area_three',
      'description'   => 'This widget area discription',
      'before_widget' => '<section class="footer-area footer-area-three">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
    register_sidebar( array(
      'name'          => 'Footer area four',
      'id'            => 'footer_area_four',
      'description'   => 'This widget area discription',
      'before_widget' => '<section class="footer-area footer-area-three">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );

  

?>