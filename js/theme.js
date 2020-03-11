( function( $ ) {
	
		$(document).on('click', '.animal-filter', function(){
			let animalId = $(this).data('id');
			$('.animal-card').each(function(){
				let card = $(this);
				let dataID = card.data('filter');
				
				let flag = $.inArray(animalId, dataID);
				if(!flag){
					card.show(200);
				} else {
					card.hide(200);
				}
			});
		});
		
} )( jQuery );