$(document).ready(function(){
	$('.toggle-btn').on('click', function(){
		
		var target = $(this);
		
		if(target.hasClass('close')) {
			target.removeClass('close');
			target.addClass('open');
			target.text('Menu');
			$('.navList').slideDown();
		}
		else if (target.hasClass('open')) {
			target.removeClass('open');
			target.addClass('close');
			target.text('Menu');
			$('.navList').slideUp();

		};


	});

    $('#searchIcon').click(function(){
       $('#tfnewsearch').show(300);
        $('#removeSearchIcon').show(500);
        $(this).hide();

    });

    $('#removeSearchIcon').click(function(){
        $('#tfnewsearch').hide(200);
        $(this).hide(200);
        $('#searchIcon').show(400);
    });
});
