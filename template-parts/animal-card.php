<div class="bg-white rounded-lg overflow-hidden shadow-md">
	<div class="h-48 overflow-hidden">
		<?php echo get_the_post_thumbnail(); ?>
	</div>
	<div class="p-10 font-body text-lightgray pt-2">
		<h1 class="font-display text-3xl font-bold">
			<?php the_title(); ?>
		</h1>
		<?php the_excerpt(); ?>
		<div class="mt-10">
			<a href="<?php echo get_permalink(); ?>" class="text-yellow font-bold">Read More ></a>
		</div>
	</div>
</div>