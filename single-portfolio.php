<?php get_header(); ?>


<section class="single-main">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-xl-9">
        <div class="single-main-content">
              <div class="row">
              	
                       <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' =>1,
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>





                <div class="col-lg-6 col-xl-6">
                  <div class="single-image">
                   <?php the_post_thumbnail('portfolio-img'); ?>
                  </div><!-- single-image -->
              </div><!-- col-xl-6 -->
              <div class="col-lg-6 col-xl-6">
                <div class="single-driscription">
                  <h2><?php the_title(); ?></h2>
                  <?php the_excerpt(); ?>
                  <a href="<?php echo $mobile; ?>" target="_blank">Live Preview</a>
                </div><!-- single-driscription -->
              </div><!-- col-xl-6 -->
              </div><!-- row -->

              <div class="row">
                <div class="col-xl-12">
                  <div class="single-content-feature">
                    <?php the_content(); ?>
                  </div>

  	          <?php }
                    } 

                    wp_reset_postdata();
                    ?>



                  <div class="related-website">
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="related-title">
                          <h2>Related Website</h2>
                        </div>
                      </div> <!-- col-xl-12 -->
                    </div><!-- row -->
                   <div class="row">

<!--Start Related Posts-->
<?php

// Get a list of the current post's categories
global $post;
$categories = get_the_category( $post->ID );
$catidlist = '';
foreach( $categories as $category) {
    $catidlist .= $category->cat_ID . ",";
}


// Build our basic custom query arguments
$custom_query_args = array( 
  'post_type' => 'portfolio',
  'posts_per_page' => 6, // Number of related posts to display
  'post__not_in' => array($post->ID), // Ensure that the current post is not displayed
  'orderby' => 'rand', // Randomize the results
  'cat' => $catidlist, // Select posts in the same categories as the current post
);

// Initiate the custom query
$custom_query = new WP_Query( $custom_query_args );

// Run the loop and output data for the results
if ( $custom_query->have_posts() ) : ?>
  <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

  <div class="col-md-6 col-lg-4 col-xl-4">
   <a href="<?php the_permalink(); ?>">
    <div class="portfolio-item">
    <?php the_post_thumbnail('portfolio-img'); ?>
     <div class="port-overlay">
    <div class="por-text">Preview</div>
    </div> <!-- port-overlay -->
    </div> <!-- portfolio-item -->
    </a>
  </div> <!-- col-xl-4 -->    

  <?php endwhile; ?>
<?php else : ?>
    <p>Sorry, no related articles to display.</p>
<?php endif;
// Reset postdata
wp_reset_postdata();
?>
<!--End Related Posts-->



                    </div> <!-- row -->
                  </div><!-- related-website-->
                </div> <!-- col-xl-12 -->
              </div> <!-- row -->
        </div> <!-- single-main-content -->
      </div><!-- col-xl-9 -->
      <div class="col-md-3 col-xl-3">
        <div class="single-sidebar">
        <div class="sidebar-title">
          <h2>More Website</h2>
        </div> <!--sidebar-title -->
         <?php
              $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => 5,
                            'orderby' => 'rand'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>



        <div class="single-sidebar-content">
          <a href="<?php the_permalink(); ?>">
            <div class="portfolio-item">
              <?php the_post_thumbnail('portfolio-img'); ?>
            <div class="port-overlay">
            <div class="por-text">Preview</div>
            </div> <!-- port-overlay -->
            </div> <!-- portfolio-item -->
          </a>
        </div> <!-- single-sidebar-content --> 

               <?php }
                    } 

                    wp_reset_postdata();
                    ?>

        </div> <!-- single-sidebar -->
      </div> <!-- col-xl-4 -->
    </div> <!-- row -->
  </div> <!-- container -->
</section> <!-- single-main -->




<?php get_footer(); ?>