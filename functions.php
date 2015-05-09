<?php
/**
 * Modern Minimal functions and definitions
 *
 * @package Modern Minimal
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'modern_minimal_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function modern_minimal_setup() {
	
	
     // setup one language for admin and the other for theme
     // must be called before load_theme_textdomain()

     function set_my_locale($locale) {
          $locale = ( is_admin() ) ? "en_US" : "hu_HU";
          setlocale(LC_ALL, $local );
          return $locale;
     }
     add_filter( 'locale', 'set_my_locale' );

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Modern Minimal, use a find and replace
	 * to change 'modern-minimal' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'modern-minimal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'modern-minimal' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video',
	) );
		
	// Enabling Support for Post Thumbnails
	add_theme_support( 'post-thumbnails' ); 
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'modern_minimal_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // modern_minimal_setup
add_action( 'after_setup_theme', 'modern_minimal_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function modern_minimal_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'modern-minimal' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'modern_minimal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function modern_minimal_scripts() {
	wp_register_script( 'modern-minimal-modernizr', get_template_directory_uri() . '/js/modernizr.min.js', null, null, false );
	
	wp_register_style( 'modern-minimal-fonts', '//fonts.googleapis.com/css?family=Roboto:400,100,700,900&subset=latin,latin-ext', null, null, 'all' );
	
	wp_register_style( 'modern-minimal-style', get_template_directory_uri() . '/layouts/style.css', null, null, 'screen' );
	
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', null, null, true );
	
	wp_register_script( 'modern-minimal-smoothState', 'https://rawgit.com/miguel-perez/jquery.smoothState.js/master/jquery.smoothState.js', array( 'jquery' ), null, true );
	
	wp_register_script( 'modern-minimal-owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), null, true );
	
	
	
	wp_register_script( 'modern-minimal-cv', get_template_directory_uri() . '/js/oneletrajz.min.js', array( 'jquery' ), null, true );
	
	wp_register_script( 'modern-minimal-init', get_template_directory_uri() . '/js/init.min.js', array( 'jquery', 'modern-minimal-owlcarousel' ), null, true );
	
	
	wp_enqueue_style ( 'modern-minimal-fonts' );
	wp_enqueue_style ( 'modern-minimal-style' );
	
	wp_enqueue_script( 'modern-minimal-modernizr' );	
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'modern-minimal-smoothState' );
	wp_enqueue_script( 'modern-minimal-owlcarousel' );
	
	wp_enqueue_script( 'modern-minimal-cv' );
	wp_enqueue_script( 'modern-minimal-init' );
	

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'modern_minimal_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


//add_filter('show_admin_bar', '__return_false');

function disable_wp_emojicons() {
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  //add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );











add_filter( 'post_gallery', 'owl_gallery_shortcode', 10, 2 );
function owl_gallery_shortcode( $output, $attr ) {
    $post = get_post();

    static $instance = 0;
    $instance++;

    // override default link settings
    if ( empty(  $attr['link'] ) ) {
        $attr['link'] = 'none'; // set your default value here
    }

    if ( !empty( $attr['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $attr['orderby'] ) )
            $attr['orderby'] = 'post__in';
        $attr['include'] = $attr['ids'];
    }

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post ? $post->ID : 0,
        'itemtag'    => 'dl',
        'icontag'    => 'dt',
        'captiontag' => 'dd',
        'columns'    => 3,
        'size'       => 'full',
        'include'    => '',
        'exclude'    => ''
    ), $attr, 'gallery'));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $icontag = tag_escape($icontag);
    $valid_tags = wp_kses_allowed_html( 'post' );
    if ( ! isset( $valid_tags[ $itemtag ] ) )
        $itemtag = 'dl';
    if ( ! isset( $valid_tags[ $captiontag ] ) )
        $captiontag = 'dd';
    if ( ! isset( $valid_tags[ $icontag ] ) )
        $icontag = 'dt';

    $columns = intval($columns);

    $selector = "gallery-{$instance}";

    //$gallery_style = $gallery_div = '';
    
    $size_class = sanitize_html_class( $size );
    //$gallery_div = "<div id='$selector' class='gallery galleryid-{$id} gallery-columns-{$columns} gallery-size-{$size_class}'>";
    //$output = apply_filters( 'gallery_style', $gallery_div );
	
	$i = 0;
	if (is_page_template('page-gallery.php')) {		
		foreach ( $attachments as $id => $attachment ) {
			/*
			if ( ! empty( $attr['link'] ) && 'file' === $attr['link'] )
				$image_output = wp_get_attachment_link( $id, $size, false, false );
			elseif ( ! empty( $attr['link'] ) && 'none' === $attr['link'] )
				$image_output = wp_get_attachment_image( $id, $size, false );
			else
				
				$image_output = wp_get_attachment_link( $id, $size, true, false );
			*/

			$image_meta  = wp_get_attachment_metadata( $id );
			
			$image_output = wp_get_attachment_image_src( $id, $size );
			$image_url = $image_output[0];
			$image_width = $image_output[1];
			$image_height = $image_output[2];
			
			$orientation = '';
			if ( isset( $image_meta['height'], $image_meta['width'] ) )
				$orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';

			$output .= "<{$itemtag} class='gallery-item owl-item-inner'>";
			
			$output .= "<img " . ($i==0 ? 'src' : 'data-src') . "='" . $image_url . "' width='".$image_width."' height='".$image_height."' >";
			
			$output .= "<span " . ($i==0 ? '' : 'data-src') . " class='bg' style='background-image: url( $image_url );'></span>";
			
			if ( $captiontag && trim($attachment->post_excerpt) ) {
				$output .= "
					<{$captiontag} class='wp-caption-text gallery-caption'>
					" . wptexturize($attachment->post_excerpt) . "
					</{$captiontag}>";
			}
			$output .= "</{$itemtag}>";
			
			$i++;
		}
	}
	
	if (is_page_template('page-cv.php')) {
		foreach ( $attachments as $id => $attachment ) {			
			
			$image_output = wp_get_attachment_image_src( $id, $size );
			$image_url = $image_output[0];
			$image_width = $image_output[1];
			$image_height = $image_output[2];
			
			$output .= '<div class="large-4 medium-4 small-6 columns box box-16x9 margin-bottom-1row">';
			$output .= '<a class="content" href="'.$image_url.'">';
			$output .= "<img src='" . $image_url . "' width='".$image_width."' height='".$image_height."' >";
			$output .= '</a>';
			$output .= '</div>';
		}
	}

	return $output;
}





