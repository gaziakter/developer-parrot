<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Developer_Parrot
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" <?php body_class();  ?>>
<div id="page" class="site">

	<section class="header-area">
  <div class="container">
    <div class="row">
      <div class="col-6 col-sm-6 col-md-3 col-xl-3">
        <div class="logo-area">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/logo.png" alt="developer parrot"></a>
        </div> <!-- logo-area -->
      </div> <!-- col-xl-3 -->
      <div class="col-6 col-sm-6 col-md-7 col-xl-7">

      <div class="mobile-menu-area">
        <div id="mySidepanel" class="sidepanel">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fas fa-times"></i></a>
       <nav class="mobile-menu navbar navbar-expand-sm navbar-dark">
            <ul class="navbar-nav">
              <li class="nav-item"><a  class="nav-link" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
              <li class="nav-item" ><a class="nav-link" href="#service">Our Service</a></li>
              <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
            </ul>
          </nav> <!-- mobile-menu -->
    </div>
<button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button>  
</div><!-- mobile-menu-area -->


          <div class="header-left-content">
          <nav class="main-menu navbar navbar-expand-sm navbar-dark float-right">
            <ul class="navbar-nav">
              <li class="nav-item"><a  class="nav-link" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
              <li class="nav-item" ><a class="nav-link" href="#service">Our Service</a></li>
              <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
            </ul>
          </nav> <!-- main-menu -->
        </div> 

         </div> <!-- col-xl-7 -->
         <div class="col-xl-2 col-md-2">
        <div class="hire-us-button">
          <a href="https://www.freelancer.com/hireme/DeveloperParrot" target="blank"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/assets/img/freelance_logo.png ">Hire Us</a>
        </div> <!-- hire-us-button -->
      </div> <!-- col-xl-2 -->
    </div> <!-- row -->
  </div> <!-- container -->
</section> <!-- header-area -->
