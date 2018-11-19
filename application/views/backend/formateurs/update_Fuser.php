<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="<?php echo base_url('assets/backend/css/bootstrap.min.css');?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
            <img src="<?php echo base_url('assets/images/login.png');?>" alt="" width="40" heigth="40">
          </div>
          <hr/> <!-- separator for visual purpose-->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                  <?php if($this->session->userdata('cpt_type')==='Administrateur'):?>
                  <!-- start dropdown menu item for logged in user  -->
                  <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><?php echo $this->session->userdata('cpt_pseudo');?> <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/administrateurs/display_Auser">Afficher mon profil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/administrateurs/update_Auser">Modifier mon profil</a></li>
                      </ul>
                  </div>
                  <!-- end dropdown menu item  -->               
                <!-- start dropdown menu item for administrateurs settings  -->
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Administrateurs <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/administrateurs/display_Ausers">Afficher les profils</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/administrateurs/create_Auser">Ajouter un Administrateur</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/administrateurs/update_Auser">Modifier un Administrateur</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/administrateurs/delete_Auser">Supprimer un Administrateur</a></li>
                    </ul>
                </div>
                <!-- end dropdown menu item  -->               
                <!-- start dropdown menu item  -->
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Formateurs <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/formateurs/display_Fusers">Afficher les profils</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/formateurs/create_Fuser">Ajouter un Formateur</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/formateurs/update_Fuser">Modifier un Formateur</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/formateurs/delete_Fuser">Supprimer un Formateur</a></li>
                    </ul>
                </div>
                <!-- end dropdown menu item for FORMATEURS settings  -->  
                <!--ACCESS MENUS FOR FOMATEUR-->
                <?php elseif($this->session->userdata('cpt_type')==='Formateur'):?>
                  <!-- start dropdown menu item for logged in user  -->
                  <div class="btn-group">
                    <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><?php echo $this->session->userdata('cpt_pseudo');?> <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url();?>index.php/administrateurs/display_Fuser">Afficher mon profil</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url();?>index.php/administrateurs/update_Fuser">Modifier mon profil</a></li>
                      </ul>
                  </div>
                  <!-- end dropdown menu item  -->                      <!-- start dropdown menu item  -->
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Formateurs <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/formateurs/display_Fusers">Afficher les profils</a></li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/formateurs/update_Fuser">Modifier un Formateur</a></li>
                    </ul>
                </div>
                <!-- end dropdown menu item for FORMATEURS settings  -->
                <!-- start dropdown menu item for QUIZ settings  -->               
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Quizs <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/quiz/display_quiz">Afficher un Quiz</a></li>
                      <li><a href="<?php echo base_url();?>index.php/quiz/create_quiz">Ajouter un Quiz</a></li>
                      <li><a href="<?php echo base_url();?>index.php/quiz/update_quiz">Modifier un Quiz</a></li>
                      <li><a href="<?php echo base_url();?>index.php/quiz/delete_quiz">Supprimer un Quiz</a></li>
                    </ul>
                </div>
                <!-- end dropdown menu item for QUIZ settings -->  
                <!-- start dropdown menu item for QUIZ settings  -->               
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">ActualitÃ©s <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/actualites/display_actualite">Afficher une Actualites</a></li>
                      <li><a href="<?php echo base_url();?>index.php/actualites/create_actualite">Ajouter une Actualites</a></li>
                      <li><a href="<?php echo base_url();?>index.php/actualites/update_actualite">Modifier une Actualites</a></li>
                      <li><a href="<?php echo base_url();?>index.php/actualites/delete_actualite">Supprimer une Actualitesz</a></li>
                    </ul>
                </div>
                <!-- end dropdown menu item for QUIZ settings --> 
                <!-- start dropdown menu item for Matches settings  -->               
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Matchs <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/matchs/display_match">Afficher un match</a></li>
                      <li><a href="<?php echo base_url();?>index.php/matchs/create_match">Ajouter un match</a></li>
                      <li><a href="<?php echo base_url();?>index.php/matchs/update_match">Modifier un match</a></li>
                      <li><a href="<?php echo base_url();?>index.php/matchs/delete_match">Supprimer un match</a></li>
                    </ul>
                </div>
                <!-- end dropdown menu item for QUIZ settings --> 
                <!-- start dropdown menu item for Questions settings  -->               
                <div class="btn-group">
                  <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Questions <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url();?>index.php/questions/display_questions">Afficher un Questionnaire</a></li>
                      <li><a href="<?php echo base_url();?>index.php/questions/create_questions">Ajouter un Questionnaire</a></li>
                      <li><a href="<?php echo base_url();?>index.php/questions/update_questions">Modifier un Questionnaire</a></li>
                      <li><a href="<?php echo base_url();?>index.php/questions/delete_questions">Supprimer un Questionnaire</a></li>
                    </ul>
                </div>
                <!-- end dropdown menu item for Questions settings -->               
                <!--ACCESS MENUS FOR MEeeeeeeeeeeee-->
                <?php else:?>
                <li class="active"><a href="#">Administration : Moi</a></li>
                <li><a href="#">Afficher mon profil</a></li>
                <?php endif;?>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out / Deconnexion</a></li>
              </ul>
            </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
        <!-- page content  -->
        <div class="jumbotron">
          <h4>Bienvenue  <?php echo $this->session->userdata('cpt_pseudo');?></h4>

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
  <input id="CPT_PSEUDO" name="CPT_PSEUDO" type="text" placeholder="pseudo" class="form-control input-md" required  value="<?php echo $user["CPT_PSEUDO"]; ?>" disabled="disabled">
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
  <span class="help-block">Entrer le prénom de l'utilisateur</span>  
  </div>
</div>

<!-- Select Basic -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="CPT_ACTIF">STATUS</label>
  <div class="col-md-4">
    <select id="CPT_ACTIF" name="CPT_ACTIF" class="form-control"> to add for formateur form : disabled="disabled" 
      <option value="1">ACTIVE</option>
      <option value="0">DESACTIVE</option>
    </select>
  </div>
</div> -->

<!-- Select Basic -->
<!-- <div class="form-group">
  <label class="col-md-4 control-label" for="CPT_TYPE">TYPE </label>
  <div class="col-md-4">
    <select id="CPT_TYPE" name="CPT_TYPE" class="form-control"> to add for formateur form : disabled="disabled" 
      <option value="Administrateur">Administrateur</option>
      <option value="Formateur">Formateur</option>
    </select>
  </div>
</div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="SUBMIT"></label>
  <div class="col-md-4">
    <button id="SUBMIT" name="save_user" type="submit" class="btn btn-primary">Valider</button>
  </div>
</div>

</fieldset>
</form>
                            <!--  start display all users data  -->
                            <?php foreach($users as $user): ?>
                                        <tr>
                                            <td><?php echo $user["CPT_PSEUDO"]; ?></td>
                                            <td><?php echo $user["CPT_NOM"]; ?></td>
                                            <td><?php echo $user["CPT_PRENOM"]; ?></td>
                                            <td><?php echo $user["CPT_TYPE"]; ?></td>
                                            <td><?php echo $user["CPT_ACTIF"]; ?></td>
                                        </tr>
                            <?php endforeach; ?>
                            <!-- end display all users data  -->

        </div>
 
      </div>
    </div>
 
    <script src="<?php echo base_url('assets/backend/js/bootstrap.min.js');?>"></script>
  </body>
</html>