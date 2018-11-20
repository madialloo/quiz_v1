
        <!-- Formulaire de mise à jour  -->
        <form class="form-horizontal" action="<?php echo site_url("administrateurs/register_user");?>" target="_blank" method="post">
            <fieldset>
                  <!-- include the session functionnality ? -->
                  <?php echo $this->session->flashdata('msg');?>
                  <!-- display the successfull or error message -->
                  <p><?php echo @$error; ?></p> 

              <!-- Form Name -->
              <legend>Ajouter un utilisateur</legend>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="CPT_PSEUDO">Pseudo</label>  
                <div class="col-md-4">
                <input id="CPT_PSEUDO" name="CPT_PSEUDO" type="text" placeholder="pseudo" class="form-control input-md" required="">
                <span class="help-block">Entrer le pseudo de l'utilisateur</span>  
                </div>
              </div>

              <!-- Password input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="CPT_MOTDEPASSE">Mot de passe</label>
                <div class="col-md-4">
                  <input id="CPT_MOTDEPASSE" name="CPT_MOTDEPASSE" type="password" placeholder="mot de passe " class="form-control input-md" required="">
                  <span class="help-block">Entrer le mot de passe</span>
                </div>
              </div>
              <!-- Password input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="CPT_CONFMOTDEPASSE">Confirmer le mot de passe</label>
                <div class="col-md-4">
                  <input id="CPT_MOTDEPASSE" name="CPT_CONFMOTDEPASSE" type="password" placeholder="Mot de passe" class="form-control input-md" required="">
                  <span class="help-block">Entrer le mot de pasee</span>
                </div>
              </div>


              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="CPT_NOM">NOM</label>  
                <div class="col-md-4">
                <input id="CPT_NOM" name="CPT_NOM" type="text" placeholder="Nom" class="form-control input-md">
                <span class="help-block">Entrer le nom de l'utilisateur</span>  
                </div>
              </div>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="CPT_PRENOM">PRENOM</label>  
                <div class="col-md-4">
                <input id="CPT_PRENOM" name="CPT_PRENOM" type="text" placeholder="PrÃ©nom " class="form-control input-md">
                <span class="help-block">Entrer le prenom de l'utilisateur</span>  
                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="CPT_ACTIF">STATUS</label>
                <div class="col-md-4">
                  <select id="CPT_ACTIF" name="CPT_ACTIF" class="form-control"> <!--to add for formateur form : disabled="disabled" --->
                    <option value="1">ACTIVE</option>
                    <option value="0">DESACTIVE</option>
                  </select>
                </div>
              </div>

              <!-- Select Basic -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="CPT_TYPE">TYPE </label>
                <div class="col-md-4">
                  <select id="CPT_TYPE" name="CPT_TYPE" class="form-control"> <!--to add for formateur form : disabled="disabled" --->
                    <option value="Administrateur">Administrateur</option>
                    <option value="Formateur">Formateur</option>
                  </select>
                </div>
              </div>

              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="SUBMIT"></label>
                <div class="col-md-4">
                  <button id="SUBMIT" name="save_user" type="submit" class="btn btn-primary">Valider</button>
                </div>
              </div>

          </fieldset>
      </form>