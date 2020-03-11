<?php
	$animal_tax = get_the_terms(get_the_ID(), 'service_type');
	$atxarray = array();
	$i = 0;
	foreach($animal_tax as $atx){
		array_push($atxarray, $atx->term_id);
	}
	$animal_tax_list = json_encode($atxarray);
?>

<div class="bg-white rounded-lg overflow-hidden shadow-md animal-card" data-filter="<?php echo $animal_tax_list; ?>">
	<div class="h-56 overflow-hidden object-center">
		<?php echo get_the_post_thumbnail(); ?>
	</div>
	<div class="p-10 font-body text-lightgray pt-4">
		<h1 class="font-display text-3xl font-bold mb-4">
			<?php the_title(); ?>
		</h1>
		<?php the_excerpt(); ?>
	</div>
</div>