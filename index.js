$(function(){

	//$('.container').css('background-color','red');
	//$('.bar').hide();

	$('table.selector tbody td').on('mouseover',function(){
		//$('.bar.'+$(this).data('class')).show();
		$('.bar').css('visibility','hidden');
		$('.bar.'+$(this).data('class')).css('visibility','visible');
	});
	$('table.selector tbody td').on('mouseleave',function(){
		$('.bar').css('visibility','hidden');
	});

	$('table.selector tbody th').on('mouseover',function(){
		$('.bar').css('visibility','visible');
		//$('.bar').css('opacity','1');
	});
	$('table.selector tbody th').on('mouseleave',function(){
		//$('.bar').css('visibility','hidden');
		//$('.bar').css('opacity','0');
	});


});