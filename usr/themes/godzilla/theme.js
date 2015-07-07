$(document).ready(function () {
        // a  target _blank
        $(".post-content,.comment-author").find("a").attr('target','_blank' ); 
        
	// Switch header
	if (!($.browser.msie && $.browser.version === '6.0')) {
		switchHeader();
		switchSidebar();
		$(window).scroll(function(){
			switchHeader();
			switchSidebar();
		});
	} 

	$(window).resize(function(){
		$('.widget:last').width($('.social').width());
	});


	$(".post-image img").hover(function(){
			if ($(this).height()<=300) {return;}
			$(this).animate({top:(300-$(this).height())+"px"},{queue:false})},
		function(){
			if ($(this).height()<=300) {return;}
			$(this).animate({top:"0px"},{queue:false})}
	);

	$("img.lazy").lazyload({
	    threshold : 200,
            effect : "fadeIn"
	});

	$("pre ").addClass("prettyprint");
	prettyPrint();
});

function switchHeader() {

	var navH = $('.site-name').height();
	if($(window).scrollTop() >= navH) {
		$('#header').addClass('fix');
		$('.site-name').hide();
		$('body').css("margin-top","145px");
	} else {
		$('#header').removeClass('fix');
		$('.site-name').show();
		$('body').css("margin-top","0");
	}
}


var sidebarH = $('.widget:last').offset().top-70;

function switchSidebar() {
	if($(window).scrollTop() >= sidebarH) {
		$('.widget:last').width($('.social').width());
		$('.widget:last').addClass('fix');
	} else {
		$('.widget:last').removeClass('fix');
	}
}