<?php
if (!isset($class)) {
	$class = '';
}
if (!isset($content_width)) {
	$content_width = 900;
}
if (is_singular()) {
	wp_enqueue_script('comment-reply');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"?>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class($class); ?>>
<div class="access">
<?php wp_nav_menu(); ?>
</div>
