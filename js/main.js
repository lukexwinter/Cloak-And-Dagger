function setFrameHeight() {
	var frameSides = $('.gold-border.left, .gold-border.right');
	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	var frameHeight = 0;
	
	if (windowWidth > 480) {
		frameHeight = windowHeight - 120;
		console.log('im working');
	} else {
		frameHeight = windowHeight - 75;
	}
	frameSides.css('height', frameHeight);
}

$(document).ready(function(){
	setFrameHeight();
})

$(window).resize(function(){
	setFrameHeight();
})

$('#menu-button').click(function(){
	if ( $('.mobile-nav').hasClass('active') ) {
		$('.mobile-nav').removeClass('active');
	} else {
		$('.mobile-nav').addClass('active');
	}
});

//Pass-through Hack
$("a").click(function(){
     $(this).toggleClass("highlight");
});


function passThrough(e) {
    $("a").each(function() {
       // check if clicked point (taken from event) is inside element
       var mouseX = e.pageX;
       var mouseY = e.pageY;
       var offset = $(this).offset();
       var width = $(this).width();
       var height = $(this).height();

       if (mouseX > offset.left && mouseX < offset.left+width 
           && mouseY > offset.top && mouseY < offset.top+height)
         $(this).click(); // force click event
    });
}

$("#frame").click(passThrough);

