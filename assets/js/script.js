$(function(){

/*
var wW, wH, Rem;
var winSize = function(){
	wW = $(window).width();
	wH = $(window).height();
}
winSize();
$(window).on('resize', function(){
	winSize();
});


var isHtmlScrollable = function(){
	html = $('html');
	top = html.scrollTop();
	elm = $('<div/>').height(10000).prependTo('body');
	html.scrollTop(10000);
	var rs = !!html.scrollTop();
	html.scrollTop(top);
	elm.remove();
	return rs;
}
var bw = $(isHtmlScrollable() ? 'html' : 'body');

$('a[href^="#"]').on('click', function(){
	href = $(this).attr('href');
	target = $(href === '#' || href === '' ? 'html' : href);
	position = target.offset().top;
	bw.animate({scrollTop:position}, 500, 'swing');
	return false;
});


var winScroll = function(){
	wS = $(window).scrollTop();
	if(wH < wS) $('nav').addClass('show');
		else $('nav').removeClass('show');
}
winScroll();
$(window).on('scroll', function(){
	winScroll();
});


$('section').each(function(){
	mh = 0;
	$(this).find('.box').each(function(b){

		h = $(this).find('div').height();
		switch(true){
			case $(this).hasClass('box_1'): s = 1;break;
			case $(this).hasClass('box_2'): s = 2;break;
			case $(this).hasClass('box_3'): s = 3;break;
		}
		if(b%s == 0) mh = 0;
		if(mh < h) mh = h;
		if(b%s == s-1){
			for(var n=0; n<s; n++){
				$(this).closest('section').find('.box').eq(b-n).find('div').height(mh);
			}
		}
	});
});
*/

});