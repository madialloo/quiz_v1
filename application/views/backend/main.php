<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Centre</span> d'Administration</h1>
    <p>*****&nbsp;Administrateurs & Formateurs&nbsp;*****</p>
    <img src="<?php echo base_url();?>assets/images/login2.png" alt="admin-image" class="w3-image" width="100" height="100">
  </header>
</div>
  <!-- Login Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Entrer vos identifiants de connexion:</h2>
    <hr style="width:200px" class="w3-opacity">

    <p>Login / Mot de passe :</p>

    <form action="<?php echo site_url('login/auth');?>"  method="post">
    <!-- include the session functionnality ? -->
    <?php echo $this->session->flashdata('msg');?>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Login" required name="CPT_PSEUDO" autofocus></p>
      <p><input class="w3-input w3-padding-16" placeholder="Mot de passe" required name="CPT_MOTDEPASSE" type="password"></p>
      <!--user remember-me checkbox  -->
      <div class="checkbox">
             <label>
               <input type="checkbox" value="remember-me"> Remember me
             </label>
      </div>
      <p>
      <!-- form submit button  -->
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> VALIDER
        </button>
      </p>
    </form>
  <!-- End Login Section -->  