<?php $this->layout('layout', ['title' => 'EGA | Cartographie']) ?>

<!-- Affichage des modules de sélection de golf sur le panel gauche -->
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
    
    
    <div id="afffichage_erreurs"></div>

<?php $this->stop('main_content') ?>

<!--  ['golfParDefaut' => $MonObjetGolf, 'golfs' => $ListeDeMesGolfs]);   -->