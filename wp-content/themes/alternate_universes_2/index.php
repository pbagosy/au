<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
/*
Template Name: Archives
*/
	get_header();
?>
<div id="content">
	<div class="container">
		<div class="row">
			<!-- left penel -->
			<div class="col-lg-9">
				<!-- posts -->
				<div class="posts">
<?php
	if (have_posts()){
		$post = $posts[0]; // Hack. Set $post so that the_date() works.
		while (have_posts()){
			the_post();
			if(is_sticky(get_the_ID())){
?>
			<!-- callout box -->
				<section class="callout-box">
					<h2><?php the_title(); ?></h2>
					<section class="category-links row">
						<div class="col-lg-8">
							<a href="#">Store Info</a> |
							<a href="#">Store Location</a>
						</div>
						<div class="col-lg-4 text-right"><?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>
					</section>
<?php the_content() ?>
				</section>
				<!-- /callout box -->
<?php
			}else{
?>
					<!-- post -->
					<section class="post">
						<h2><?php the_title(); ?></h2>
						<section class="category-links row">
							<div class="col-lg-8">
<?php the_category(' | ') ?>
							</div>
							<div class="col-lg-4 text-right"><?php if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>
						</section>
<?php the_content() ?>
					</section>
					<!-- /post -->

<?php
			}
		}
	}
?>
					<div class="navigation clearfix">
						<span class="fl">&laquo; <a href="#">Older Entries</a></span>
						<span class="fr"><a href="#">Newer Entries</a> &raquo;</span>
					</div>

				</div>
				<!-- /posts -->
			</div>
			<!-- /left panel -->

			<!-- right panel -->
			<div class="col-lg-3">
<?php 	get_sidebar(); ?>
				</div>
			</div>
			<!-- /right panel -->
		</div>
	</div>
</div>
<!-- /contents -->
<?php get_footer(); ?>
