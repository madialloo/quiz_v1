<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <!-- page content  -->
        <div class="jumbotron">
          <h4>Bienvenue  <?php echo $this->session->userdata('cpt_pseudo');?></h4>
              <form class="form-horizontal" action="<?php echo site_url("formateurs/update_Fuser");?>"  method="post">
                        <?php foreach($users as $user): ?>
                          <!-- <fieldset> -->
                              <!-- include the session functionnality ? -->
                              <?php echo $this->session->flashdata('msg');?>
                              <!-- display the successfull or error message -->
                              <p><?php echo @$error; ?></p> 

                          <!-- Form Name -->
                          <legend>Modifier un utilisateur</legend>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="CPT_PSEUDO">Pseudo</label>  
                            <div class="col-md-4">
                            <input id="CPT_PSEUDO" name="CPT_PSEUDO" type="text" class="form-control input-md" required  value="<?php echo $user["CPT_PSEUDO"]; ?>" disabled="disabled">
                            <span class="help-block">Entrer le pseudo de l'utilisateur</span>  
                            </div>
                          </div>

                          <!-- Password input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="CPT_MOTDEPASSE">Mot de passe</label>
                            <div class="col-md-4">
                              <input id="CPT_MOTDEPASSE" name="CPT_MOTDEPASSE" type="password" placeholder="mot de passe " value="<?php echo $user["CPT_MOTDEPASSE"]; ?>" class="form-control input-md" required="">
                              <span class="help-block">Entrer le mot de passe</span>
                            </div>
                          </div>
                          <!-- Password input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="CPT_CONFMOTDEPASSE">Confirmer le mot de passe</label>
                            <div class="col-md-4">
                              <input id="CPT_MOTDEPASSE" name="CPT_CONFMOTDEPASSE" type="password" placeholder="Mot de passe" value="<?php echo $user["CPT_MOTDEPASSE"]; ?>" class="form-control input-md" required="">
                              <span class="help-block">Entrer le mot de passe</span>
                            </div>
                          </div>


                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="CPT_NOM">NOM</label>  
                            <div class="col-md-4">
                            <input id="CPT_NOM" name="CPT_NOM" type="text" placeholder="Nom" value="<?php echo $user["CPT_NOM"]; ?>" class="form-control input-md">
                            <span class="help-block">Entrer le nom de l'utilisateur</span>  
                            </div>
                          </div>

                          <!-- Text input-->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="CPT_PRENOM">PRENOM</label>  
                            <div class="col-md-4">
                            <input id="CPT_PRENOM" name="CPT_PRENOM" type="text" placeholder="Prénom" value="<?php echo $user["CPT_PRENOM"]; ?>" class="form-control input-md">
                            <span class="help-block">Entrer le prenom de l'utilisateur</span>  
                            </div>
                          </div>

                          <!-- Button SUBMIT -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="SUBMIT"></label>
                            <div class="col-md-4">
                              <button id="SUBMIT" name="save_user" type="submit" class="btn btn-primary">Valider</button>
                            </div>
                          </div>
                          <div></div>
                          <!-- Button CANCEL -->
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="CANCEL"></label>
                            <div class="col-md-4">
                              <a href="<?php echo base_url('index.php/formateurs/'); ?>"><button id="CANCEL" name="cancel_save_user"  class="btn btn-primary">ANNULER</button></a>
                            </div>
                          </div>
                          <!-- Button (Double) -->
                      <!-- <div class="form-group">
                      <label class="col-md-4 control-label" for="button1id"></label>
                        <div class="col-md-4">
                          <button id="SUBMIT" name="update_Fuser" type="submit" class="btn btn-success">Valider</button>
                          <a href=""></a><button id="CANCEL" name="cancel_update_Fuser" type="submit" class="btn btn-danger">Annuler</button>
                        </div>
                      </div> -->
                      <?php endforeach; ?>
              </form>
        </div>
 <!-- end jumbotron -->
