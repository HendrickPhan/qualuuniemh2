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
	
	
	
	$('#hp .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		responsive:{
			1000:{
				items: 4
			}
		}
	})
	
	
	$('#loaimathang_contain .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		responsive:{
			1000:{
				items: 1
			}
		}
	});
	
	$('#search_contain .owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		responsive:{
			1000:{
				items: 1
			}
		}
	});
	
	$('.quanly .datatable').DataTable();
	
});