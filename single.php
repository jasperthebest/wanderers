<?php get_header(); 
if (have_posts()){
    the_post();
?>
<div class="topbannersub">
  <div class="coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/detailbg.jpg">
     <div class="container">
        <div class="flexwanderpage detailpage">
           <div>
          <?php
	       	 $parent_id = get_the_ID();
             $category_detail=get_the_category($parent_id);
             foreach($category_detail as $cd){
            ?>
              <span><?php echo $cd->cat_name; ?></span>
          	<?php } ?>
              <h1><?php the_title(); ?></h1>
              <span><?php echo get_the_date('F Y', $post->ID); ?> / by <?php echo get_the_author_meta('display_name', $post->post_author); ?></span>
           </div>
        </div>
     </div>
  </div>
</div>
<div class="container">
  <div class="blogcolumn">
     <div class="postbar">
        <div class="blogdetailcontent">
           <?php the_content(); ?>
           <ul class="shareme">
              <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php echo the_title(); ?>" target="_blank"><img src="<?php echo TEMPLATE_URI; ?>images/fbshare.png"></a></li>
              <li><a href="http://twitter.com/share?url=<?php echo urlencode(the_permalink()); ?>&count=horizontal" target="_blank"><img src="<?php echo TEMPLATE_URI; ?>images/twittershare.png"></a></li>
           </ul>
        </div>
        <div class="nextprev">
            <?php previous_post_link('%link', '<i class="material-icons">chevron_left</i> Prev Post'); ?>
            <?php next_post_link('%link', 'Next Post <i class="material-icons">chevron_right</i>'); ?>
        </div>
     </div>
     <div class="sidebar">
        <?php get_search_form(); ?>
        <div class="recentpost">
           <h3>Recent posts</h3>
            <?php 
             // the query
             $the_query = new WP_Query( array(
                'posts_per_page' => 3,
             ));
             while ( $the_query->have_posts() ) : $the_query->the_post();
              $parent_id = get_the_ID();
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $parent_id ), 'relate_thumb' );
              ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>">
                <div>
                   <span><?php echo get_the_date('F Y', $post->ID); ?> / by <?php echo get_the_author_meta('display_name', $post->post_author); ?></span>
                   <h5><?php the_title(); ?></h5>
                </div>
             </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="categoryside">
           <h3>Categories</h3>
           <ul>
            <?php
            $categories = get_categories();
            foreach($categories as $category) {
            ?>
            <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
            <?php
            }
            ?>
           </ul>
        </div>
     </div>
  </div>
</div>
<?php 
  } else {
?>
<h1>Nothing Found</h1>
<?php
  }
?>
<?php get_footer(); ?>