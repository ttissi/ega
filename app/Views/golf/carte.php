<?php $this->layout('layout', ['title' => 'EGA | Cartographie']) ?>

<!-- Affichage des modules de sélection de golf sur le panel gauche -->

<div id="rowPanelLeftId" class="row">

<?php $this->start('panel_left') ?>

    <div class="text-right">
    <button id="rechercheGolfId" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#panelGolfs_leftId">
        <span class="glyphicon glyphicon glyphicon-search"></span> Sélection golf
    </button>
    </div>
    <div id="panelGolfs_leftId" class="panel collapse">
        <div class="panel-body mh600 mw200">        
            <h1 class="police-1-1em"><strong>Golfs Partenaires</strong></h1>
            
            <form name="choixGolf" method="POST" action="">
                <div class="form-group">
                    <label for="golfId"></label>
                    <!-- <select name="golfChoisi" id="golfChoisiId" onchange="change(this.value)"> -->
                    <select name="golfChoisi" id="golfChoisiId" onchange="document.location.href='carte?golf='+this.value">
                        <option disabled selected>Centrer la carte sur...</option>
                        <?php 
                            foreach ($golfs as $golf) { ?>
                                <option value="<?= $golf['id_golf']; ?>"><?= $golf['nom']; ?></option>
                            <?php } //Fin boucle golfs ?>   
                        ?>
                    </select>
                </div>
            </form>

        </div>
    </div>

<?php $this->stop('panel_left') ?>

