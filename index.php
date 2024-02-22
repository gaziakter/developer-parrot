<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Developer_Parrot
 */

get_header();
?>



<section class="top_header" id="home">
  <div class="container">
    <div class="row">
      <div class="col-12 col-xl-6 offset-xl-3">
        <div class="header_logo">
          <h1>Welcome to<img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/logo_white.png"> </h1>
        </div> <!-- header_logo -->
      </div> <!-- col-xl-6 offset-xl-3 -->
    </div> <!-- row -->
  </div> <!-- container -->
</section> <!-- top_header -->



<section class="about_us" id="about">
  <div class="container">
               <div class="row">
                <div class="col-lg-6 col-xl-6">
                    <div class="hero_image">
                    <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/web_banner.png">
                  </div> <!-- hero_image -->
                    </div>
              <div class="col-lg-6 col-xl-6">
                <div class="intro-area">
                  <h2>What we are?</h2>
                  <p>  <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/icon.png">  Developer Parrot is a  experienced web designer and developer team who has been working for a long period of five years in web developing sector. The Developer Parrot team always strives to provide you the best service. We primary focus is to ensure that customers succeed in their goals. Our success measurement criteria is based on  customer's.  We believe that in order to understand customer's business we must partner with them. As partners, We exposed to the same issues our customers are faced with. This partnership throttles us into a commanding position to lay out a plan which addresses our customer's concerns and puts them on track for getting increased productivity while saving cost. </p>
                </div> <!-- intro-area  -->
              </div><!-- col-xl-6 -->
            </div>
            <div class="row">
              <div class="col-xl-12">
                 <div class="padding-top intro-area">
                  <h2>Below is an introduction to our great members :</h2>
                </div> <!-- intro-area  -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="member-intro">
                  <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/akter.jpg">
                  <h2>Akter Hussain</h2>
                  <h3>Web Developer</h3>
                  <p>An Exprience Web developer Expert in PHP, WordPress, SQL & MySQL</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="member-intro">
                  <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/sumon.jpg">
                  <h2>Shah Sumon</h2>
                  <h3>Web Developer</h3>
                  <p>An Exprience Web developer Expert in PHP, WordPress, SQL & MySQL</p>
                </div>
              </div>
                <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="member-intro">
                  <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/tuhin.jpg">
                  <h2>Nistobdo Tuhin</h2>
                  <h3>Web Developer</h3>
                  <p>An Exprience Web developer Expert in HTML5, CSS3, javaScript & jQuery</p>
                </div>
              </div>
                   <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="member-intro">
                  <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/rohan.jpg">
                  <h2>AB Rohan</h2>
                  <h3>Web Developer</h3>
                  <p> An Exprience Web developerExpert in HTML5, CSS3, javaScript & jQuery</p>
                </div>
              </div>
            </div><!-- row -->
  </div> <!-- container -->
</section> <!-- about_us -->


<section class="hero_area" id="service">
  <div class="container">
    <div class="row">
         <div class="col-12 col-md-6 col-xl-6">
          <div class="hero_image padding-cus">
            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/web_banner.png">
          </div> <!-- hero_image -->
        </div> <!-- col-xl-6 -->

          <div class="col-12 col-md-6 col-xl-6">
            <div class="hero_sevcice">
              <ul>
                <li><i class="fas fa-angle-double-right"></i> Responsive Website Design</li>
                <li><i class="fas fa-angle-double-right"></i> HTML5/CSS3 Template Design</li>
                <li><i class="fas fa-angle-double-right"></i> WordPress Template Development</li>
                <li><i class="fas fa-angle-double-right"></i> jQuerdy Plugin Development</li>
                <li><i class="fas fa-angle-double-right"></i> WordPress Plugin Development</li>
                <li><i class="fas fa-angle-double-right"></i> Website Theme Development</li>
                <li><i class="fas fa-angle-double-right"></i> Redesign Website and Theme</li>
                <li><i class="fas fa-angle-double-right"></i> Wordpress Theme Customizations</li>
              </ul>
            </div> <!-- hero_sevcice -->
          </div> <!-- col-xl-6 -->

    </div> <!-- row -->
  </div> <!-- container -->
</section> <!-- hero_area -->


<section class="portfolio_section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="tab">
              <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'all_website')">All Website</button>
              <button class="tablinks" onclick="openCity(event, 'corporate')">Corporate/ Business</button>
              <button class="tablinks" onclick="openCity(event, 'newspaper')">Newspaper/ Magazine</button>
              <button class="tablinks" onclick="openCity(event, 'eCommerce')">eCommerce/ Online Store</button>
              <button class="tablinks" onclick="openCity(event, 'education')">Education/ School/ Univercity</button>
              <button class="tablinks" onclick="openCity(event, 'recipe')">Recipe/ Food</button>
              <button class="tablinks" onclick="openCity(event, 'personal')">Personal</button>
               <button class="tablinks" onclick="openCity(event, 'blog')">Blog</button>
        </div>
      </div> <!-- col-xl-12 -->
    </div><!-- row -->

    <div class="row">
      <div class="col-xl-12">

        <div id="all_website" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->



        <div id="corporate" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'portfolio_category' => 'corporate'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->




        <div id="newspaper" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'portfolio_category' => 'newspaper'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->



        <div id="eCommerce" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'portfolio_category' => 'ecommerce'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->



        <div id="education" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'portfolio_category' => 'education'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->


        <div id="recipe" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'portfolio_category' => 'recipe'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->



        <div id="personal" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'portfolio_category' => 'personal'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->


        <div id="blog" class="tabcontent ">
           <div class="row">
               <?php
                       $ebit_post = new WP_query(array(
                            'post_type' => 'portfolio',
                            'posts_per_page' => -1,
                            'portfolio_category' => 'blog'
                       ));

                     if ($ebit_post->have_posts()) {
                        while ($ebit_post->have_posts()) {
                           $ebit_post->the_post(); 
                           
                           // For custom fields
                           $mobile = get_post_meta(get_the_ID(), 'mobile_np', true);
                           ?>

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
                   <?php }
                    } 

                    wp_reset_postdata();
                    ?>


          </div> <!-- row -->
        </div> <!-- tabcontent -->






      </div> <!-- col-xl-12 -->
    </div> <!-- row -->

  </div> <!-- container -->
</section> <!-- portfolio_section-->







<?php 
get_footer();
?>