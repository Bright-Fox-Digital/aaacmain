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
<div class="columns mt-16">
	<div id="primary" class="content-area">
		<main id="main" class="site-main container mx-auto">
		<h1 class="font-display text-4xl font-bold text-lightgray text-center mb-10"><?php the_title(); ?></h1>
		<h2 class="font-display text-2xl text-lightgray text-center">Filter By</h1>
		<div class="w-full lg:w-8/12 flex flex-row justify-between mx-auto relative mt-16">
			<div class="h-px bg-almostwhite absolute mt-6 w-11/12"></div>
			<?php
			$taxonomy = 'animal_type';
			$taxonomy_terms = get_terms( $taxonomy, array(
			    'hide_empty' => 1,
			) );
			foreach($taxonomy_terms as $term){ ?>
				<div class="flex items-center flex-col z-10 animal-filter" data-id="<?php echo $term->term_id; ?>">
					<?php echo "<img src='" . get_field('icon', $term) . "' />"; ?>
					<span class="mt-3 font-display text-lightgray"><?php echo $term->name; ?></span>
				</div>
			<?php
			}
			?>
		</div>
		<div class="grid grid-cols-2 lg:grid-cols-3 gap-8 my-32">
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
