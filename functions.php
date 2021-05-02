<?php

define('DIR', get_stylesheet_directory_uri());

add_action('login_head', function() { ?>
	<style>
		
		#login h1 a {
			background-image: url('<?= DIR ?>/images/Group 1.png');
		}

	</style>
<?php }); 

add_action('init', function() {
	register_post_type('news', [
		"label" => "News",
		"supports" => ['title', 'editor', 'thumbnail'],
		"public" => true,
		"taxonomies" => ['category']
	]);	

	register_post_type('events', [
		"label" => "Events",
		"supports" => ['title', 'editor', 'thumbnail'],
		"public" => true,
		"taxonomies" => ['category']
	]);	
});

add_action('admin_menu', function() {
	remove_menu_page('edit.php');
});

add_action('wp_dashboard_setup', function() {
	remove_meta_box('dashboard_site_health', 'dashboard', 'side');
	remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'side');
	remove_meta_box('dashboard_primary', 'dashboard', 'side');
});

add_action('excerpt_length', function() {
	return rand(10,15);
});

?>