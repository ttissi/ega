$(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });

    // Fancybox (for the forms : CGU...)
    	// Activation de Fancybox
	$('.fancybox').fancybox();

	console.log('Document chargé (modal.js).');
});