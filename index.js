$(function(){

	//$('.container').css('background-color','red');
	//$('.bar').hide();

	$('table.selector tbody td').on('mouseover',function(){
		$('.bar.'+$(this).data('class')).show();
	});
	$('table.selector tbody td').on('mouseleave',function(){
		$('.bar').hide();
	});


});