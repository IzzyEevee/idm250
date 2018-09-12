<?php
/*
 * Template Name: Post Listing
 *
 * This template will display all of my portfolio pieces
 *
 * @link https://codex.wordpress.org/Class_Reference/WP_Query
*/
get_header(); ?>
  <div class="content">
      <h1>Post Listing</h1>
      <div class="contain">
        <?php if (have_posts()): ?>
            <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
                <?php the_content();?>
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
            </article>
        <?php else: ?>
            <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
      </div>
  </div>
<?php get_footer(); ?>
