<?php
/*
 * Template Name: Single
 *
 * This template will display all of my portfolio pieces
 *
 * @link https://codex.wordpress.org/Class_Reference/WP_Query
*/
get_header(); ?>
<!--blog body-->
<div id="Blog-post">
  <!-- banner Page
    ==========================================-->
  <div class="content">
      <h1><?php the_title();?></h1>
      <div class="contain">
      <!-- Fix this code to actually get posts from post page when those are done-->
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
  </div>
</div>
<?php get_footer(); ?>