<div class="w-full p-32 pb-0" style="background: url('/wp-content/uploads/2020/02/testimonial_bg-1.png')">
	<div class="pb-32 text-center text-4xl tracking-wide text-lightgray">
		Our Customers Love Us
	</div>
	<div class="container flex flex-row mx-auto justify-between">
		<img class="self-end" src="/wp-content/uploads/2020/02/testimonial_image-1.png" />
		<div class="w-full grid grid-cols-2 gap-8 ml-10 pb-10">
			<?php 
				$args = array(
					'post_type' => 'testimonial',
					'posts_per_page' => 4
				);
				$testimonials = new WP_Query($args);
				if($testimonials->have_posts()){
					while($testimonials->have_posts()){
						$testimonials->the_post();
						get_template_part('template-parts/testimonial');
					}
					wp_reset_query();
				}
			?>
		</div>
	</div>
</div>