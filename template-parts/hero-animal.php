<div class="flex flex-row">
	<div class="w-5/12">
		<h1 class="font-display text-4xl border-b-2 pb-2 border-yellow text-lightgray tracking-wide font-bold w-3/4"><?php echo get_the_title(); ?></h1>
		<div class="pt-4 text-lightgray font-body font-light leading-tight"> <?php the_content(); ?></div>
		<?php if(!is_single()){ ?>
			<button class="btn btn-yellow w-full mt-10">Learn More</button>
		<?php } ?>
	</div>
	
	<div class="w-5/12 mx-10">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="w-1/6 flex justify-between flex-col my-5 align-end">
		<div class="flex items-center justify-end">
			<span class="mr-5">Overview</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/overview.svg' ?>" />
		</div>
		<div class="flex items-center justify-end">
			<span class="mr-5">Tracks</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/tracks.svg' ?>" />
		</div>
		<div class="flex items-center justify-end">
			<span class="mr-5">Sounds</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/sound.svg' ?>" />
		</div>
		<div class="flex items-center justify-end">
			<span class="mr-5">Scat</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/scat.svg' ?>" />
		</div>
	</div>
</div>