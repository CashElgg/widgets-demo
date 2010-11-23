<?php


$widgets = elgg_get_widgets(get_loggedin_userid(), elgg_get_context());
$widget_types = elgg_get_widget_types(elgg_get_context());

$current_handlers = array();
foreach ($widgets as $column_widgets) {
	foreach ($column_widgets as $widget) {
		$current_handlers[] = $widget->handler;
	}
}

?>
<form method="post" action="<?php echo elgg_get_site_url(); ?>action/demo/save">
	<ul>
<?php
		foreach ($widget_types as $handler => $widget_type) {
			echo "<li>";
			$params = array(
				'name' => "widgets[$handler]",
				'value' => 1,
				'default' => false
			);
			if (in_array($handler, $current_handlers)) {
				$params['checked'] = 'checked';
			}
			echo elgg_view('input/checkbox', $params);
			echo "<label>$widget_type->name</label>";
			echo "</li>";
		}
?>
	</ul>
<?php
	$params = array(
		'internalname' => 'widget_context',
		'value' => elgg_get_context()
	);
	echo elgg_view('input/hidden', $params);

	echo '<p>';
	echo elgg_view('input/submit', array('value' => 'Save'));
	echo '</p>';
	echo elgg_view('input/securitytoken');
?>
</form>
