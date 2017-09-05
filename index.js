$(function(){

	$('table.selector tbody td').on('mouseover',function(){
		var pid = $(this).data('pid');
		var sid = $(this).data('sid');
		$('.bar').each(function(){
			var val = $(this).data('value-' + pid + '-' + sid);
			$(this).removeClass('value-0 value-1 value-2 value-3').addClass('value-'+val);
		});
	});

});
