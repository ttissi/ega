<footer id="footer">

    <div class="row container">
        
        <div id="adressePostaleId" class="col-md-2 col-md-offset-3">
            <p class="h4-subtitle">Coordonnées</p>
            <p>
                <address>
                    <span class="tab-20"><strong>E.G.A</strong><br></span>
                    <span class="tab-20">Allée Jean de Florette<br></span>
                    <span class="tab-20">95120 ERMONT<br></span>
                    <span class="tab-20">FRANCE<br></span>
                
                    <span>
                        <abbr title="Telephone Contact"></abbr><i class="fa fa-phone-square fa-lg"></i> 01.34.37.09.36<br>
                        <i class="fa fa-envelope-square fa-lg"></i><a href="mailto:#"> contact@ega.asso.fr</a>
                    </span>
                </address>
            </p>
            <p><small>&copy; 2016 Ermont Golf Association</small></p>
        </div>      <!-- FIn DIV #adressePostaleId -->

        <div id="liensInformationsId" class="col-md-2 col-md-offset-3 text-left">
            <p class="h4-subtitle">Informations</p>            
            <p>
            <ul class="nobullet">
                <li><a href="<?= $this->url('bureau_about') ?>">Qui sommes-nous ?</a></li>
                <!-- <li><a href="<?= $this->url('bureau_contact') ?>">Contact</a></li> -->
                <li><a href="#" data-toggle="modal" data-target="#contactModal" data-whatever="@Bureau EGA">Contact</a></li>
                <li><a href="<?= $this->url('practice_accesPractice') ?>">Accès practice</a></li>
                <li><a href="<?= $this->url('default_planSite') ?>">Plan de site</a></li>
                <li><a href="<?= $this->url('bureau_mentionsLegales') ?>">Mentions légales</a></li>
            </ul>
            </p>
        </div>      <!-- FIn DIV #liensInformationsId -->

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
                <form id="contactForm" method="POST" action=">
                    <div class="form-group">
                        <label for="nomDestinataireId" class="control-label">Destinataire:</label>
                        <input type="text" class="form-control" id="nomDestinataireId" placeholder="A renseigner uniquement... si destiné à un membre particulier du bureau">
                    </div>
                    <div class="form-group">
                        <label for="messageId" class="control-label">Message:</label>
                        <textarea id="messageId" class="form-control" rows="5"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Envoi message</button>
            </div>
        </div>
    </div>
</div>      <!-- Fin div #contactModal -->
   
    


