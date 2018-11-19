<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Centre</span> d'Administration</h1>
    <p>Administrateurs</p>
    <img src="<?php echo base_url();?>assets/images/formateurs.png" alt="admin-image" class="w3-image" width="100" height="100">
  </header>
</div>
  <!-- Login Section -->
    <hr style="width:200px" class="w3-opacity">

    <p>Creation d'un utilisateur</p>

    <form action="<?php echo site_url("formateurs/getFormateurs");?>" target="_blank" method="post">
    <!-- include the session functionnality ? -->
    <?php echo $this->session->flashdata('msg');?>
      <p><?php echo @$error; ?></p> <!-- display the successfull or error message -->
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Login" required name="cpt_pseudo"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Nom" required name="cpt_nom"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Prenom" required name="cpt_prenom"></p>
      <p><input class="w3-input w3-padding-16" placeholder="Mot de passe" required name="cpt_motdepasse" type="password"></p>
      <p><input class="w3-input w3-padding-16" placeholder="Confirmer le mot de passe" required name="cpt_motdepasse" type="password"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Type" required name="cpt_type"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="Activation" required name="cpt_actif"></p>
      <!-- form submit button  -->
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" name="save_formateur" type="submit">
          <i class="fa fa-paper-plane" ></i> VALIDER
        </button>
      </p>
    </form>
  <!-- End Login Section -->  