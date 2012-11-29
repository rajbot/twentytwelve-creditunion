<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7 | IE 8]>
<html class="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
     <header id="masthead" class="site-header" role="banner">
     	     <hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			    			  <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
       </hgroup>
     	     <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                         <tr>
                                           <td><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                             <?php $header_image = get_header_image();
							      if ( ! empty( $header_image ) ) : ?>
                                           &nbsp; &nbsp;<img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
                                             <?php endif; ?>
                                           </a></td>
                                           <td valign="top"><nav id="site-navigation2" class="main-navigation" role="navigation"></nav></td>
                                           <td valign="top"></td>
                                         </tr>
                                       </table>
							      	   <a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
							      	   <nav id="site-navigation" class="main-navigation" role="navigation">

															      				<table width="79%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                                  <tr>
                                                                                    <td bgcolor="#000000"><span class="menu-toggle">
                                                                                      <?php _e( 'Menu', 'twentytwelve' ); ?>
                                                                                    </span></td>
                                                                                  </tr>
                                                                                </table>
															      				<div class="skip-link assistive-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>">
															      				  <?php _e( 'Skip to content', 'twentytwelve' ); ?>
															      				</a></a></div>
																			     		      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
       </nav><!-- #site-navigation -->
</header>
<!-- #masthead -->

