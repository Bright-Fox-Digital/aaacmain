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
					
					<div class="flex items-center justify-center p-10 lg:p-32 w-full">
						<button class="btn btn-outline btn-outline-gray border-4 px-5 rounded-lg text-xl">Check out our Animal Research</button>
					</div>
					
				</div>
				<div class="">
					<div class="pb-32 text-center text-4xl tracking-wide text-lightgray">
						<?php echo get_field('interactive_image_title'); ?>
					</div>
					<img class="w-full object-cover" src="<?php echo get_field('interactive_image'); ?>" />
				</div>
			
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
<?php
get_footer();
