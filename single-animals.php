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
<div class="bg-bggray py-0 lg:py-24">
	<div class="container mx-auto">
		<div class="hero-animal py-10">
		<?php
			while ( have_posts() ) :
				the_post();
	
				get_template_part( 'template-parts/hero', 'animal' );
	
			endwhile; // End of the loop.
			?>
		</div>
	</div>
</div>
<?php
get_footer();
