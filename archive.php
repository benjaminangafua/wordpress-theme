<?php 

get_header();
?>    
  <div class="site-banner">
    <div class="banner-content container-display">
      <h1>Welcome To Nakei Ben!</h1>
      <h2>We&rsquo;ll have subtitle here.</h2>
    </div>
  </div>
  </div>
<div class="container-display flex">
  <?php 
  while(have_posts()){
      the_post();?>

  <div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <div class="post-detail"><span>Posted by <?php the_author_posts_link(); ?> on <?php the_time('j.n.Y'); ?> </span>
</div>
    <div>
      <?php the_excerpt();?>
      <p class="cont-reading"><button class="main-btn"><a href="<? the_permalink(); ?>">Continue Reading &raquo;</a></button></p>
    </div>
  </div>
  <br>
  <?php }; ?>

</div>
<!-- 

site header
page-banner

full width
bottom banner
footer
-->

<?php
get_footer();
?>