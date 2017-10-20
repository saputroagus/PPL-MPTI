$(document).ready(function(){
		
function resizeBoxes() {
		
	var browserWidth = $(window).width();
	var browserHeight = $(window).height();
		
	$('#main').css({
		height: browserHeight*2,
	});

		
		
	$('.box').css({
		width: browserWidth,
		height: browserHeight,
	});
		
}
		
resizeBoxes();
		
$(window).resize(function() {
	resizeBoxes();
});


$('nav ul li a').click(function(){
	return false;
});

function goTo(horizontal,vertical) {

	var browserWidth = $(window).width();
	var browserHeight = $(window).height();

	$('#main').animate({
		marginLeft: '-'+browserWidth*horizontal,
		marginTop: '-'+browserHeight*vertical,
	}, 800);
	
}


$('#link1 a').click(function(){
	goTo(0,0);
});


$('#link2 a').click(function(){
	goTo(0,1);
});

$('#link3 a').click(function(){
	goTo(0,2);
});

$('#link4 a').click(function(){
	goTo(0,3);
});

$('#link5 a').click(function(){
	goTo(0,4);
});

$('#link6 a').click(function(){
	goTo(0,5);
});

$('#link7 a').click(function(){
	goTo(0,6);
});

$('#link8 a').click(function(){
	goTo(0,7);
});

$('#link9 a').click(function(){
	goTo(0,8);
});
$('#link10 a').click(function(){
	goTo(1,3);
});
$('#link11 a').click(function(){
	goTo(0,10);
});

		
});
