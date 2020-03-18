<div class="bg-white rounded-lg overflow-hidden shadow-md animal-card" data-filter="<?php echo $animal_tax_list; ?>">
	<div class="p-10 font-body text-lightgray pt-4">
		<h1 class="font-display text-3xl font-bold mb-4">
			<i class="fas fa-map-marker-alt text-lightgray"></i>
			<?php echo get_the_title(); ?>
		</h1>
		<p class="align-center flex"><i class="fas fa-globe-americas text-yellow text-2xl mr-2"></i><span class="underline"><?php echo get_field('owner_email'); ?></span></p>
		<p class="align-center flex mt-2"><i class="fas fa-phone-alt text-yellow text-2xl mr-2"></i><span class="underline"><?php echo get_field('owner_phone'); ?></span></p>
		<div class="py-4 font-light">
			Pellentesque habitant morbi tristique senectus et netus. Sed haec quis possit intrepidus aestimare tellus.
			<p class="py-2 text-yellow font-bold"><a href="#">Read More ></a></p>
		</div>
		
		<h1 class="font-display text-2xl font-bold mb-4">
			Service Areas
		</h1>
		
	</div>
</div>