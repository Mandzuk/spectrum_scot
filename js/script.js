$(document).ready(function(){
	var h = $(window).height();

	var my_ex2 = $("#ex2");
	var my_ex3 = $("#ex3");
	var my_ex4 = $("#ex4");
	var map = $("#map");

	$("#ex1 .post").addClass('animated zoomIn');
	$("#ex0 .post").eq(0).addClass('animated bounceInLeft');
	
	$(window).scroll(function(){
		if ( ($(this).scrollTop()+h) >= my_ex2.offset().top) {
			$("#ex2 .post").css({visibility:"visible"});
			$("#ex2 .post").eq(0).addClass('animated bounceInLeft');
			$("#ex2 .post").eq(1).addClass('animated bounceInLeft');
			$("#ex2 .post").eq(2).addClass('animated bounceInLeft');

		} 
		if ( ($(this).scrollTop()+h) >= my_ex3.offset().top) {
			$("#ex3 .post").css({visibility:"visible"});
			$("#ex3 .post").eq(0).addClass('animated bounceInRight');
			$("#ex3 .post").eq(1).addClass('animated bounceInRight');
			$("#ex3 .post").eq(2).addClass('animated bounceInRight');
		}

		if ( ($(this).scrollTop()+h) >= my_ex4.offset().top) {
			$("#ex4 .post").css({visibility:"visible"});
			$("#ex4 .post").addClass('animated zoomIn');
		} 

		if ( ($(this).scrollTop()+h) >= map.offset().top) {
			$("#map .intro").css({visibility:"visible"});
			$("#map .intro").addClass('animated hatch');
		} 
		/*
		if ( $(this).scrollTop() == 0 ) {
			$("#ex2 .post, #ex3 .post, #ex4 .post").each(function(){
				if ( $(this).hasClass('last') ) {
					$(this).removeClass().addClass('post last');
				} else {
					$(this).removeClass().addClass('post');
				}
				$(this).css({visibility:"hidden"});
			});
		}*/
	});
});