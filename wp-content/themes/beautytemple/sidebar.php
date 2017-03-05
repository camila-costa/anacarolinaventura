<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BeautyTemple
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<?php 			
	$social_links_fb = get_theme_mod( 'beautytemple_social_links_fb_option', '' );
	$social_links_tw = get_theme_mod( 'beautytemple_social_links_tw_option', '' );
	$social_links_gplus =  get_theme_mod( 'beautytemple_social_links_gplus_option', '' );
	$social_links_instagram = get_theme_mod( 'beautytemple_social_links_instagram_option', '' );
	$social_links_github = get_theme_mod( 'beautytemple_social_links_github_option', '' );
	$social_links_behance = get_theme_mod( 'beautytemple_social_links_behance_option', '' );
	/* Author: Camila Costa */
	$social_links_snapchat = "https://www.snapchat.com/add/ana_venturaaaa";
	/* */
?>

<aside id="secondary" class="widget-area four columns" role="complementary">
	<section class="widget">
		<h5 class="widget-title">Ana Carolina Ventura</h5>
		<img src="/personalizado/img/carol.jpg" /></li>
		<p>20 anos, mora na cidade de Nova Friburgo. Estudante de fisioterapia, mas também blogueira. Casada, evangélica, apaixonada pela família e pelo universo feminino.</p>
		<?php if ($social_links_fb || $social_links_tw || $social_links_instagram || $social_links_snapchat){ ?>
			<div class="social-links twelve columns">
				<ul>
					<?php if ($social_links_fb):?><li><a target="blank" href="<?php echo esc_url($social_links_fb) ; ?>"><i class="icon-facebook-squared"></i></a></li><?php endif;?>
					<?php if ($social_links_tw):?><li><a target="blank" href="<?php echo esc_url($social_links_tw) ; ?>"><i class="icon-twitter"></i></a></li><?php endif;?>
					<?php if ($social_links_instagram):?><li><a target="blank" href="<?php echo esc_url($social_links_instagram) ; ?>"><i class="icon-instagram"></i></a></li><?php endif;?>
					<?php if ($social_links_snapchat):?><li><a href="<?php echo $social_links_snapchat; ?>" target="_blank"><i class="icon-snap"></i></a></li><?php endif;?>
				</ul>
			</div>
		<?php } ?>
		<br/><br/>
	</section>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->