<?php

echo '<p>Demonstrates a separate, custom interface for adding widgets.</p>';

$params = array(
	'show_add_widgets' => false,
	'num_columns' => 4
);
echo elgg_view_layout('widgets', $params);

?>

<div id="custom_settings_button">
	<span>Customize</span>
</div>
<div id="custom_settings">
	<?php echo elgg_view('widgets-demo/custom_add_panel'); ?>
	<div class="clearfloat"></div>
</div>

<script type="text/javascript">

	$(document).ready(function() {
		$('#custom_settings_button').click(function() {
			$('#custom_settings').slideToggle();
		});
	});

</script>
