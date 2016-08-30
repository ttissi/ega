<footer id="footer">

    <div class="row container">       
        <div id="adressePostaleId" class="col-md-2 col-md-offset-2 text-left">
            <p class="h4-subtitle">Coordonnées</p>
            <!-- <p> -->
                <address>
                    <span class="tab-20"><strong>E.G.A</strong><br></span>
                    <span class="tab-20">Allée Jean de Florette<br></span>
                    <span class="tab-20">95120 ERMONT<br></span>
                    <span class="tab-20">FRANCE<br></span>
                
                    <span>
                        <abbr title="Telephone Contact"></abbr><i class="fa fa-phone-square fa-lg"></i> +33 (0)1.34.37.09.36<br>
                        <i class="fa fa-envelope-square fa-lg"></i><a href="mailto:contact@ega.asso.fr"> contact@ega.asso.fr</a>
                    </span>
                </address>
            <!-- </p> -->
            <p><small>&copy; 2016 Ermont Golf Association</small></p>
        </div>      <!-- FIN DIV #adressePostaleId -->

        <div id="liensInformationsId" class="col-md-2 col-md-offset-4">
            <p class="h4-subtitle">Informations</p>            
            <!-- <p> -->
            <ul class="nobullet">
                <li><a href="<?= $this->url('bureau_about') ?>">Qui sommes-nous ?</a></li>
                <!-- <li><a href="<?= $this->url('bureau_contact') ?>">Contact</a></li> -->
                <li><a href="#" data-toggle="modal" data-target="#contactModal" data-whatever="@Bureau EGA">Contact</a></li>
                <li><a href="<?= $this->url('practice_accesPractice') ?>">Accès practice</a></li>
                <li><a href="<?= $this->url('default_planSite') ?>">Plan de site</a></li>
                <li><a href="<?= $this->url('bureau_mentionsLegales') ?>">Mentions légales</a></li>
            </ul>
            <!-- </p> -->
        </div>      <!-- FIN DIV #liensInformationsId -->
    </div>
    <div class="row">
        <div id="diversInformationsId" class="text-center">
                <p>
                    <a href="https://validator.w3.org/">
                    <img class="w3CValide"
                    src="<?= $this->assetUrl('img/divers/HTML_W3C_compliant.png') ?>"
                    alt="HTML Valide W3C!" />
                    </a>
                    <a href="http://jigsaw.w3.org/">
                     <img class="w3CValide"
                    src="<?= $this->assetUrl('img/divers/CSS_W3C_compliant.png') ?>"
                    alt="CSS Valide W3C!" />
                    </a>
                </p>
        </div>
    </div>
    
</footer>

<!-- Petite flèche haut pour remonter en haut de page -->
<span id="scroll-top"><a href="#top" class="scrollup"><i class="fa fa-caret-up fa-3x"></i></a></span>

<!-- Bloc pour la gestion d'une fenêtre modale: Formulaire de contact -->
<div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <p><i class="fa fa-envelope fa-4x" aria-hidden="true"></i>&nbsp; <span class="modal-title police-1-5em" id="contactModalLabel">Nouveau message</span></p>
            </div>
            <div class="modal-body">

                <!-- Zone d'affichage pour le message de validation ou non -->
                <?php if (!empty($error)) 
                    {
                      echo '<div class="alert alert-danger form-feedback">ERREUR : ' . $error . '</div>';
                    } else if (!empty($success))
                    {
                      echo '<div class="alert alert-success ">
                            <strong>Bravo !</strong><br>Merci ! Nous revenons vers vous très rapidement.</div>';
                    } 
                ?>

                <form id="contactModalForm" method="POST">
                    <div class="form-group">
                        <label for="nomEmetteurId" class="control-label">Emetteur:</label>
                        <input type="text" class="form-control" id="nomEmetteurId" placeholder="Votre adresse email">
                    </div>
                    <div class="form-group">
                        <label for="nomDestinataireId" class="control-label">Destinataire:</label>
                        <input type="text" class="form-control" id="nomDestinataireId" placeholder="A renseigner uniquement... si destiné à un membre particulier du bureau">
                    </div>
                    <div class="form-group">
                        <label for="ObjetId" class="control-label">Objet:</label>
                        <input type="text" class="form-control" id="ObjetId" placeholder="Objet de votre message">
                    </div>
                    <div class="form-group">
                        <label for="messageId" class="control-label">Message:</label>
                        <textarea id="messageId" class="form-control" rows="5"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Envoi message</button>
            </div>
        </div>
    </div>
</div>      <!-- Fin div #contactModal -->
   
    


