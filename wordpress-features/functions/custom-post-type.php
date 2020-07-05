



<?php 

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
  


/*Custom Post type start*/
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
  





  function add_post_theme_support_args($args, $post_type){
 
    if ($post_type == 'themes'){
        $args['support'] = 'thumbnail';
    }
 
    return $args;
}

?>