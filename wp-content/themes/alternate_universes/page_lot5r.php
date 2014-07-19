<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Page - LOT5R
*/

	$page_cat_id = 10;

	get_header();
	get_sidebar();

	print("     <div id=\"content\" class=\"narrowcolumn\">\n");
	if (have_posts()) : while (have_posts()) : the_post();
?>
     <div class="post" id="post-<?php the_ID(); ?>">
      <h2><?php the_title(); ?></h2>
      <div class="entry">
<?
		the_content('<p class="serif">Read the rest of this page &raquo;</p>');
		wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
?>
      </div>
     </div>
<?
	endwhile; endif;
	edit_post_link("Edit this entry.", "<p>", "</p>");
	query_posts("cat=".$page_cat_id);
	include_once("page_include.php");
	get_footer();
?>
