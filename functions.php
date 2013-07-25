<?php

function init() {
	add_editor_style('custom-editor-style.css');
}

add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
if (false)
	register_sidebar();
add_action('init', 'init');
?>
