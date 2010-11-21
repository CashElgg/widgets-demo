<?php

elgg_register_event_handler('init', 'system', 'widgets_demo_init');

function widgets_demo_init() {
	elgg_extend_view('css', 'widgets-demo/css');

	elgg_register_widget_type('clock', 'Clock', 'A clock widget', 'all');
}
