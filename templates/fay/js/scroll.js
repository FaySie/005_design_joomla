// 先設定頁面一定要在最頂層
$(window).load(function() {
	$('html, body').animate({
		scrollTop : 0
	}, 2000);
});

$(function() {
	var moving = false;
	// 移動中的鎖定判斷
	var current = 0;
	// 目前所處的位置
	var duration = 1500;
	// 移動速度（毫秒）

	// 照順序設定頁面（陣列）
	var pages = ['#section1', '#section2', '#section3', '#section4', '#section5'];
	
	// 用 jQuery Mousewheel 外掛偵測滾動動作
	// 每滾一次滑鼠就執行一次
	$(window).mousewheel(function(event, delta) {
		// 移除預設的滑鼠滾輪功能
		event.preventDefault();

		// 移動中鎖定，直接return
		if (moving)
			return;

		// 如果delta < 0就是往下滾，反之往上滾
		if (delta < 0) {

			// 已經到最後面，終止動作
			if ((current + 1) == pages.length) {
				return;
			}

			// 往下滾，數字加+1
			var target = current + 1;
			current++;

		} else {

			// 已經到最上面，終止動作
			if ((current - 1) < 0) {
				return;
			}

			// 往上滾，數字-1
			var target = current - 1;
			current--;

		}

		// 指定要滾動的 selector
		var selector = pages[target];

		// 設為移動中，鎖定避免重復動作
		moving = true;

		// 開始移動，用動畫那個 id 的位置
		$('html, body').animate({
			scrollTop : $(selector).first().offset().top
		}, duration);

		// 設定移動完成後，才解除所鎖定
		setTimeout(function() {
			moving = false;
		}, duration);

	});
	
	// /* sidebar page-1 */
	// $('#section1').click(function() {
	// 	if (moving)
	// 		return;
	// 	//移動中，回去

	// 	// current 該頁數是否為 page-1
	// 	if (current == 1) {
	// 		return;
	// 	}

	// 	current = 1;
		

	// 	var page1 = pages[current];

	// 	moving = true;

	// 	$('html, body').animate({
	// 		scrollTop : $(page1).first().offset().top
	// 	}, duration);

	// 	// 設定移動完成後，才解除所鎖定
	// 	setTimeout(function() {
	// 		moving = false;
	// 	}, duration);

	// });
	
	// /* sidebar page-2 */
	// $('#section2').click(function() {
	// 	if (moving)
	// 		return;
	// 	//移動中，回去

	// 	// current 該頁數是否為 page-2
	// 	if (current == 2) {
	// 		return;
	// 	}

	// 	current = 2;

	// 	var page2 = pages[current];

	// 	moving = true;

	// 	$('html, body').animate({
	// 		scrollTop : $(page2).first().offset().top
	// 	}, duration);

	// 	// 設定移動完成後，才解除所鎖定
	// 	setTimeout(function() {
	// 		moving = false;
	// 	}, duration);

	// });
	
	// /* sidebar page-3 */
	// $('#section3').click(function() {
	// 	if (moving)
	// 		return;
	// 	//移動中，回去

	// 	// current 該頁數是否為 page-3
	// 	if (current == 3) {
	// 		return;
	// 	}

	// 	current = 3;

	// 	var page3 = pages[current];

	// 	moving = true;

	// 	$('html, body').animate({
	// 		scrollTop : $(page3).first().offset().top
	// 	}, duration);

	// 	// 設定移動完成後，才解除所鎖定
	// 	setTimeout(function() {
	// 		moving = false;
	// 	}, duration);

	// });
	
	// /* sidebar page-4 */
	// $('#section4').click(function() {
	// 	if (moving)
	// 		return;
	// 	//移動中，回去

	// 	// current 該頁數是否為 page-4
	// 	if (current == 4) {
	// 		return;
	// 	}

	// 	current = 4;

	// 	var page4 = pages[current];

	// 	moving = true;

	// 	$('html, body').animate({
	// 		scrollTop : $(page4).first().offset().top
	// 	}, duration);

	// 	// 設定移動完成後，才解除所鎖定
	// 	setTimeout(function() {
	// 		moving = false;
	// 	}, duration);

	// });
	
	// /* sidebar page-5 */
	// $('#section5').click(function() {
	// 	if (moving)
	// 		return;
	// 	//移動中，回去

	// 	// current 該頁數是否為 page-5
	// 	if (current == 5) {
	// 		return;
	// 	}

	// 	current = 5;

	// 	var page5 = pages[current];

	// 	moving = true;

	// 	$('html, body').animate({
	// 		scrollTop : $(page5).first().offset().top
	// 	}, duration);

	// 	// 設定移動完成後，才解除所鎖定
	// 	setTimeout(function() {
	// 		moving = false;
	// 	}, duration);

	// });

});

