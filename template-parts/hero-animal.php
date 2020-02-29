<div class="flex flex-row">
	<div class="w-1/3">
		<h1 class="font-display text-4xl border-b-2 pb-2 border-yellow text-lightgray tracking-wide font-bold w-3/4"><?php echo get_the_title(); ?></h1>
		<div class="pt-4 text-lightgray font-body font-light leading-tight"> <?php the_content(); ?></div>
		<button class="btn btn-yellow w-full mt-10">Learn More</button>
	</div>
	
	<div class="w-1/3 mx-10">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div>
	</div>
</div>