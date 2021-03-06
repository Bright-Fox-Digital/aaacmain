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

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'aaac' ); ?></a>

	<header id="masthead" class="site-header font-sans text-lightgray pt-10">
		<div class="container mx-auto flex justify-between items-center pb-10">
			<div class="site-branding flex flex-row">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
					<img class="w-100 object-contain" src="<?php echo $image[0]; ?>" />
				<div class="phone flex flex-row items-center ml-16 ">
					<span class="icon is-large -mt-4 mr-1">
					  <i class="fas fa-phone-alt text-2xl fa-2x"></i>
					</span>
					<div class="flex">
						<div class="mx-1">
							<h1 class="font-display text-base text-4xl font-bold tracking-wide"><?php the_field('phone_number', 'option'); ?></h1>
							<p class="font-display italic text-lg tracking-wide">No Cats or Dogs</p>
						</div>
					</div>
					<div>
					</div>
				</div>
			</div><!-- .site-branding -->
			<button class="btn btn-yellow lg:flex h-12 px-6 uppercase tracking-widest hidden md:display-block">Get A Quote</button>
		</div>
		<section class="bg-headinggray p-6 shadow-inner">
			<div class="container mx-auto is-italic has-text-grey-light">
				<nav id="site-navigation" class="main-navigation font-display">
					<!-- <button class="menu-toggle lg:hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'aaac' ); ?></button> -->
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'      => '<ul id="%1$s" class="flex flex-row justify-between lg:justify-end font-light items-center font-display text-sm lg:text-lg tracking-wider">%3$s</ul>',
					) );
					?>
				</nav>
			</div>
		</section>
	</header><!-- #masthead -->
	<?php if(!is_front_page()){ ?>
		<div class="container mx-auto">
		<?php echo do_shortcode('[flexy_breadcrumb]'); ?>
		</div>
	<?php } else { ?>
		
		<section class="h-auto lg:h-auto" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat scroll center; background-size: cover;">
		    <div class="container text-white mx-auto py-32 px-5 lg:px-0 lg:py-56">
				<div class="w-full lg:w-2/5 tracking-wide">
			      <h1 class="text-5xl font-black font-display tracking-wider leading-tight">
			        Uninvited Guest?
			      </h1>
			      <h2 class="text-4xl font-regular font-display">
			        We'll see them out
			      </h2>
				  <p class="text-2xl font-regular font-display pt-8">Enter your ZIP Code to find a AAAC Wildlife Removal professional near you</p>
				  <form action="<?php echo get_permalink( get_page_by_path( 'location-search' ) );?>" class="w-4/5">
					  <input type="search" name="zipcode" class="mt-5 searchzip btn-outline btn-outline-lightgray" placeholder="&#xF002;" />
					  <button type="submit" class="btn btn-yellow w-full mt-4 text-2xl">Search</button>
				  </form>
				</div>
		    </div>
		</section>
	<?php } ?>
		<div id="content" class="site-content">
