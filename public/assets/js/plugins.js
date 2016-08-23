
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
    

    // ============================================================================
    //   Aactivation des effets fancybox
    // ============================================================================

    // Le chargement dessous est effectuée dans le fichier carte.php
    // google.maps.event.addDomListener(window, 'load', initialisation);

    $(".fancybox").fancybox({
        openEffect  : 'elastic',
        closeEffect : 'elastic'
    });
    $(".fancybox-thumb").fancybox({
        prevEffect  : 'elastic',
        nextEffect  : 'elastic',
        helpers : {
            title   : {
                type: 'outside'
            },
            thumbs  : {
                width   : 500,
                height  : 500
            }
        }
    });

});