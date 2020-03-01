<div class="bg-white rounded-lg p-6 shadow-md">
    <div>
		<div class="text-yellow text-3xl">
	    	<?php echo get_field('star_rating'); ?>
		</div>
		<div class="clear-both"></div>
		<div class="font-body block mt-4 font-light text-lightgray"><?php echo substr(get_field('testimonial_text'), 0, 80); ?></div>
		<div class="flex flex-row mt-3">
			<span class="mr-4"><?php echo get_field('testimonial_persons_name'); ?></span>
			<i class="text-lightgray"><?php echo get_field('testimonial_date'); ?></i>
		</div>
    </div>
</div>