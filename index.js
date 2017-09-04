$(function(){

	//$('.container').css('background-color','red');
	//$('.bar').hide();

	$('table.selector tbody td').on('mouseover',function(){
		//$('.bar.'+$(this).data('class')).show();
		//$('.bar').css('visibility','hidden');
		//$('.bar.'+$(this).data('class')).css('visibility','visible');
		//console.log('P:'+$(this).data('pid')+' - S:'+$(this).data('sid'));
		var pidd = $(this).data('pid');
		var sidd = $(this).data('sid');
		$('.bar').each(function(){
			//console.log('SID: '+sidd);
			//$(this).addClass('HL');
			var val = $(this).data('value-' + pidd + '-' + sidd);
			$(this).removeClass('value-0');
			$(this).removeClass('value-1');
			$(this).removeClass('value-2');
			$(this).removeClass('value-3');
			$(this).addClass('value-'+val);
			//console.log('VAL: ' + val);
		});
	});
	/*$('table.selector tbody td').on('mouseleave',function(){
		$('.bar').css('visibility','hidden');
	});*/

	/*$('table.selector tbody th').on('mouseover',function(){
		$('.bar').css('visibility','visible');
		//$('.bar').css('opacity','1');
	});
	$('table.selector tbody th').on('mouseleave',function(){
		//$('.bar').css('visibility','hidden');
		//$('.bar').css('opacity','0');
	});*/


});