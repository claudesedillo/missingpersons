<?php
	function add_theme_scripts_styles() {
		global $post;

		if( is_page() || is_single() )
		{
			switch($post->post_name) // Post/Page slug used, not the Title
			{
				case '1-home':
					wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('jquery'), '', false);
					wp_enqueue_style( 'home.css', get_template_directory_uri() . '/css/home.css');
					break;
                case '3-browse-cases-with-pictures':
                    wp_enqueue_script('browseCase.js', get_template_directory_uri() . '/js/browseCase.js', array('jquery'), '', false);
                    break;
				case '7-submit-report':
					wp_enqueue_script('submitReport.js', get_template_directory_uri() . '/js/submitReport.js', array('jquery'), '', false);
					break;
                case '5-specific-case':
                    wp_enqueue_script('specific-case', get_template_directory_uri() . '/js/sc.js', array('jquery'), '', false);
                    wp_enqueue_style( '5.css', get_template_directory_uri() . '/css/5.css' );
                    break;
				case 'some-post':
					wp_enqueue_script('somepost', get_template_directory_uri() . '/js/somepost.js', array('jquery'), '1.6', true);
					break;
			}
		} 
	}

	add_action('wp_enqueue_scripts', 'add_theme_scripts_styles');
    register_nav_menus(array(
        'nav' => __('NavBar')
    ));
?>