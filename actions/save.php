<?php

$widgets = get_input('widgets');
$context = get_input('widget_context');

$current_widgets = elgg_get_widgets(get_loggedin_userid(), $context);

foreach ($current_widgets as $widget_cols) {
	foreach ($widget_cols as $widget) {
		if (array_key_exists($widget->handler, $widgets)) {
			unset($widgets[$widget->handler]);
		} else {
			$widget->delete();
		}
	}
}

foreach ($widgets as $handler => $state) {
	$guid = elgg_create_widget(get_loggedin_userid(), $handler, $context);
	if ($guid) {
		$widget = get_entity($guid);
		$widget->move(1, 0);
	}
}

system_message("Widgets saved");
forward(REFERER);