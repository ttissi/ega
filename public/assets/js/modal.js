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

	$('#contactModalForm').submit(function(e){
        e.preventDefault();

        $form = $(this);
        $.post(document.location.url, $(this).serialize(), function(data) {
        	$feedback = $("<div").html(data).find(".form-feedback").hide();

        	$form.prepend($feedback)[0].reset();
        	$feedback.fadeIn(1500);
        });
    });

	console.log('Document (modal.js) chargé .');

});