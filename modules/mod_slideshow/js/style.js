$(document).ready(function() {
	var page = $('.page');
	var scrollTop = $(window).scrollTop();

	page.find('li').on('click', function() {
		page.find('li').removeClass('active'); //所有的li
		$(this).addClass('active');	//this的li
	});

	// $(window).mousewheel(function() {
	// page.find('li').on('click', function() {
	// 	if(scrollTop == $('#section1').offset().top) {
	// 		scroll(1);
	// 	}else if(scrollTop == $('#section2').offset().top) {
	// 		scroll(2);
	// 	}else if(scrollTop == $('#section3').offset().top) {
	// 		scroll(3);
	// 	}else if(scrollTop == $('#section4').offset().top) {
	// 		scroll(4);
	// 	}else {
	// 		scroll(5);
	// 	}
	// });
	// // });
    //
	// function scroll(id){
	// 	page.find('li').removeClass('active');
	// 	$('.list a[href="#section' + id + '"] li').addClass('active');
	// }
});




// $(document).ready(function(){
// 	// 偵測現在在哪一頁
// 	var page = $('.page');
// 	var scrollTop;
// 	var current_page = 1; 
// 	var next_page = 2;
// 	//scroll時要改變得狀態 比如css active remove

// 	function detectPage(){
// 		for(var i = 1; i < 6; i++){
// 			scrollTop = $(window).scrollTop();
// 			if(scrollTop === $('#section' + i).offset().top) {
// 				console.log(i);
// 				return i;
// 			}
// 		}
// 	}

// 	function scroll(page){
// 		var page = $('.page');
// 		page.find('li').removeClass('active');
// 		// console.log('section1');
// 		$('.list a[href="#section' + page + '"] li').addClass('active');	
// 		// console.log(scrollTop);
// 	}
// 	var animated = false;
// 	// listener mousewheel
// 	$('body').on('mousewheel' , _.debounce(function() {
//    //handle the mouse wheel event in here
//    		scrollTop = $(window).scrollTop();
// 		current_page = detectPage();
// 		console.log(current_page);
// 		if(current_page !== 5){
// 			next_page = current_page + 1;
// 		}

// 		scroll(next_page);
// 	}, 100));
// });

