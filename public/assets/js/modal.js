$(document).ready(function(){

    // =========================================================
    // Gère l'affichage des fenêtres modales simples
    // =========================================================

    // Formulaire de contact
	$('#contactModal').on('show.bs.modal', function (event) {
	
		var a = $(event.relatedTarget) 			// Lien appelant la fenêtre modale
	  	var destinataire = a.data('whatever') 	// Extrait l'information de l'attribut data-* 
	  
	  	// Met à jour le contenu de la fenêtre modale.
	  	var modal = $(this)
	  	modal.find('.modal-title').text('Ce message sera adressé au bureau d\'EGA')
	  	// modal.find('.modal-body input').val(destinataire)
	});


	// Connexion utilisateur
	// $('#click_to_load_modal_popup').on('click', function() { 
	// 	var $blocModal = $('#load_popup_modal_show_id');
	// 	$blocModal.load('connexion-ti.php',	function() { 
	// 		$blocModal.modal('show');
	// 	}); 
	// }); 

	$('.ls-modal').on('click', function(e){
  		e.preventDefault();
  		$('#blocModal').modal('show').find('.modal-body').load($(this).attr('href'));
	});

	$('.sm-modal').on('click', function(evt) {
	    evt.preventDefault();
	    var modal = $('#blocModal').modal();
	    modal
	        // .find('.modal-body')
	        .load($(this).attr('href'), function (responseText, textStatus) {
	            if ( textStatus === 'success' || 
	                 textStatus === 'notmodified') 
	            {
	                modal.show();
	            }
	    });
	});


	console.log('Document (modal.js) chargé .');

});