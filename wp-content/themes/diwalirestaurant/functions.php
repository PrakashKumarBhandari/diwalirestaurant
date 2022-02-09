<?php
/**
 * Diwali Restaurant functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Diwali_Restaurant
 */

if (!function_exists('diwalirestaurant_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function diwalirestaurant_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Diwali Restaurant, use a find and replace
         * to change 'diwalirestaurant' to the name of your theme in all the template files.
         */
        load_theme_textdomain('diwalirestaurant', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /**
         * Enable support for custom logo.
         */
        add_theme_support('custom-logo', array(
            'height' => 120,
            'width' => 120,
            'flex-height' => true,
        ));

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'diwalirestaurant'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('diwalirestaurant_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }
endif;
add_action('after_setup_theme', 'diwalirestaurant_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function diwalirestaurant_content_width()
{
    $GLOBALS['content_width'] = apply_filters('diwalirestaurant_content_width', 640);
}

add_action('after_setup_theme', 'diwalirestaurant_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function diwalirestaurant_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'diwalirestaurant'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'diwalirestaurant'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'diwalirestaurant_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function diwalirestaurant_scripts()
{
    wp_enqueue_style('diwalirestaurant-style', get_stylesheet_uri());

    wp_enqueue_script('diwalirestaurant-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('diwalirestaurant-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
    
    if (is_page('reservation') || is_page('home')) {
        wp_enqueue_script('reservation-handler', get_template_directory_uri() . '/js/config-reservation.js', array(), '20210208', true);
        wp_localize_script( 'reservation-handler', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));   
    }
   
    if (is_page('contact')) {
    
    //wp_enqueue_script('diwalirestaurant-gmap','http://maps.google.com/maps/api/js?key=AIzaSyDeuiK6g0GS8NWaDJVdSuzwUKsurajOUdg','','',true);
    //wp_enqueue_script('diwali-gmapjs', get_template_directory_uri() . '/js/gmaps.js', array(), '20210208', true);
    
    wp_enqueue_script('form-contact', get_template_directory_uri() . '/js/config-contact.js', array(), '20210208', true);
	wp_localize_script( 'form-contact', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));   
    }

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    
   



}

add_action('wp_enqueue_scripts', 'diwalirestaurant_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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


/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define('OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/');
require_once dirname(__FILE__) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template('options.php');
load_template($optionsfile);


/* Disable WordPress Admin Bar for all users but admins. */
show_admin_bar(false);

class diwalirestaurant_walker_nav_menu extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';

        $classes = empty($item->classes) ? array() : (array)$item->classes;

        /* Add active class */
        if (in_array('current-menu-item', $classes)) {
            $classes[] = 'uk-active';
            unset($classes['current-menu-item']);
        }

        /* Check for children */
        $children = get_posts(array('post_type' => 'nav_menu_item', 'nopaging' => true, 'numberposts' => 1, 'meta_key' => '_menu_item_menu_item_parent', 'meta_value' => $item->ID));
        if (!empty($children)) {
            $classes[] = 'uk-parent';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . ' class="uk-navbar-nav-subtitle">';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '<div>' . $item->description . '</div>';
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id);
    }
}

/**
 * Create CPT Slideshows
 *
 */
function diwalirestaurant_cpt_slideshows()
{

    $labels = array(
        'name' => _x('Slideshows', 'Post Type General Name', 'diwalirestaurant'),
        'singular_name' => _x('Slideshows', 'Post Type Singular Name', 'diwalirestaurant'),
        'menu_name' => __('Slideshows', 'diwalirestaurant'),
        'parent_item_colon' => __('Parent Slideshow', 'diwalirestaurant'),
        'all_items' => __('Slideshows', 'diwalirestaurant'),
        'view_item' => __('View Slideshows', 'diwalirestaurant'),
        'add_new_item' => __('Add New Slide', 'diwalirestaurant'),
        'add_new' => __('Add New', 'diwalirestaurant'),
        'edit_item' => __('Edit Slide', 'diwalirestaurant'),
        'update_item' => __('Update Slide', 'diwalirestaurant'),
        'search_items' => __('Search Slideshows', 'diwalirestaurant'),
        'not_found' => __('Not Found', 'diwalirestaurant'),
        'not_found_in_trash' => __('Not found in Trash', 'diwalirestaurant'),
    );

    $args = array(
        'label' => __('slideshows', 'diwalirestaurant'),
        'description' => __('Our Slideshows', 'diwalirestaurant'),
        'labels' => $labels,
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-images-alt',
    );

    register_post_type('slideshows', $args);

}

add_action('init', 'diwalirestaurant_cpt_slideshows');

/**
 * Register new Post Type Testimonials
 *
 */
function diwalirestaurant_create_testimonials()
{
    $labels = array(
        'name' => _x('Testimonials', 'post type general name'),
        'singular_name' => _x('Testimonials', 'post type singular name'),
        'add_new' => _x('Add New', 'Testimonial'),
        'add_new_item' => __('Add New Testimonial'),
        'edit_item' => __('Edit Testimonial'),
        'new_item' => __('New Testimonial'),
        'all_items' => __('All Testimonials'),
        'view_item' => __('View Testimonial'),
        'search_items' => __('Search Testimonial'),
        'not_found' => __('No Testimonial found'),
        'not_found_in_trash' => __('No Testimonial found in the Trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Testimonials'
    );
    $args = array(
        'label' => __('testimonials', 'diwalirestaurant'),
        'description' => __('Testimonials', 'diwalirestaurant'),
        'labels' => $labels,
        'supports' => array('title', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-format-quote',
    );
    register_post_type('clientsayings', $args);
}

add_action('init', 'diwalirestaurant_create_testimonials');

/**
 * Create CPT Gallery
 *
 */
function diwalirestaurant_cpt_gallery()
{

    $labels = array(
        'name' => _x('Gallery', 'Post Type General Name', 'diwalirestaurant'),
        'singular_name' => _x('Gallery', 'Post Type Singular Name', 'diwalirestaurant'),
        'menu_name' => __('Gallery', 'diwalirestaurant'),
        'parent_item_colon' => __('Parent Gallery', 'diwalirestaurant'),
        'all_items' => __('Gallery', 'diwalirestaurant'),
        'view_item' => __('View Gallery', 'diwalirestaurant'),
        'add_new_item' => __('Add New Gallery Item', 'diwalirestaurant'),
        'add_new' => __('Add New', 'diwalirestaurant'),
        'edit_item' => __('Edit Gallery', 'diwalirestaurant'),
        'update_item' => __('Update Gallery', 'diwalirestaurant'),
        'search_items' => __('Search Gallery', 'diwalirestaurant'),
        'not_found' => __('Not Found', 'diwalirestaurant'),
        'not_found_in_trash' => __('Not found in Trash', 'diwalirestaurant'),
    );

    $args = array(
        'label' => __('gallery', 'diwalirestaurant'),
        'description' => __('Gallery', 'diwalirestaurant'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-images-alt2',
    );

    register_post_type('gallery', $args);

}

add_action('init', 'diwalirestaurant_cpt_gallery');

/**
 * Create CPT Menu
 *
 */
function diwalirestaurant_cpt_menu()
{

    $labels = array(
        'name' => _x('Menu', 'Post Type General Name', 'diwalirestaurant'),
        'singular_name' => _x('Menu', 'Post Type Singular Name', 'diwalirestaurant'),
        'menu_name' => __('Menu', 'diwalirestaurant'),
        'parent_item_colon' => __('Parent Menu', 'diwalirestaurant'),
        'all_items' => __('Menu', 'diwalirestaurant'),
        'view_item' => __('View Menu', 'diwalirestaurant'),
        'add_new_item' => __('Add New Menu Item', 'diwalirestaurant'),
        'add_new' => __('Add New', 'diwalirestaurant'),
        'edit_item' => __('Edit Menu', 'diwalirestaurant'),
        'update_item' => __('Update Menu', 'diwalirestaurant'),
        'search_items' => __('Search Menu', 'diwalirestaurant'),
        'not_found' => __('Not Found', 'diwalirestaurant'),
        'not_found_in_trash' => __('Not found in Trash', 'diwalirestaurant'),
    );

    $args = array(
        'label' => __('menu', 'diwalirestaurant'),
        'description' => __('Menu', 'diwalirestaurant'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
        'menu_icon' => 'dashicons-admin-site',
    );

    register_post_type('menu', $args);

}

add_action('init', 'diwalirestaurant_cpt_menu');

// Menu Categories
function create_menu_category()
{
    $labels = array(
        'name' => _x('Menu Categories', 'taxonomy general name'),
        'singular_name' => _x('Menu Category', 'taxonomy singular name'),
        'search_items' => __('Search Menu Categories'),
        'all_items' => __('All Menu Categories'),
        'parent_item' => __('Parent Menu Category'),
        'parent_item_colon' => __('Parent Menu Category:'),
        'edit_item' => __('Edit Menu Category'),
        'update_item' => __('Update Menu Category'),
        'add_new_item' => __('Add New Menu Category'),
        'new_item_name' => __('New Menu Category'),
        'menu_name' => __('Menu Categories'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
    );
    register_taxonomy('menu_category', 'menu', $args);
}

add_action('init', 'create_menu_category', 0);

/**
 * Limit Excerpt Length
 *
 * @param $limit
 * @return array|mixed|string
 */
function excerpt($limit)
{
    $excerpt = explode(' ', get_the_content(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
    return $excerpt;
}

/**
 * Customize Login Form
 */
function diwalirestaurant_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
            width: 140px;
            height: 140px;
            background-size: 140px 140px;
        }
    </style>
<?php }

add_action('login_enqueue_scripts', 'diwalirestaurant_login_logo');

function diwalirestaurant_login_logo_url()
{
    return home_url();
}

add_filter('login_headerurl', 'diwalirestaurant_login_logo_url');

function diwalirestaurant_login_logo_url_title()
{
    return 'Autocare Products UK';
}

add_filter('login_headertitle', 'diwalirestaurant_login_logo_url_title');

/**
 * Custom Image Sizes
 */
add_image_size('page_heading', 1920, 520, true);
add_image_size('img_1920x1426', 1920, 1426, true);
add_image_size('img_1920x1080', 1920, 1080, true);
add_image_size('img_1920x1280', 1920, 1280, true);
add_image_size('img_1920x1275', 1920, 1275, true);
add_image_size('img_1920x800', 1920, 800, true);
add_image_size('img_417x585', 417, 585, true);
add_image_size('img_600x400', 600, 400, true);
add_image_size('img_170x170', 170, 170, true);
add_image_size('img_948x632', 948, 632, true);
add_image_size('img_800x800', 800, 800, true);
add_image_size('img_589x472', 589, 472, true);//Contact Us Page
add_image_size('img_1024x640', 1024, 640, true);
add_image_size('img_12x12', 12, 12, true);
add_image_size('img_520x800', 520, 800, true);
add_image_size('img_58x25', 58, 25, true);
add_image_size('img_900x500', 900, 500, true);


function post_reservation(){
    if ($_POST['first_name'] != '' AND
        $_POST['last_name'] != '' AND
        $_POST['email'] != '' AND
        $_POST['phone'] != '' AND
        $_POST['date'] != '' AND
        $_POST['time'] != '' AND
        $_POST['peoples'] != ''
    ) {

    
        // Get the form fields and remove whitespace.
        $first_name = strip_tags(trim(ucwords($_POST['first_name'])));
        $last_name = strip_tags(trim(ucwords($_POST['last_name'])));
        $name = $first_name . ' ' . $last_name;
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = strip_tags(trim($_POST["phone"]));
        $date = strip_tags(trim($_POST["date"]));
        $time = strip_tags(trim($_POST["time"]));
        $peoples = strip_tags(trim($_POST["peoples"]));
        $message = trim($_POST["message"]);

        $subject = 'New Reservation from ' . $name;

        // Set the recipient email address.
        $recipient = 'booking@diwalirestaurant.com';

        // Build the email content.
        $emailContent = "Name: $name<br>";
        $emailContent .= "Email: $email<br>";
        $emailContent .= "Phone: $phone<br>";
        $emailContent .= "Date: $date<br>";
        $emailContent .= "Time: $time<br>";
        $emailContent .= "Peoples: $peoples<br>";
        $emailContent .= "Message: $message<br><br>";
        $emailContent .= $_SERVER['HTTP_REFERER'] ? 'This form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

        // Build the email headers.
        $emailHeaders = "MIME-Version: 1.0" . "\r\n";
        $emailHeaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $emailHeaders .= "From: $name <$email>";

        // Send the email.
        if (mail($recipient, $subject, $emailContent, $emailHeaders)) {
            $result['success'] = "1";
            $result['msg'] = 'We have <strong>successfully</strong> received your message and will get back to you as soon as possible.';     
            
        } else {
            $result['success'] = "0";
            $result['msg'] = "Reservation form submit failed. Please try again later.";    
        }
    }
    else{
        $result['success'] = "0";
        $result['msg'] = "Please <strong>Fill up</strong> all the Fields and Try Again.";    
    }
   
    $result = json_encode($result);
    echo $result;
    exit;
}
add_action("wp_ajax_post_reservation", "post_reservation");
add_action("wp_ajax_nopriv_post_reservation", "post_reservation");


function post_contact(){

    if ($_POST['name'] != '' AND $_POST['email'] != '' AND
    $_POST['subject'] != '' AND $_POST['message'] != '') {
    
            $name = strip_tags(trim($_POST["name"]));
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            $subject = strip_tags(trim($_POST["subject"]));
            $message = trim($_POST["message"]);

            // Set the recipient email address.
            $recipient = 'info@diwalirestaurant.com';

            // Build the email content.
            $emailContent = "Name: $name<br>";
            $emailContent .= "Email: $email<br>";
            $emailContent .= "Message: $message<br><br>";
            $emailContent .= $_SERVER['HTTP_REFERER'] ? 'This form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';

            // Build the email headers.
            $emailHeaders = "MIME-Version: 1.0" . "\r\n";
            $emailHeaders .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $emailHeaders .= "From: $name <$email>";

            if (mail($recipient, $subject, $emailContent, $emailHeaders)) {
                $result['success'] = "1";
                $result['msg'] = 'We have <strong>successfully</strong> received your Message and will get back to you as soon as possible.';     

               
            } else {
                $result['success'] = "0";
                $result['msg'] = "Oops! Something went wrong and we couldn't send your message.";
            }

    }
    else{
        $result['success'] = "0";
        $result['msg'] = "Please <strong>Fill up</strong> all the Fields and Try Again.";    
    }
   
    $result = json_encode($result);
    echo $result;
    exit;
}
add_action("wp_ajax_post_contact", "post_contact");
add_action("wp_ajax_nopriv_post_contact", "post_contact");