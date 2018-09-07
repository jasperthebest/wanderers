<?php get_header(); ?>
<div class="topbannersub">
  <div class="coverBG" data-bg="<?php echo TEMPLATE_URI; ?>images/landingbg.jpg">
     <div class="container">
        <div class="flexwanderpage landingpage">
           <div>
              <h1>Check out our new range of beers</h1>
              <p>Brewing is our life, beer is our water so don’t waste time drinking all kind of other things which won’t make your life better.</p>
           </div>
        </div>
     </div>
  </div>
</div>
<div class="container">
  <div class="blogcolumn">
     <div class="postbar">
     	<h4>Search: <?php the_search_query(); ?></h4>
        <?php
        if (have_posts()){
        	while (have_posts()) {
	       	 the_post();
	         $parent_id = get_the_ID();
	         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $parent_id ), 'home_thumb' );
        ?>
        <div class="singlepost">
           <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>">
            <?php
            $category_detail=get_the_category($parent_id);
            foreach($category_detail as $cd){
            ?>
            <a href="<?php echo get_category_link($cd->cat_ID); ?>"><?php echo $cd->cat_name; ?></a>
            <?php
            }
            ?>
           <h2><?php echo the_title(); ?></h2>
           <span><?php echo get_the_date('F Y', $post->ID); ?> / by <?php echo get_the_author_meta('display_name', $post->post_author); ?></span>
           <p><?php echo excerpt(50); ?></p>
           <div class="flexpostnav">
              <a href="<?php echo get_permalink(); ?>">Read more...</a>
              <ul class="shareme">
                 <li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_category_link($cd->cat_ID); ?>&t=<?php echo the_title(); ?>" target="_blank"><img src="<?php echo TEMPLATE_URI; ?>images/fbshare.png"></a></li>
                 <li><a href="http://twitter.com/share?url=<?php echo urlencode(get_category_link($cd->cat_ID)); ?>&count=horizontal" target="_blank"><img src="<?php echo TEMPLATE_URI; ?>images/twittershare.png"></a></li>
              </ul>
           </div>
        </div>
        <?php
        	}
    	}
        /* endwhile;
        endif; */
        ?>
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
<?php get_footer(); ?>