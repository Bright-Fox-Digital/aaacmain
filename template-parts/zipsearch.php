<div class="p-32" style="background: url('/wp-content/uploads/2020/02/Group-1-1.png') no-repeat; background-position: center; background-size: cover;">
	<div class="pb-32 text-center text-4xl tracking-wide text-lightgray">
		Location Finder
	</div>
	<div class="container flex flex-row">
		<div class="w-2/5">
			<h1 class="text-center text-4xl tracking-wide text-lightgray">Choose your State</h1>
			<h2 class="text-center text-4xl tracking-wide text-lightgray italic">OR</h2>
			<h1 class="text-center text-4xl tracking-wide text-lightgray">Enter your ZIP Code</h1>
			<input type="search" class="mt-5 searchzip btn-outline btn-outline-lightgray" placeholder="&#xF002;" />
			<button class="btn btn-yellow w-full mt-4 text-2xl">Search</button>
		</div>
		<div class="w-3/5 pl-10">
			<?php echo do_shortcode('[mapsvg id="152"]'); ?>
		</div>
	</div>
</div>