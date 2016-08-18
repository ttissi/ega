$(document).ready(function(){

    // =========================================================
    // Gère l'affichage des fenêtres modales simples
    // =========================================================

	$('#contactModal').on('show.bs.modal', function (event) {
	
		var a = $(event.relatedTarget) 			// Lien appelant la fenêtre modale
	  	var destinataire = a.data('whatever') 	// Extrait l'information de l'attribut data-* 
	  
	  	// Met à jour le contenu de la fenêtre modale.
	  	var modal = $(this)
	  	modal.find('.modal-title').text('Ce message sera adressé au bureau d\'EGA')
	  	// modal.find('.modal-body input').val(destinataire)
	});

/*	$('#connexionLink').click(function(){
        $("#connexionModal").modal();
    });*/


	console.log('Document (modal.js) chargé .');

});