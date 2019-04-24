	$(window).on('scroll', function () {
    if ($(this).scrollTop() > 30) {
    	console.log("feel")
        
            $('.navbar').removeClass('py-4');
            $('.navbar').addClass('py-2');
        
    } else {
    	console.log("feelnot")
        if ($('.navbar').hasClass('py-2')) {
            $('.navbar').removeClass('py-2');
            $('.navbar').addClass('py-4');
        }
    }
});