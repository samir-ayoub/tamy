$(document).ready(function(){

    bordaHome()

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {

// $('.filter:not(:contains([data-tag='+value+']))').hide('3000');
// $('.filter:contains([data-tag='+value+'])').show('3000');

			$('.filter:not([data-tag='+value+'])').hide('3000');
			$('.filter[data-tag='+value+']').show('3000');

        }
    });
    
    if ($(".filter-button").removeClass("active")) {
		$(this).removeClass("active");
	}
	$(this).addClass("active");

});

function bordaHome() {
    $(document).on('scroll', function () {

        if ( $(document).scrollTop() >= $('.home-content').outerHeight() ) {
            $('body').css({'border-color' : '#FFAAA6'});
        }

        else  {
            $('body').css({'border-color' : '#fff'});
        }


    });


}

