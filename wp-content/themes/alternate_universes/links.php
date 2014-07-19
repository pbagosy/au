<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Links
*/

	get_header();
	get_sidebar();
?>
    <div id="content" class="narrowcolumn">
     <h2>Links:</h2>
     <ul>
<?php wp_list_bookmarks(); ?>
     </ul>
    </div>
<?php get_footer(); ?>