<!-- Affichage de la carte Google Map sur la partie centrale -->
<?php $this->start('main_content') ?>

    <div id="map" class="col-md-6 col-md-offset-2 text-center well"></div>

    <!-- Initialise la Map de Google -->
    <script>

        function initialisation(golfSelectionne){


            // console.log(typeof(golfSelectionne));
            // console.log(JSON.parse(JSON.stringify(golfSelectionne)));



            // Je stocke dans la variable Javascript dataGolfs, la variable PHP $golfs
            // qui a été passée lors de l'appel de ce programme
            var dataGolfs   = <?php echo json_encode($golfs, JSON_FORCE_OBJECT); ?>;
            var golfDefaut  = <?php echo json_encode($golfParDefaut, JSON_FORCE_OBJECT); ?>;
            var golfChoisi  = <?php echo json_encode($golfChoisi, JSON_FORCE_OBJECT); ?>;
            

/*  ************ BLOC de DEBUG pour vérification de valeur (A supprimer à la fin)
            
            console.log(typeof(golfDefaut));
            console.log(JSON.parse(JSON.stringify(golfDefaut)));
            console.log(dataGolfs);
            var lat_i = parseFloat(dataGolfs[i]['latitude']);
            console.log(typeof(lat_i));        // vérif. si lat_i est bien un number/float
            console.log(lat_i);
            lat_i += 1.1;  // est-ce que       // Vérif. si une opération math. est possible sur lat_i
            console.log(lat_i);

******** */
        
            // Je cherche à déterminer le centre de ma carte en fonction des coordonnées
            // de toutes adresses de la table golfs
    
            // Variables nécessaires pour calculer mon centre de carte
            var maxX = '';
            var maxY = '';
            var minX = '';
            var minY = '';
            var centreX = '';
            var centreY = '';
            var i = 0;                                        // Index pour parcourir mes golfs
            var lignes  = Object.keys(dataGolfs).length;     // Nb d'adresses dans mon objet dataGolfs
    
            // Dans cette boucle, je vais conserver les latitudes et longitudes Max et Min,
            // pour déterminer ensuite le centre de ma carte
            // => cela permettra d'afficher toutes les adresses sur une carte bien zoomée
            while ( i < lignes ) {
    
                var lat_i = parseFloat(dataGolfs[i]['latitude']);
                var lng_i = parseFloat(dataGolfs[i]['longitude']);
    
                if (maxX == '') {
                    maxX = lat_i;
                    minX = lat_i;
                } 
                if (maxY == '') {
                    maxY = lng_i;
                    minY = lng_i;
                }
                if (lat_i < minX) { minX = lat_i; }
                if (lat_i > maxX) { maxX = lat_i; }
                if (lng_i < minY) { minY = lng_i; }
                if (lng_i > maxY) { maxY = lng_i; }
                i++;
            }      // Fin boucle While
             
            centreX = (maxX + minX) / 2;
            centreY = (maxY + minY) / 2;        
            // console.log('centreX: ', centreX);
            // console.log('centreY: ', centreY);
            
            // On stocke les coordonnées du centre de la carte
            var myLatLng = {lat: centreX, lng: centreY};

            // Je conserve l'ID du golf choisi via le contrôle Select
            // Chemin de mes blasons de golfs et des markers (génraux et spéciaux)
            var cheminBlasons       = '<?= $this->assetUrl('img/golfs/blasons/'); ?>';
            var cheminMarkers       = '<?= $this->assetUrl('img/golfs/markers/'); ?>';
            var markerGolfStandard  = 'golf-marker3.png';
            var markerGolfDefault   = 'marker-ega.png';
            var markerGolfChoisi    = 'golf-marker2.png';

            // var golfSelectionneId   = this.choixGolf.elements['golfChoisi'].options[this.choixGolf.elements['golfChoisi'].selectedIndex].value;
            // var golfSelectionneId   = document.getElementById('golfChoisiId').value;
            // console.log('golfSelectionneId: ', golfSelectionneId);

            // Crée un objet carte et demande au Dom de l'afficher au centre
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 10
            });
            
            var i = 0;
            var lignes  = Object.keys(dataGolfs).length;     // Nb d'adresses dans mon objet dataGolfs
    
            while ( i < lignes ) {
    
                var lat_i = parseFloat(dataGolfs[i]['latitude']);
                var lng_i = parseFloat(dataGolfs[i]['longitude']);
                myLatLng = {lat: lat_i, lng: lng_i};

                // Le marker sera différent pour le golf choisi et le practice ega
                var markerIcon = markerGolfStandard;

                // console.log(parseFloat(golfSelectionne[id_golf]));

               
                if(golfChoisi != null && dataGolfs[i]['id_golf'] == golfChoisi['id_golf']) {
                        markerIcon = markerGolfChoisi;                        
                } else if (dataGolfs[i]['id_golf'] == golfDefaut['id_golf']) {
                    markerIcon = markerGolfDefault; 
                } else {
                    markerIcon = markerGolfStandard;
                }
        
                // Crée un marqueur et le positionne
                var marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng (myLatLng),
                    // icon: cheminBlasons + dataGolfs[i]['image_blason'], 
                    icon: cheminMarkers + markerIcon,              
                    title: dataGolfs[i]['nom'],
                });

                var resumeDetailsGolfs =    '<div id="content">' +
                                                '<div id="siteNotice">' + '</div>' +
                                                    '<img id="blasonGolf' + dataGolfs[i]['id_golf'] + '" src="<?= $this->assetUrl("img/golfs/blasons/"); ?>' +  dataGolfs[i]['image_blason'] + '" alt="Blason de ' + dataGolfs[i]['nom'] + '" height="50px">' +
                                                    '<h1 id="firstHeading" class="firstHeading"><strong>' + dataGolfs[i]['nom'] + '</strong></h1>' +
                                                    '<div id="bodyContent">' +
                                                        '<br>' + dataGolfs[i]['adresse']  + '<br>' + 
                                                        dataGolfs[i]['code_postal'] + '  ' + dataGolfs[i]['ville']  + '<br>' + 
                                                        '<hr>' + 
                                                        '<span class="glyphicon glyphicon-globe" aria-hidden="true"> </span>' + ' <a href="' + dataGolfs[i]['web'] + '" alt="Accès au site internet: ' + dataGolfs[i]['nom'] + '">' + dataGolfs[i]['web'] + '</a>' +
                                                    '</div>' +
                                                '</div>' +
                                            '</div>'; 

                // Fonction qui affiche l'infobulle correspondante à un marker
                function ajouteInfobulleMarker (map, marker, info_contenu) {
                    var infoWindow = new google.maps.InfoWindow ({
                        content: info_contenu
                    });
                    // google.maps.event.addListener (marker, 'click', function() {
                    google.maps.event.addListener (marker, 'mouseover', function() {
                        infoWindow.open (map, marker)
                    });
                    google.maps.event.addListener (marker, 'mouseout', function() {
                        infoWindow.close (map, marker)
                    });
                }

                // Association de l'infobulle au marker
                ajouteInfobulleMarker (map, marker, resumeDetailsGolfs);

                i++;
            }     // Fin boucle While

            marker.addListener('click', function() {
                map.setZoom(10);
                map.setCenter(marker.getPosition());
            });

        }
        google.maps.event.addDomListener(window, 'load', initialisation);
 
    </script>

    <div id="afffichage_erreurs"></div>

</div>


<?php $this->stop('main_content') ?>
