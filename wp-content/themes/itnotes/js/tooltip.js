$(document).ready(function(){
	$('.post h2 a').hover(function(){
		var str = $(this).attr('data-tooltip');
		$('<p class="tooltip"></p>').text(str).appendTo('body').fadeIn('slow');
	},function(){
		$('.tooltip').remove();
	}).mousemove(function(e){
		var mousex = e.pageX - 150;
		var mousey = e.pageY + 25;
		$('.tooltip').css({top: mousey, left: mousex});
	});
});