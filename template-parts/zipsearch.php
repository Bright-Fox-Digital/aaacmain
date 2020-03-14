<div class="lg:p-32 p-4" style="background: url('/wp-content/uploads/2020/02/Group-1-1.png') no-repeat; background-position: center; background-size: cover;">
	<div class="lg:pb-32 pb-4 text-center text-4xl tracking-wide text-lightgray">
		Location Finder
	</div>
	<div class="container mx-auto flex flex-col lg:flex-row">
		<div class="w-full lg:w-2/5">
			<h1 class="text-center text-4xl tracking-wide text-lightgray">Choose your State</h1>
			<h2 class="text-center text-4xl tracking-wide text-lightgray italic">OR</h2>
			<h1 class="text-center text-4xl tracking-wide text-lightgray">Enter your ZIP Code</h1>
			<form action="<?php echo get_permalink( get_page_by_path( 'location-search' ) );?>">
				<input type="search" name="zipcode" class="mt-5 searchzip btn-outline btn-outline-lightgray" placeholder="&#xF002;" />
				<button type="submit" class="btn btn-yellow w-full mt-4 text-2xl">Search</button>
			</form>
		</div>
		<div class="w-full lg:w-3/5 pl-0 lg:pl-10 mt-5 lg:mt-0">
			<?php echo do_shortcode('[mapsvg id="152"]'); ?>
		</div>
	</div>
</div>