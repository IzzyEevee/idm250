<?php
/*
Template Name: with Sidebar
*/

get_header(); ?>
<!--blog body-->
<div id="Blog-post">
  <!-- banner Page
    ==========================================-->
  <div class="content">
    <div class="mainContent">
      <?php if (have_posts()): ?>
          <article class="post">
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          </article>
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
    </div>
    <div class="sideBar">
         <?php get_sidebar();?>
     </div>
  </div>
</div>
<?php get_footer(); ?>
