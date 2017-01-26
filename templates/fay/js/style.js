(function($) {
	$(document).ready(function() {
		$(".btn_cat").click(function(){
			$(".menu").slideToggle("slow");
		});

		$(".menu_bg").click(function(){
			if($(this).hasClass("clicked")){
				$(".menu").css("display", "none");
				$(".btn_cat").css("display", "block");
				$(this).removeClass("clicked");
			} else {
				$(".menu").css("display", "block");
				$(".btn_cat").css("display", "none");
				$(this).addClass("collapsed clicked");
			}
		});
	});
})(jQuery)

