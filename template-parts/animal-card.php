<?php
	$animal_tax = get_the_terms(get_the_ID(), 'animal_type');
	$atxarray = array();
	if($animal_tax){
	foreach($animal_tax as $atx){
		array_push($atxarray, $atx->term_id);
	}
	$animal_tax_list = json_encode($atxarray);
	}
?>

<div class="bg-white rounded-lg overflow-hidden shadow-md animal-card" data-filter="<?php echo $animal_tax_list; ?>">
	<div class="h-56 overflow-hidden">
		<?php echo get_the_post_thumbnail(get_the_id(), 'medium', array( 'class' => 'h-56 object-cover w-full object-center' )); ?>
	</div>
	<div class="p-10 pb-2 font-body text-lightgray pt-4">
		<h1 class="font-display text-3xl font-bold mb-4">
			<?php the_title(); ?>
		</h1>
		<?php the_excerpt(); ?>
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
		</div>
	</div>
	
</div>