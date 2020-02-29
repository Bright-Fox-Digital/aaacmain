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
 * @package AAAC
 */

get_header();
?>
	<div class="flex pt-40">
		<div id="primary" class="content-area w-full">
			<main id="main" class="site-main">
			<div class="container mx-auto">
				<?php
		// 		if ( have_posts() ) :
		// 
		// 			if ( is_home() && ! is_front_page() ) :
		// 				?>
		<!-- // 				<header>
		// 					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
		// 				</header> -->
						<?php
		// 			endif;
		// 
		// 			/* Start the Loop */
		// 			while ( have_posts() ) :
		// 				the_post();
		// 
		// 				/*
		// 				 * Include the Post-Type-specific template for the content.
		// 				 * If you want to override this in a child theme, then include a file
		// 				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		// 				 */
		// 				get_template_part( 'template-parts/content', get_post_type() );
		// 
		// 			endwhile;
		// 
		// 			//the_posts_navigation();
		// 
		// 		else :
		// 
		// 			get_template_part( 'template-parts/content', 'none' );
		// 
		// 		endif;
				?>
				<div class="pb-32 text-center text-4xl tracking-wide text-lightgray">
					<?php echo get_field('main_title'); ?>
				</div>
				<?php
				$args = array(
					'post_type' => 'animals',
					'p'			=> get_field('active_wildlife')
				);
				$active_wildlife = new WP_Query($args);
				if($active_wildlife->have_posts()){
					while($active_wildlife->have_posts()){
						$active_wildlife->the_post();
							get_template_part( 'template-parts/hero', 'animal' );
					}
				}
				
				wp_reset_query();
				?>
				
				<div class="flex items-center justify-center p-32 w-full">
					<button class="btn btn-outline btn-outline-gray rounded-lg">Check out our Animal Research</button>
				</div>
				
				<div class="pb-32 text-center text-4xl tracking-wide text-lightgray">
					<?php echo get_field('interactive_image_title'); ?>
				</div>
			</div>
			<div class="">
				<img class="w-full object-cover" src="<?php echo get_field('interactive_image'); ?>" />
			</div>
			
			<?php get_template_part('template-parts/testimonials'); ?>
			
			<div class="p-32" style="background: url('/wp-content/uploads/2020/02/Group-1-1.png') no-repeat; background-position: center; background-size: cover;">
				<div class="pb-32 text-center text-4xl tracking-wide text-lightgray">
					Location Finder
				</div>
				<div class="container flex flex-row">
					<div class="w-1/2">
						<h1 class="text-center text-4xl tracking-wide text-lightgray">Choose your State</h1>
						<h2 class="text-center text-4xl tracking-wide text-lightgray italic">OR</h2>
						<h1 class="text-center text-4xl tracking-wide text-lightgray">Enter your ZIP Code</h1>
						<input type="search" class="mt-5 searchzip btn-outline btn-outline-lightgray" placeholder="&#xF002;" />
						<button class="btn btn-yellow w-full mt-4 text-2xl">Search</button>
					</div>
					<div class="w-1/2 text-center text-4xl tracking-wide text-lightgray italic flex justify-center items-center h-64">
						insert map plugin here
					</div>
				</div>
			</div>
			
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer();
