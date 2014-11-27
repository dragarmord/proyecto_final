$(document).ready(function(){
	$('.toggle-btn').on('click', function(){
		
		var target = $(this);
		
		if(target.hasClass('close')) {
			target.removeClass('close');
			target.addClass('open');
			target.text('Close');
			$('.navList').slideDown();
		}
		else if (target.hasClass('open')) {
			target.removeClass('open');
			target.addClass('close');
			target.text('Open');
			$('.navList').slideUp();

		};


	});
});