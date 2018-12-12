<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comptes extends CI_Controller{
      public function __construct(){
        parent::__construct();
        // check if the 
        if($this->session->userdata('logged_in') !== TRUE){
          redirect('login');
        }
      }
    
      public function administrateurs(){ // administrateurs
        //Allowing acces to admin only
          if($this->session->userdata('cpt_type')==='Administrateur'){
              $this->load->view('backend/administrateurs/home');
          }else{
              echo "Access Denied";
          }
    
      }
    
      public function formateurs(){
        //Allowing acces to staff only
        if($this->session->userdata('cpt_type')==='Formateur'){
          $this->load->view('backend/formateurs/home');
        }else{
            echo "Access Denied";
            redirect('Actualites');
        }
      }
    
      public function me(){ // to change
        //Allowing acces to author only
        if($this->session->userdata('cpt_type')===''){
          $this->load->view('Actualites');
          redirect('Actualites');
        }else{
          echo "Access Denied";
          redirect('Actualites');
        }
      }
 
}