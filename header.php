<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AAAC
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

<body <?php body_class('is-marginless'); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'aaac' ); ?></a>

	<header id="masthead" class="site-header font-sans text-lightgray py-10">
		<div class="container mx-auto flex flex-row justify-between items-center">
			<div class="site-branding flex flex-row">
				<?php the_custom_logo(); ?>
				<div class="phone flex flex-row items-center ml-16 lg:flex hidden">
					<span class="icon is-large -mt-6 mr-1">
					  <i class="fas fa-phone-alt fa-2x"></i>
					</span>
					<div class="is-flex">
						<div class="is-block mx-1">
							<h1 class="font-sans text-3xl font-bold tracking-wide"><?php the_field('phone_number', 'option'); ?></h1>
							<p class="italic">No dogs or cats</p>
						</div>
					</div>
					<div>
					</div>
				</div>
			</div><!-- .site-branding -->
	
			<nav id="site-navigation" class="main-navigation flex flex-row justify-between items-center font-sans">
				<button class="menu-toggle lg:hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'aaac' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'      => '<ul id="%1$s" class="flex flex-row jusify-between flex-grow font-light">%3$s</ul>',
				) );
				?>
				<button class="bg-yellow text-white p-3 text-display font-bold rounded-full">Get A Quote</button>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
	<?php if(!is_front_page()){ ?>
		<section class="has-background-light p-1">
			<div class="container is-italic has-text-grey-light">
				<?php echo do_shortcode('[flexy_breadcrumb]'); ?>
			</div>
		</section>
	<?php } else { ?>
		<section class="h-screen" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat scroll center; background-size: cover;">
		    <div class="container text-white mx-auto py-64">
		      <h1 class="text-5xl font-black font-display tracking-wider leading-tight">
		        Uninvited Guest?
		      </h1>
		      <h2 class="text-4xl font-regular font-display">
		        We'll see them out
		      </h2>
		    </div>
		</section>
	<?php } ?>
	<div id="content" class="site-content container mx-auto">
