<?php
$images_dir = elgg_get_site_url() . 'mod/widgets-demo/images/';
?>

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
