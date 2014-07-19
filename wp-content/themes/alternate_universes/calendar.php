<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

/*
Template Name: Calendar
*/

	get_header();
	get_sidebar();
?>
    <script language="javascript" type="text/javascript">
	$(function() {
		$("#tabs").tabs();
	});
    </script>
    <div id="content" class="narrowcolumn">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
     <div class="post" id="post-<?php the_ID(); ?>">
      <h2><?php the_title(); ?></h2>
      <div class="entry">
       <div id="tabs">
        <ul>
         <li><a href="#upcoming_special_events">Upcoming Special Events</a></li>
         <li><a href="#holmes">Holmes Store</a></li>
         <li><a href="#blue-bell">Blue Bell Store</a></li>
         <li><a href="#wilmington">Wilmington Store</a></li>
        </ul>
        <div id="upcoming_special_events">
<iframe src="http://www.google.com/calendar/embed?title=Upcoming%20Special%20Events&amp;showCalendars=0&amp;height=575&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=auwilmington%40comcast.net&amp;color=%23060D5E&amp;ctz=America%2FNew_York" style=" border-width:0 " width="575" height="575" frameborder="0" scrolling="no"></iframe>
        </div>
        <div id="holmes">
<iframe src="http://www.google.com/calendar/embed?title=Holmes%20Store%20Events&amp;showCalendars=0&amp;height=575&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=d6tcai0etpsge44hgka34b8n50%40group.calendar.google.com&amp;color=%232952A3&amp;ctz=America%2FNew_York" style=" border-width:0 " width="575" height="575" frameborder="0" scrolling="no"></iframe>
        </div>
        <div id="blue-bell">
<iframe src="http://www.google.com/calendar/embed?title=Blue%20Bell%20Store%20Events&amp;showCalendars=0&amp;height=575&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=sb0ve1sb7ejf25ggl5abj0qums%40group.calendar.google.com&amp;color=%231B887A&amp;ctz=America%2FNew_York" style=" border-width:0 " width="575" height="575" frameborder="0" scrolling="no"></iframe>
        </div>
        <div id="wilmington">
<iframe src="http://www.google.com/calendar/embed?title=Wilmington%20Store%20Events&amp;showCalendars=0&amp;height=575&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=qguotkpum479qbc0qbndk59ckc%40group.calendar.google.com&amp;color=%2328754E&amp;ctz=America%2FNew_York" style=" border-width:0 " width="575" height="575" frameborder="0" scrolling="no"></iframe>
        </div>
       </div>
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
     </div>
<?php endwhile; endif; ?>
<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
    </div>
<?php get_footer(); ?>