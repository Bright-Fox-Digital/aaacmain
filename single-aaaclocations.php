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
<div class="bg-bggray py-10">
	<div class="container mx-auto">
		<div class="text-center">
			<h1 class="font-display text-5xl font-bold text-lightgray py-10"><?php echo get_the_title(); ?></h1>
		</div>
		<div class="flex justify-between">
			<div id="primary" class="content-area w-2/3">
				<main id="main" class="site-main">
				<?php if( have_rows('locations', 'options') ): ?>
	
				<div class="grid grid-cols-2 gap-8">
					<?php while( have_rows('locations', 'options') ): the_row(); 
						$state = get_sub_field('state_name');
						if(strtolower($state) == strtolower(get_the_title())){
							// 
							if(have_rows('cities')){
								while(have_rows('cities')){
									the_row();
									get_template_part('template-parts/location', 'card');
								}
							}
							
						} 
					?>
					
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				</main><!-- #main -->
			</div><!-- #primary -->
			<div class="w-1/3 pl-8">
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
	</div>
</div>
<?php
get_footer();
