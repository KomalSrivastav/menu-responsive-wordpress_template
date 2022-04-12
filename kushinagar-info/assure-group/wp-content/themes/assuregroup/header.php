<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php bloginfo('title');?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/assets/img/ickon.jpg">

		<!-- CSS here -->
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/flaticon.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slicknav.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/animate.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/magnific-popup.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/themify-icons.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/slick.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/nice-select.css">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
			<link rel="stylesheet" href=<?php echo get_template_directory_uri();?>"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
   <?php wp_head();?>
   <body>


    <!-- Preloader Start -->
    <div class="top-bar">
    <div class="container">

    <div class="row">
    <div class="col-xl-6">
    <p><i class="ti-email"></i><a href="#"> contact@assureinfra.com</a></p>
    <p><i class="ti-tablet"></i>+91- 8233 359 128</p>
    </div>
		
<div class="col-xl-6">
<div class="top-social">
<a href="#"><i class="fa fa-facebook-f"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
</div>


    </div>
    </div>
    </div>  
    </div>
                                
<a href="<?php bloginfo('url')?>
<?php 
 $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
?>
</a>

</nav>
<?php
  if(is_front_page()){
  echo do_shortcode('[smartslider3 slider="29"]');
  
  }
  
?>

<header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
            <div class="main-header">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="<?php bloginfo('url')?>">
								<?php 
								  $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}
								?>
								</a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation"> 
                                    <li class="for-mobil-country"><a href="#"> <i class="fas fa-globe"> </i> Country</a>
                                     <ul class="submenu">
                                     <li> <a href="india.html">India</a></li>   
                                    <li><a href="srilanka.html">Srilanka</a></li>
                                    <li><a href="philippines.html">Philippines</a> </li>
                                    <li><a href="nepal.html">Nepal</a> </li>
                                    <li><a href="thailand.html">Thailand</a> </li>
                                </ul> 
                                 </li>
                                        <li>
                                        <a href="company.html" class="nav-active"> Company</a>
                                     <ul class="submenu">
                                                <li><a href="company.html">About Us</a></li>
                                                <li><a href="company.html">Our Vision & Mission</a></li>
                                                <li><a href="company.html">Our Principle</a></li>
                                                <li><a href="company.html">CSR</a></li>
                                                <li><a href="bord-of-director.html">Board of Directors</a></li>
                                                <li><a href="laedership.html">Leadership Team</a></li>
                                            </ul>

                                        </li>
                                         <li><a href="#">business</a>
                                            <ul class="submenu">
                                                <li><a href="telecom.html">Telecom</a></li>
                                                <li><a href="mining.html">Mining</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="client.html">Client</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>      
                                        <li><a href="policy.html">Policy & Certifications </a></li>
                                         <li class="for-mobil-nav"> <a href="contact.html">Contact</a> </li>
                                         <li class="for-mobil-nav"><a href="careers.html">Career</a> </li>
                                        <li class="for-mobil-nav-h"><a href="contact.html">Contact</a>
                                        <ul class="submenu">
                                         <li><a href="careers.html">Career</a></li>    
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
   <div class="col-xl-2 col-lg-2 col-md-3">
   <div class="header-right-btn f-right d-none d-lg-block">                                
                              <div class="dropdown">
  <span> Country <i class="fas fa-globe"> </i></span>
  <div class="dropdown-content">
 <a href="india.html">India</a>
 <a href="mynmar.html">Myanmar</a>
 <a href="srilanka.html">Srilanka</a>
 <a href="philippines.html">Philippines</a>
 <a href="nepal.html">Nepal</a>
 <a href="thailand.html">Thailand</a>
  </div>
</div>
 </div>
    <div class="col-12">
    <div class="mobile_menu d-block d-lg-none">
    <div class="only-mobile">
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </header>