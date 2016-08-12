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
                var optionsCarte = {
                    zoom: 8,
                    center: new google.maps.LatLng(48.98546, 2.24043)
                }
                var maCarte = new google.maps.Map(document.getElementById('map'), optionsCarte);
            }
            google.maps.event.addDomListener(window, 'load', initialisation);
 
        </script>

    <div id="afffichage_erreurs"></div>

</div>


<?php $this->stop('main_content') ?>
