<?php get_header(); ?>
<div id="content">
<?php while (have_posts()): the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
<?php the_tags(); ?>
</div>
<?php the_post_thumbnail(); ?>
<?php wp_link_pages(); ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>
