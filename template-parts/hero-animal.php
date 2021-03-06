<div class="flex flex-col sm:flex-col xs:flex-col lg:flex-row">
	<div class="w-full lg:w-5/12 xl:w-5/12 md:w-full self-center flex flex-col">
		<h1 class="font-display text-4xl border-b-4 pb-2 border-yellow text-lightgray tracking-wide font-bold w-3/5"><?php echo get_the_title(); ?></h1>
		<div class="pt-4 text-lightgray font-body font-light leading-tight"> <?php the_content(); ?></div>
		<div class="flex flex-wrap mt-6">
		<?php
			$tags = get_the_tags();
			if($tags){
				foreach($tags as $tag){ ?>
					<div class="p-1 px-2 mr-2 bg-yellow-lighter rounded-full font-body text-sm text-midgray mb-4"><i class="fas fa-tools mr-2"></i><?php echo $tag->name; ?></div>
				<?php
				}
			}
		?>
		<?php if(!is_single()){ ?>
			<button class="btn btn-yellow w-full mt-10">Learn More</button>
		<?php } ?>
		</div>
	</div>
	
	<div class="w-full lg:w-5/12 w-full mx-0 lg:mx-10 my-10 lg:my-0">
		<?php the_post_thumbnail(); ?>
	</div>
	
	<div class="w-full lg:w-1/6 flex justify-between flex-col my-5 align-end items-start relative">
		<div class="flex items-center justify-between z-10 w-full lg:bg-transparent lg:justify-end bg-almostwhite lg:p-0 lg:mt-0 p-3 rounded mt-4">
			<span class="mr-5">Overview</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/overview.svg' ?>" />
		</div>
		<div class="flex items-center justify-between z-10 w-full lg:bg-transparent lg:justify-end bg-almostwhite lg:p-0 lg:mt-0 p-3 rounded mt-4">
			<span class="mr-5">Tracks</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/tracks.svg' ?>" />
		</div>
		<div class="flex items-center justify-between z-10 w-full lg:bg-transparent lg:justify-end bg-almostwhite lg:p-0 lg:mt-0 p-3 rounded mt-4">
			<span class="mr-5">Sounds</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/sound.svg' ?>" />
		</div>
		<div class="flex items-center justify-between z-10 w-full lg:bg-transparent lg:justify-end bg-almostwhite lg:p-0 lg:mt-0 p-3 rounded mt-4">
			<span class="mr-5">Scat</span>
			<img src="<?php echo get_template_directory_uri() . '/assets/img/scat.svg' ?>" />
		</div>
		<div class="w-px h-full absolute bg-almostwhite right-0 mr-6 z-0 hidden lg:block"></div>
	</div>
</div>