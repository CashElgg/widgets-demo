<?php
$images_dir = elgg_get_site_url() . 'mod/widgets-demo/images/';
?>

#elgg_header_contents h1 {
	width: 400px;
}

#demo_menu {
	position: relative;
	left: 400px;
	top: -40px;
	z-index: 1000;
}

#demo_menu li {
	float: left;
	list-style: none;
	margin-right: 15px;
}

#demo_menu li a {
	color: white;
	font-size: 140%;
}

#elgg_sidebar h3 {
	border: none;
	padding: 0 45px 0 20px;
	margin: 0;
}

#elgg_sidebar .widgets_add_panel li {
	width: 150px;
}

#widget_col_0 {
	width: 100%;
}

#custom_settings_button {
	border-bottom: 1px solid #dedede;
}

#custom_settings_button span {
	border: 1px solid #dedede;
	border-bottom: none;
	padding: 5px;
	padding-bottom: 0;
}

#custom_settings {
	background: #393a3a;
	padding: 10px;
	display: none;
}

#custom_settings li {
	width: 200px;
	list-style: none;
	float: left;
	margin: 2px 10px 2px 0;
	background: #fafafa;
}

#custom_settings label {
	line-height: 20px;
}

#custom_settings p {
	clear: both;
	padding-top: 20px;
}

#custom_settings .submit_button {
	margin: 10px auto;
	display: block;
}

/*****************************************
Clock   http://css-tricks.com/css3-clock/
******************************************/
#clock {
	position: relative;
	width: 200px;
	height: 200px;
	margin: 20px auto 0 auto;
	background: url(<?php echo $images_dir; ?>clockface.jpg);
	list-style: none;
	margin: 0 auto;
	padding: 0;
}

#sec, #min, #hour {
	position: absolute;
	width: 10px;
	height: 200px;
	top: 0px;
	left: 90px;
}

#sec {
	background: url(<?php echo $images_dir; ?>sechand.png);
	z-index: 3;
}

#min {
	background: url(<?php echo $images_dir; ?>minhand.png);
	z-index: 2;
}

#hour {
	background: url(<?php echo $images_dir; ?>hourhand.png);
	z-index: 1;
}
