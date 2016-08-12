<?php $this->layout('layout', ['title' => 'EGA | Cartographie']) ?>

<!-- Affichage des modules de sélection de golf sur le panel gauche -->

<div class="row">

<?php $this->start('panel_left') ?>

    <button id="rechercheGolfId" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#panel_left">
        <span class="glyphicon glyphicon glyphicon-search"></span> Sélection golf
    </button>
    <div id="panel_left" class="col-md-2 collapse well">
        <h1>Liste Golfs Partenaires</h2>
        <form method="POST">
            <div class="pure-control-group">
                <label for="golfId"></label>
                <select name="golf" id="golfId">
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

<?php $this->stop('panel_left') ?>

<!-- Affichage de la carte Google Map sur la partie centrale -->
<?php $this->start('main_content') ?>
    

    <div id="map" class="col_md-6 col-md-offset-2 well"></div>

    <!-- Initialise la Map de Google -->
    <script>

        function initialisation(){

            // Je stocke dans la variable Javascript dataGolfs, la variable PHP $golfs
            // qui a été passée lors de l'appel de ce programme
            var dataGolfs = <?php echo json_encode($golfs, JSON_FORCE_OBJECT); ?>;


/*  ************ BLOC de DEBUG pour vérification de valeur (A supprimer à la fin)

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
            var infosMarqueurs = [];
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
            }
            
            // console.log('maxX: ', maxX);
            // console.log('minX: ', minX);
            // console.log('maxY: ', maxY);
            // console.log('minY: ', minY);
    
            centreX = (maxX + minX) / 2;
            centreY = (maxY + minY) / 2;        
            // console.log('centreX: ', centreX);
            // console.log('centreY: ', centreY);
            
            // On stocke les coordonnées du centre de la carte
            var myLatLng = {lat: centreX, lng: centreY};
    
            // Crée un objet carte et demande au Dom de l'afficher au centre
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: 10
            });
    
            // var imageMarqueur = new google.maps.MarkerImage('images/Marqueur.png'), new google.maps.Size(24,     24), new google.maps.Point(0,0), new google.maps.Point(12, 12);
            
            var i = 0;
            var lignes  = Object.keys(dataGolfs).length;     // Nb d'adresses dans mon objet dataGolfs
    
            while ( i < lignes ) {
    
                var lat_i = parseFloat(dataGolfs[i]['latitude']);
                var lng_i = parseFloat(dataGolfs[i]['longitude']);
              
                myLatLng = {lat: lat_i, lng: lng_i};
        
                // Crée un marqueur et le positionne
                var marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng (myLatLng),
                    title: dataGolfs[i]['nom']
                });
                i++;
            }

        }
        google.maps.event.addDomListener(window, 'load', initialisation);
 
    </script>

    <div id="afffichage_erreurs"></div>

</div>


<?php $this->stop('main_content') ?>
