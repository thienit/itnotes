$(document).ready(function(){
	$('#menu-categories-menu li').hover(function(){
		// when mouse in
		$(this).find('ul:first').css({visibility: 'visible', display:'none'}).show(300);
	}, function(){
		// when mouse leave
		$(this).find('ul:first').css({visibility: 'hidden'});
	});

	$('.tab_content:not(:first)').hide();

	$('.tabs li').click(function(){
		$('.tabs li').removeClass('active');
		$('.tab_content').hide();
		var activeTab = $(this).attr('class');
		$('#'+activeTab).fadeIn();
		$(this).addClass('active');
	});
})