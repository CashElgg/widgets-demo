<?php

elgg_register_event_handler('init', 'system', 'widgets_demo_init');

function widgets_demo_init() {
	global $CONFIG;

	elgg_extend_view('css', 'widgets-demo/css');

	register_page_handler('demo', 'widgets_demo_page_handler');

	register_action('demo/save', false, $CONFIG->pluginspath . 'widgets-demo/actions/save.php');

	elgg_register_widget_type('clock', 'Clock', 'A clock widget', 'all');
}

function widgets_demo_page_handler($page) {

	elgg_set_context($page[0]);
	elgg_set_page_owner_guid(elgg_get_logged_in_user_guid());

	switch ($page[0]) {
		case 'sidebar':
			$title = "Sidebar demo";
			$sidebar = elgg_view('widgets-demo/sidebar');
			$content = elgg_view_title($title);
			$content .= '<p>Add widgets to your sidebar</p>';
			$vars = array(
				'sidebar' => $sidebar,
				'content' => $content
			);
			$body = elgg_view_layout("one_sidebar", $vars);
			break;
		case 'span':
			$title = "Spanning Columns";
			$content = elgg_view_title($title);
			$content .= elgg_view('widgets-demo/span');
			$vars = array(
				'content' => $content
			);
			$body = elgg_view_layout("one_column", $vars);
			break;
		case 'settings':
			$title = "Custom settings";
			$content = elgg_view_title($title);
			$content .= elgg_view('widgets-demo/settings');
			$vars = array(
				'content' => $content
			);
			$body = elgg_view_layout("one_column", $vars);
			break;
	}

	echo elgg_view_page($title, $body);
}
