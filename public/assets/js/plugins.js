
$(function() {

    // =========================================================
    // Evite les erreurs de la console selon les navigateurs
    // =========================================================
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }


// Place any jQuery/helper plugins in here.

    // =========================================================
    //   Fonction permettant le lancement du Caroussel.
    // =========================================================

    $('#homeCarousel').carousel({
        interval:4000,              // Changement de photos toutes les 4 secondes
        pause: "false"
    });
    $('#playButton').click(function () {
        $('#homeCarousel').carousel('cycle');
    });
    $('#pauseButton').click(function () {
        $('#homeCarousel').carousel('pause');
    });

  
    // =========================================================
    //   Active les menus de type drop down
    // =========================================================

    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });

 
    // =========================================================
    //   Activation de Fancybox (for the forms : CGU...)
    // =========================================================

    $('.fancybox').fancybox();
 

    // ============================================================================
    //   Affichage du module de sélection d'un golf ou recherche d'un intinéraire
    // ============================================================================

    $("#panel_left").on("hide.bs.collapse", function(){
        $(".btn").html('<span class="glyphicon glyphicon-search"></span> Sélection golf');
    });
    $("#panel_left").on("show.bs.collapse", function(){
        $(".btn").html('<span class="glyphicon glyphicon-remove"></span>');
    });

    var $zoneMap = $('#main_content');   // Référence sur la map avec jQuery
    var $zoneErr = $('#afffichage_erreurs');       // référence sur la zone d'erreur avec jQuery

    $zoneErr.hide();            // On cache la zone d'erreur

    // initialisation d'une Google Map
    var initGoogleMap = function(latitude, longitude) {
        // ce petit objet regroupe 2 valeurs fréquentes
        // qui concerne les coordonnées locales
        var localCoords = {
            lat: latitude,
            lng: longitude,
        };

        // cette syntaxe est définie par Google (fournisseur de l'API)
        var mapGoogle = new google.maps.Map(
            $zoneMap[0], //document.getElementById('map')
            {
                zoom: 2,
                center: localCoords,
            }
        );

        // CONSIGNE
        // ajoutons un marqueur aux coordonnées locales
        var marker = new google.maps.Marker({
            position: localCoords,
            map: mapGoogle,
            title: 'Position actuelle',

            // le marqueur est non déplaçable
            draggable: false,
        });
    };

   // utilisons l'API HTML5 Geolocation
    // la fonctionnalité est-elle disponible ?
    if (Modernizr.geolocation) {
        console.info('Géolocalisation disponible.');

        // utilisons le service fourni par le navigateur
        // cf. API accessible sur le MDN
        navigator.geolocation.getCurrentPosition(

            // la variable 'position' sera renseignée par le navigateur
            function(position) {

                console.log( position );

                // CONSIGNE
                // récupérer les coordonnées locales fournies par le
                // navigateur et initialiser la Google Map avec

                // Google Maps est un service entièrement AJAX
                // à chaque zoom / dézoom, des portions sont rechargées pour les
                // zones concernées
                initGoogleMap(
                    position.coords.latitude,
                    position.coords.longitude
                );

            },

            // gestion des erreurs renvoyées par
            // l'API HTML5 Geoloc
            function(error) {
                $zoneErr.show();

                switch(error.code) {
                    // problèmes de droits ?
                    case error.PERMISSION_DENIED:
                        $zoneErr.text('Problèmes de droits.');
                        break;

                    // aucune coordonnées ?
                    case error.POSITION_UNAVAILABLE:
                        $zoneErr.text('Coordonnées indisponibles.');
                        break;

                    // temps d'attente dépassé ?
                    case error.TIMEOUT:
                        $zoneErr.text('Temp d\'attente trop élevé.');
                        break;

                    // ici, on profite du "fall trough" du switch
                    // pour placer le cas par défaut
                    case error.UNKNOWN_ERROR:
                    default:
                        $zoneErr.text('Erreur inconnue.');
                        break;
                }
            }
        );
    }
    else {
        $zoneErr.text('Géolocalisation indisponible.');
        $zoneErr.show();

        console.warn('Géolocalisation indisponible.');      // Affichage console pour vérification
    }


});