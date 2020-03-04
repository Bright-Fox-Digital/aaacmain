<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AAAC
 */

get_header();
?>
<div class="columns">
	<div id="primary" class="content-area">
		<main id="main" class="site-main container mx-auto">
		<div class="grid grid-cols-3 gap-8 my-32">
			<?php
				$animal_args = array(
					'post_type' => 'animals',
					'orderby'	=> 'title',
					'order'		=> 'asc'
				);
				$animals = new WP_Query($animal_args);
				
				if($animals->have_posts()){
					while($animals->have_posts()){
						$animals->the_post();
							get_template_part('template-parts/animal', 'card');
					}
					wp_reset_query();
				}
			?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php
get_footer();
