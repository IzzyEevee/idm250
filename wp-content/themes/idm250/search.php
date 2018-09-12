<?php
$searched_string = $_GET['s'];
get_header(); ?>

  <div class="content">
      <h1>Searching for... "<?php echo $searched_string; ?>"</h1>
        <div class="searchPage">
         <form action="/idm250/">
           <input class="searchPageText" type="text" placeholder="Search..." name="s">
           <button type="submit"><i class="fa fa-search"></i></button>
         </form>
        </div>
      <div class="contain">
      <!-- Fix this code to actually get posts from post page when those are done-->
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <!--article-->
            <div class="cate">
                <h2><?php the_title();?></h2>
                <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail();?></a>
                
            </div>
        <!--/article-->
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p>
            <?php echo 'Sorry, no posts matched your criteria.'; ?>
        </p>
        <?php endif; ?>
      </div>
  </div>

<?php get_footer(); ?>