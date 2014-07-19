<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
  <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
  <link rel="stylesheet" href="/jquery/css/start/jquery-ui-1.8.2.custom.css" type="text/css" media="screen" />
  <script language="javascript" type="text/javascript" src="/jquery/js/jquery-1.4.2.min.js"></script>
  <script language="javascript" type="text/javascript" src="/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
 </head>
 <body <?php body_class(); ?>>
  <div id="page_content">
   <div id="theme_head">
    <ul>
     <li id="nav_01"><a href="<?php bloginfo('siteurl'); ?>" title="Home">Home</a></li>
     <li id="nav_02"><a href="/about-us/" title="About Us">About Us</a></li>
     <li id="nav_03"><a href="/new-releases/" title="New Releases">New Releases</a></li>
     <li id="nav_04"><a href="/special-events/" title="Special Events">Special Events</a></li>
     <li id="nav_05"><a href="/demos/" title="Demos">Demos</a></li>
     <li id="nav_06"><a href="/calendar/" title="Calendar">Calendar</a></li>
     <li id="nav_07"><a href="/links/" title="Links">Links</a></li>
     <li id="nav_08"><a href="/forums/" title="Forums">Forums</a></li>
     <li id="nav_09"><a href="/store-hours-directions/" title="Store Hours/Directions">Store Hours/Directions</a></li>
     <li id="nav_10"><a href="/contact-us/" title="Contact Us">Contact Us</a></li>
     <li id="nav_11"><a href="<?php bloginfo('siteurl'); ?>" title="Alternate Universes - Collectable gaming cards, miniatures and more!">Alternate Universes</a></li>
    </ul>
   </div>
   <div id="body_container">
    <div id="body_container_top">
     <div id="body_content">