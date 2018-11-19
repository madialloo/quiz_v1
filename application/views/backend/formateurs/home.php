<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link href="<?php echo base_url('assets/backend/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="<?php=base_url('assets/images/login.png');?>" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('cpt_type')==='Administrateur'):?>
                  <li class="active"><a href="#">Administration : Administrateur</a></li>
                  <li><a href="<?php echo base_url();?>index.php/administrateurs/display_user">Afficher mon profil</a></li>
                  <li><a href="<?php echo base_url();?>index.php/administrateurs/create_user">Ajouter un Administrateur</a></li>
                  <li><a href="<?php echo base_url();?>index.php/administrateurs/delete_user">Supprimer un Administrateur</a></li>
                  <li><a href="<?php echo base_url();?>index.php/formateurs/create_user">Ajouter un Formateur</a></li>
                  <li><a href="<?php echo base_url();?>index.php/formateurs/delete_user">Supprimer un Formateur</a></li>
                <!--ACCESS MENUS FOR FOMATEUR-->
                <?php elseif($this->session->userdata('cpt_type')==='Formateur'):?>
                <li class="active"><a href="#">Administration : Formateur</a></li>
                <li><a href="<?php echo base_url();?>index.php/formateurs/display_user">Afficher mon profil</a></li>
                  <li><a href="<?php echo base_url();?>index.php/formateurs/create_user">Ajouter un Formateur</a></li>
                  <li><a href="<?php echo base_url();?>index.php/quiz/display_quiz">Afficher un Quiz</a></li>
                  <li><a href="<?php echo base_url();?>index.php/quiz/create_quiz">Ajouter un Quiz</a></li>
                  <li><a href="<?php echo base_url();?>index.php/quiz/delete_quiz">Supprimer un Quiz</a></li>
                  <li><a href="<?php echo base_url();?>index.php/quiz/update_quiz">Modifier un Quiz</a></li>
                <!--ACCESS MENUS FOR ME-->
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
 
        <div class="jumbotron">
          <h4>Welcome Back <?php echo $this->session->userdata('cpt_pseudo');?></h4>
        </div>
 
      </div>
    </div>
 
    <script src="<?php echo base_url('assets/backend/js/bootstrap.min.js');?>"></script>
  </body>
</html>