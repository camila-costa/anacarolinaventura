<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeautyTemple
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Author: Camila Costa -->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<!-- end -->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 			
	$social_links_fb = get_theme_mod( 'beautytemple_social_links_fb_option', '' );
	$social_links_tw = get_theme_mod( 'beautytemple_social_links_tw_option', '' );
	$social_links_gplus =  get_theme_mod( 'beautytemple_social_links_gplus_option', '' );
	$social_links_instagram = get_theme_mod( 'beautytemple_social_links_instagram_option', '' );
	$social_links_github = get_theme_mod( 'beautytemple_social_links_github_option', '' );
	$social_links_behance = get_theme_mod( 'beautytemple_social_links_behance_option', '' );
?>
<div id="page" class="site">
	<header id="masthead" class="site-header" style="background-image: url('<?php header_image(); ?>');" role="banner">
		<div class="site-branding row">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>
				<a href="/"><img src="/personalizado/img/logo.jpg" width="220" height="80" alt="Ana Carolina Ventura" id="imgpos" /></a>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
	
	<!-- container to normalize fixed navigation behavior when scrolling -->
	<div class="navcontain">
		<nav class="main-navigation navbar" gumby-fixed="top" id="site-navigation" role="navigation">
			<div class="row">
				<a class="toggle" gumby-trigger="#site-navigation > .row > ul" href="#"><i class="icon-menu"></i></a>
				<div class="logo"><a href="/"><img src="/personalizado/img/logo.jpg" width="20" height="20" alt="Ana Carolina Ventura" /></a></div>
				<?php if ( has_nav_menu( 'primary' ) ):?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'fallback_cb' => '', 'container' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s six columns">%3$s</ul>', 'walker' => new beauty_temple_walker) ); ?>
				<?php else :?>
				<ul class="menu eleven columns">
					<li class="menu-item" id="margem-primeiro-item"><a class="margem-lateral-menu" href="/category/moda">Moda<i class="icon-bag"></i></a></li>
					<li class="menu-item"><a class="margem-lateral-menu" href="/category/beleza">Beleza<i class="icon-female"></i></a></li>
					<li class="menu-item"><a class="margem-lateral-menu" href="/category/casamento">Casamento<i class="icon-heart"></i></a></li>
					<li class="menu-item"><a class="margem-lateral-menu" href="/category/viagem">Viagem<i class="icon-globe"></i></a></li>
					<li class="menu-item"><a class="margem-lateral-menu" href="/category/diy">DIY<i class="icon-palette"></i></a></li>
					<li class="menu-item"><a class="margem-lateral-menu" href="/category/play">Play<i class="icon-video"></i></a></li>
					<li class="menu-item"><a class="margem-lateral-menu" href="/category/entretenimento">Entretenimento<i class="icon-star"></i></a></li>
				</ul>
				<?php endif;?>
			</div>
		</nav>
	</div>