(function($) {
	$(document).ready(function() {
		$(".container").addClass("loading_scroll");

		// loading頁面
		$(window).load(function(){
        	$('#loading').fadeOut();
        	$(".container").removeClass("loading_scroll");

        	// 結束後，將頁面強制回到頂端
			$('html, body').animate({
				scrollTop : 0
			});
        });

		// 手機版分類選單toggle效果
		$(".btn_cat").click(function(){
			$(".menu").slideToggle("slow");
		});

		// 修正手機版分類選單顯示異常
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
