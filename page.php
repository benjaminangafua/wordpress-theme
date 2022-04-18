<?php 

get_header();
?>
 <div class="site-banner">
      <div class="banner-content  container-display">
        <h1><?php the_title(); ?>!</h1>
      </div>
    </div>
    </div>
<div>
    <?php 
    while(have_posts()){
        the_post();?>

    <div class="main-pg-content  container-display">
    <h2>This is the <?php the_title(); ?> page.</h2>
      <div>
        <?php the_excerpt();?>
        
      </div>
    </div>
    <?php }; ?>

  </div>

    <?php get_footer();?>