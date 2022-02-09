<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Social Media Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

    $options[] = array(
        'name' => __('Facebook Link', 'theme-textdomain'),
        'desc' => __('Enter Facebook Link', 'theme-textdomain'),
        'id' => 'facebook_link',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Twitter Link', 'theme-textdomain'),
        'desc' => __('Enter Twitter Link', 'theme-textdomain'),
        'id' => 'twitter_link',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Google Plus Link', 'theme-textdomain'),
        'desc' => __('Enter Google Plus Link', 'theme-textdomain'),
        'id' => 'googleplus_link',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Linkedin Link', 'theme-textdomain'),
        'desc' => __('Enter Linkedin Link', 'theme-textdomain'),
        'id' => 'linkedin_link',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Youtube Link', 'theme-textdomain'),
        'desc' => __('Enter Youtube Link', 'theme-textdomain'),
        'id' => 'youtube_link',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Instagram Link', 'theme-textdomain'),
        'desc' => __('Enter Instagram Link', 'theme-textdomain'),
        'id' => 'instagram_link',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Contact Address', 'theme-textdomain'),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __('Address', 'theme-textdomain'),
        'desc' => __('Enter Contact Address', 'theme-textdomain'),
        'id' => 'address',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Email Address', 'theme-textdomain'),
        'desc' => __('Enter Email Address', 'theme-textdomain'),
        'id' => 'email',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Phone1', 'theme-textdomain'),
        'desc' => __('Enter Phone Number', 'theme-textdomain'),
        'id' => 'phone',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Phone2', 'theme-textdomain'),
        'desc' => __('Enter Phone Number', 'theme-textdomain'),
        'id' => 'phone1',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Fax', 'theme-textdomain'),
        'desc' => __('Enter Fax Number', 'theme-textdomain'),
        'id' => 'fax',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __('Opening Hours', 'theme-textdomain'),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __( 'Lunch', 'theme-textdomain' ),
        'type' => 'info'
    );

    $options[] = array(
        'id' => 'lunch1',
        'type' => 'text'
    );

    $options[] = array(
        'id' => 'lunch2',
        'type' => 'text'
    );

    $options[] = array(
        'id' => 'lunch3',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __( 'Dinner', 'theme-textdomain' ),
        'type' => 'info'
    );

    $options[] = array(
        'id' => 'dinner1',
        'type' => 'text'
    );

    $options[] = array(
        'id' => 'dinner2',
        'type' => 'text'
    );

    $options[] = array(
        'id' => 'dinner3',
        'type' => 'text'
    );

	return $options;
}