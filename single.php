<?php 

get_header();
?>    
  <div class="site-banner  container-display">
    <div class="banner-content">
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
  </div>
<div class=" container-display flex">
  <?php 
  while(have_posts()){
      the_post();?>
    <h2>This is the <?php the_title(); ?> page.</h2>
    <div class="post-detail"><span>Posted by <?php the_author_posts_link(); ?> on <?php the_time('j.n.Y'); ?> in <?php echo get_the_category_list(', '); ?> </span>
</div>
  <div>
    <div>
      <?php the_excerpt();?>
      <p class="cont-reading"><button class="main-btn"><a href="<? echo site_url(); ?>">All Posts</a></button></p>
    </div>
  </div>
  <br>
  <?php }; ?>

</div>

<?php
get_footer();
?>