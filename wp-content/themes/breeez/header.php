<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package breeez
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="/wp-content/themes/breeez/custom.css">

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'breeez' ); ?></a>

	<header id="masthead" class="site-header">
  <div class="bg-medium">
    <div class="restrictor">
      <div class="top-bar">
        <ul class="top-nav">
          <li class="top-nav__li"><div class="top-nav__txt">About Us</div></li>
          <li class="top-nav__li"><div class="top-nav__txt">Our Process</div></li>
          <li class="top-nav__li"><div class="top-nav__txt">FAQs</div></li>
          <li class="top-nav__li"><div class="top-nav__txt">Testimonials</div></li>
          <li class="top-nav__li"><div class="top-nav__txt">Get in Touch</div></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="spacer"></div>
  <div class="restrictor">
		<div class="site-branding">
			<img src="wp-content/themes/breeez/images/logo.png" class="logo" alt="adtrak Logo"><br>
      Kitchens
		</div><!-- .site-branding -->
    
		<nav id="site-navigation1" class="desktop-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
    <div class="button-wrap">
            <div class="call--right"><span class="accent--low">Call our showroom<br>
              <i class="fa-solid fa-phone i-block menu__phone"></i></span>
              <div class="call__number i-block"><strong>0800 000 0000</strong></div>
            </div>

            <button>Book an Appointment</button>

            
            
          </div>
          <button id="menu-toggle" class="menu-toggle">
          <i class="fa-solid fa-bars"></i>
      </button>
          <nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
  </div>
  <div class="spacer"></div>
	</header><!-- #masthead -->

