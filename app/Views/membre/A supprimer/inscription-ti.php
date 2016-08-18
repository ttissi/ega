

      <div id="row1" class="row col-md-offset-1">
      
       <br><br><h1>Bienvenue sur votre page profil</h1>
      </div>

      

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">EGA</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Acueil</a></li>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



    <div class="container">
    

    <!-- CODE DU FORMULAIRE ICI -->
    <fieldset>
      
      
    <legend>Mon profil</legend>
    <form class="form-inline" method="post" action="">

      <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-7">N° de carte EGA : <?php ?></div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-7">N° de licence FFG : <?php ?></div>
        </div>
      </div>


      <fieldset>
        
        <legend>Civilité</legend>

        <div class="container">
          <div id="row1" class="row">
            <div class="col-md-2">
              <div class="form-group">
                <input type="radio" name="genre" value="monsieur" id="monsieur">
                <label for="monsieur">Monsieur</label>
              </div>
            </div>

            <div class="col-md-2">
              <div class="form-group">
                <input type="radio" name="genre" value="madame" id="madame">
                <label for="madame">Madame</label>
              </div>
            </div>

            <div class="col-md-6 col-md-offset-7">
              <img src="<?php ?>" width="" height="" alt="Photo" class="img-thumbnail">
            </div>
          </div>
        </div>



        <div id="row2" class="row">
          <div class="form-group">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
              </div>
            </div>
          </div>
        </div><br>
        
        <div id="row3" class="row">
            <div class="form-group">
              <div class="col-md-11">
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="glyphicon glyphicon-user"></i></span>
                  <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom">
                </div>
              </div>
            </div>
        </div><br>
        
       
          <div id="row4" class="row">
              <div class="form-group">
                <label class="col-md-6 control-label" for="appendedtext">Date de naissance</label>
                <div class="col-md-12">
                    <div class="input-group">
                      <input type="date" class="form-control" name="date" id="date">
                      <span class="input-group-addon" for="date">
                        <i class="glyphicon glyphicon-calendar"></i>
                      </span>
                    </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                    <i class="glyphicon glyphicon-time"></i></span>
                    <input type="text" class="form-control" name="age" id="age" placeholder="Age">
                  </div>
                </div>
              </div>
            
          </div><br>

          
        <div id="row5" class="row">
          <div class="form-group">
            <div class="col-md-12">
              <label for="adresse"></label>
              <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse">
            </div>
          </div>
        </div><br>
        
        <div id="row6" class="row">
          <div class="form-group">
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="cp" id="nom" placeholder="Code postal">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="ville" id="nom" placeholder="Ville">
              </div>
            </div>
          </div>

        </div><br>

      <div id="row7" class="row">
          <div class="form-group">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" class="form-control" name="telephone" id="nom" placeholder="Telephone">
              </div>
            </div>
          </div>
        </div><br>
        
        <div id="row8" class="row">
            <div class="form-group">
              <div class="col-md-11">
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="glyphicon glyphicon-envelope"></i></span>
                  <input type="text" class="form-control" name="email" id="prenom" placeholder="Email">
                </div>
              </div>
            </div>
        </div><br>


    

      <fieldset>
        <legend>Authentification (Ne renseigner qu'en cas de changement de mot de passe)</legend>
        <div id="row9" class="row">
          <div class="form-group">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" class="form-control" name="pwdOld" id="pwdOld" placeholder="Mot de passe actuel">
              </div>
            </div>
          </div>
        </div><br>
        
        <div id="row10" class="row">
            <div class="form-group">
              <div class="col-md-11">
                <div class="input-group">
                  <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock"></i></span>
                  <input type="text" class="form-control" name="pwdNew" id="pwdNew" placeholder="Votre nouveau mot de passe">
                </div>
              </div>
            </div>
        </div><br>

        <div id="row11" class="row">
          <div class="form-group">
            <div class="col-md-11">
              <div class="input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" class="form-control" name="pwdConfirm" id="pwdConfirm" placeholder="Confirmez votre nouveau mot de passe">
              </div>
            </div>
          </div>
        </div><br>
        
      </fieldset>

        <button type="button" class="btn btn-primary" name="btnModifier" value="Modifier" >Modifier</button>
        <button type="button" class="btn btn-danger" name="btnAnnuler" value="Annuler" >Annuler</button>
        <!-- <input type="reset" class="form-control" name="btnAnnuler" value="Annuler"> -->

    </form>
