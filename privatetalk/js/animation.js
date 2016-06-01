		
			// fixed div
			$(window).scroll(function(){
    if ($(window).scrollTop() > 175){
        $(".header").css("position", "fixed").css("top", "0px");
    } else {
        $(".header").css("position", "relative").css("top", "0px");
    }
});
//fix div nav
	$(window).scroll(function(){
    if ($(window).scrollTop() > 175){
           $(".nav").css("position", "fixed").css("top", "53px");
    } else {
        $(".nav").css("position", "absolute").css("top", "222px");
    }
});
			// fixed div in css // this is for scrolling down/up a div as you scroll the screen down
			$(window).scroll(function(){
    if ($(window).scrollTop() > 175){
           $(".active").css("position", "fixed").css("top", "53px");
    } else {
        $(".active").css("position", "absolute").css("top", "222px");
    }
});
			// fixed div in css // this is for scrolling down/up a div as you scroll the screen down
			$(window).scroll(function(){
    if ($(window).scrollTop() > 320){
        $(".visualboard").css("position", "fixed").css("top", "60px");
    } else {
        $(".visualboard").css("position", "absolute").css("top", "370px");
    }
});
						
			// fixed div
		// $(window).scroll(function(){
  // var header = $(".header");
      // scroll = $(window).scrollTop();

  // if (scroll >= 100) header.addClass('fixed');
  // else header.removeClass('fixed');
// });
	//another one
	
    // var elementPosition = $('.header').offset();

    // $(window).scroll(function () {
        // if ($(window).scrollTop() > elementPosition.top) {
            // $('.nav').css("position", "fixed").css("top", '0');
        // } else {
            // $('.nav').css("position", "static");
        // }
     // });


// var elementPosition = $('.postbox').offset();

// $(window).scroll(function () {
    // if ($(window).scrollTop() > elementPosition.top) {
        // $('.postbox').css('position', 'fixed').css('top', '0');
    // } else {
       // $('postbox').css('position', 'static');
    // }
// });