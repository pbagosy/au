<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <div class="navigation">
       <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
       <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
      </div>
<?php while (have_posts()) : the_post(); ?>
      <div <?php post_class() ?>>
       <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
       <small><!--By <?php the_author() ?> - --><?php the_time('F jS, Y') ?></small><br /><br />
       <div class="entry">
<?php the_content() ?>
       </div>
       <p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('', '1 Comment &#187;', '% Comments &#187;'); ?></p>
      </div>
<?php endwhile; ?>
      <div class="navigation">
       <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
       <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
      </div>
<?php endif; ?>
     </div>