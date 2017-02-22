(function($) {
	$(document).ready(function() {
		$(".container").addClass("loading_scroll");

		$(window).load(function(){
        	$('#loading').fadeOut();
        	$(".container").removeClass("loading_scroll");
			$('html, body').animate({
				scrollTop : 0
			});
        });

		$(".btn_cat").click(function(){
			$(".menu").slideToggle("slow");
		});
	});
})(jQuery)
