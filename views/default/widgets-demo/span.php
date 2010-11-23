<?php

$owner = elgg_get_page_owner();
$context = elgg_get_context();
elgg_push_context('widgets');

$widgets = elgg_get_widgets($owner->guid, $context);

$column_widgets = $widgets[0];

$box = "<div class=\"widget_column\" id=\"widget_col_0\">";
if (is_array($column_widgets) && sizeof($column_widgets) > 0) {
	foreach ($column_widgets as $widget) {
		$box .= elgg_view_entity($widget);
	}
}
$box .= '</div>';

elgg_pop_context();

echo '<p>Three column layout with another spanning the top. Trying to force columns
	to start with same height which causes problems with the spanning column.</p>';

$params = array(
	'box' => $box,
	'num_columns' => 3
);
echo elgg_view_layout('widgets', $params);
