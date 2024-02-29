<?php

function ea_acf_options_page(){
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
	          'post_id' => 'theme-general-settings',
            'menu_slug'  => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false,
						'position' => '2',
        ));
    }
}

add_action('init', 'ea_acf_options_page');
function enable_acf_rest_api($acf_json) {
    $acf_json['acf/rest_api'] = true;
    return $acf_json;
}

add_filter('acf/settings/load_json', 'enable_acf_rest_api');
