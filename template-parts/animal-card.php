<div class="bg-white rounded-lg overflow-hidden shadow-md">
	<div class="h-48 overflow-hidden object-center">
		<?php echo get_the_post_thumbnail(); ?>
	</div>
	<div class="p-10 font-body text-lightgray pt-4">
		<h1 class="font-display text-3xl font-bold mb-4">
			<?php the_title(); ?>
		</h1>
		<?php the_excerpt(); ?>
	</div>
</div>