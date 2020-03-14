<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AAAC
 */

get_header();
?>

<?php 
$_pd_zipcode = $_GET["zipcode"];
?>
<div class="bg-bggray py-10">
	<div class="container mx-auto">
	<?php if($_pd_zipcode){ ?>
		<div class="text-center">
			<h1 class="font-display text-5xl font-bold text-lightgray py-10">Here's What We Found for <?php echo $_pd_zipcode; ?> </h1>
		</div>
		<div class="flex justify-between flex-col lg:flex-row">
			<div id="primary" class="content-area lg:w-2/3 w-full px-5 lg:px-0">
				<main id="main" class="site-main">
				<?php if( have_rows('locations', 'options') ): ?>
	
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
					<?php
					
					// args
					$args = array(
						'numberposts'	=> -1,
						'post_type'		=> 'aaaclocations',
						'meta_query' => array(
							array(
								'key'     => 'zip_codes',
								'value'   => $_pd_zipcode,
								'compare' => 'LIKE',
							),
						),
					);
					
					// query
					$the_query = new WP_Query( $args );
					
					 if( $the_query->have_posts() ):
					 while( $the_query->have_posts() ) : $the_query->the_post();
						 get_template_part('template-parts/single', 'location');
					 endwhile;
					 endif;
					?>
				</div>
				<?php endif; ?>
				</main><!-- #main -->
			</div><!-- #primary -->
			<div class="w-full lg:w-1/3 px-5 mt-5 lg:mt-0 lg:pl-8">
				<div class="bg-white rounded-lg overflow-hidden shadow-md animal-card" data-filter="<?php echo $animal_tax_list; ?>">
					<div class="p-10 font-body text-lightgray pt-4">
						<h1 class="font-display text-3xl font-bold mb-4 text-center">
							Search By State
						</h1>
						<div class="grid grid-cols-2 gap-8">
						<?php 
							$stateArgs = array(
								'post_type' => 'aaaclocations',
								'post_per_page' => '-1',
								'orderby' => 'title',
								'order' => 'asc'
							);
							$states = new WP_Query($stateArgs);
							if($states->have_posts()){
								while($states->have_posts()){
									$states->the_post();
									?>
									<a class="underline font-body text-2xl" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
									<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
</div>
<?php
get_footer();