<?php $this->layout('layout', ['title' => 'Visualisation']) ?>
<?php echo $this->start('main_content') ?>
  


  <form method="post" action="" id="formProduit">
    <fieldset>
      <legend>Bienvenue <?php  ?> sur la page produit.</legend>
   

      <fieldset>
        <legend>Visualisation de votre annonce</legend> 
       
        <input placeholder="Désignation Article"></input>
        <input placeholder="Etat"></input>
        <input placeholder="Catégorie"></input>
        <input placeholder="Dextérité"></input>
        <input placeholder="Sexe"></input>
        <input placeholder="Prix"></input>
        <input type="text" placeholder="Description"></input>
        
      </fieldset>
        
     
        
      <fieldset>
        
      <p>Annonce n°: id_produit</p>
      <p>Parue le : date_publication</p>

        <span>
        <img src="?">Photo1</img>
        <img src="?">Photo2</img>
        <img src="?">Photo3</img>
        </span>

      <p>Cliquez sur les images pour agrandir</p>

      </fieldset>
          
    <fieldset>
      <p>Nom du Vendeur: NOM Prenom</p>
      <input placeholder="Telephone"></input>
      <input placeholder="Email"></input>
    </fieldset>

    <fieldset>
      <h3>Informations sur la vente</h3>
      
        <ul>
          <li>Seuls les matériels et accessoires de golf des membres EGA sont permis à la vente.</li>
          <li>EGA ne permet que la relation entre 2 membres souhaitant faire affaire.</li>
          <li>Ega ne gére en aucune maniére la vente et décline toute responsabilité en cas de problème lors de la transaction.</li>
        </ul>
    </fieldset>
        <input type="submit" value="Fermer la fenêtre">
    </fieldset>
  </form>

<?php echo $this->stop('main_content') ?>
