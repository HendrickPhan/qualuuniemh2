$( document ).ready(function() {
	
	
	$('#mathang_contain .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			1000:{
				items:1
			}
		}
	})
	 $('.datatable').DataTable();
	
});