class nolist_walker extends Walker_Nav_Menu {
	
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty($item->classes) ? array () : (array) $item->classes;
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
		!empty ($class_names) && $class_names = 'class="'. esc_attr($class_names) . '"';
		$output .= "<div id='menu-item-$item->ID' $class_names>";
		$attributes = '';
		//var_dump($item);
		!empty($item->attr_title) && $attributes .= ' title="' . esc_attr($item->attr_title) .'"';
		!empty($item->target) && $attributes .= ' target="' . esc_attr($item->target) .'"';
		!empty($item->xfn) && $attributes .= ' rel="' . esc_attr($item->xfn) .'"';
		!empty($item->url) && $attributes .= ' href="' . esc_attr($item->url) .'"';
		$attributes .= ' class = "menu-label h2"';
		$title = apply_filters('the_title', $item->title, $item->ID);
		$item_output = $args->before."<a$attributes>".$args->link_before.$title.'</a>'.$args->link_after.$args->after;
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
	function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$output .= "</div>\n";
	}
}







if ( ! function_exists( 'image_orientation' ) ) :
    function image_orientation() {

        $thumb_id   = get_post_thumbnail_id();
		$image_data = wp_get_attachment_image_src( $thumb_id , 'tp-thumbnail' );

		$width  = $image_data[1];
		$height = $image_data[2];

		if ( $width > $height ) {
			return 'box-2x1';
		}
		if ( $width < $height ) {
			return 'box-1x2';
		}
		if ( $width == $height ) {
			return 'box-1x1';
		}
    }
endif;






function my_theme_infinite_scroll_settings( $args ) {
    if ( is_array( $args ) )
		$args['type'] = 'scroll';
		$args['container'] = 'container';
        $args['wrapper'] = false;
		$args['footer'] = false;
		$args['footer_widgets'] = false;
		$args['posts_per_page'] = 4;
    return $args;
}
add_filter( 'infinite_scroll_settings', 'my_theme_infinite_scroll_settings' );