<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formateurs extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Formateurs_model');
            // check if the 
            if($this->session->userdata('logged_in') !== TRUE){
              redirect('login');
            }
        }
    /*********************************************** DISPLAY METHODS ********************************/
        // display the default formateur page
        public function index(){
            $header = 'header';
            $footer = 'footer';
            $this->load->view('backend/formateurs/inc/'.$header);
            $this->load->view('backend/formateurs/home');
            $this->load->view('backend/formateurs/inc/'.$footer);
        }

        // function to display the default control  page
        public function home(){
            $header = 'header';
            $footer = 'footer';
            $this->load->view('backend/formateurs/inc/'.$header);
            $this->load->view('backend/formateurs/home');
            $this->load->view('backend/formateurs/inc/'.$footer);
        }

        // function to display the logged in admin info
        public function display_Fuser(){
            $cpt_pseudo = $this->session->userdata('cpt_pseudo');
            $result = $this->Formateurs_model->get_Fuser($cpt_pseudo);
            $data['users']  = $result->result_array();
            // print the data to see if it contain the expected result
            // print_r($data['users']);
            $header = 'header';
            $footer = 'footer';
            $this->load->view('backend/formateurs/inc/'.$header);
            $this->load->view('backend/formateurs/display_Fuser',$data);
            $this->load->view('backend/formateurs/inc/'.$footer);
        }

        // function to display all formateurs info
        public function display_Fusers(){
            $cpt_type = "Formateur";
            $result = $this->Formateurs_model->get_Fusers($cpt_type);
            $data['users']  = $result->result_array();
            // print the data to see if it contain the expected result
            //  print_r($data['users']);
            $header = 'header';
            $footer = 'footer';
            $this->load->view('backend/formateurs/inc/'.$header);
            $this->load->view('backend/formateurs/display_Fusers',$data);
            $this->load->view('backend/formateurs/inc/'.$footer);
        }
            // function to display update form 'form_update_Auser'
        public function display_form_update_Fuser(){
            $cpt_pseudo = $this->session->userdata('cpt_pseudo');
            $result = $this->Formateurs_model->get_Fuser($cpt_pseudo);
            $data['users']  = $result->result_array();
            // send the data to the form_update_Auser for display (then update)
            $header = 'header';
            $footer = 'footer';
            $this->load->view('backend/formateurs/inc/'.$header);
            $this->load->view('backend/formateurs/form_update_Fuser',$data);
            $this->load->view('backend/formateurs/inc/'.$footer);
        }
    /*********************************************** END DISPLAY METHODS *****************************  ***/
    
    /*********************************************** ADD METHODS *****************************  ***/
    // load the view that creates a new formateurs
    public function add_Auser() {
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/formateurs/inc/'.$header);
        $this->load->view('backend/formateurs/add_Fuser',$data);
        $this->load->view('backend/formateurs/inc/'.$footer);
    }
    /*********************************************** END ADD METHODS *****************************  ***/
   
    /*********************************************** UPDATE METHODS *****************************  ***/
        // creating a userFormateur -> to Model Comptes
    // update a userAdministrateur -> to Model Comptes
    public function update_Fuser(){
        // if the button having name 'save_administrateur' is selected
        // if($this->input->post('update_Fuser')){
            // make the salt
            $salt = "Ilyade5chose5-en-ce-monde-quil-vaut-mieux_ignorer";
            // make and array of data from the form 'create_formateur'
 
           $CPT_PSEUDO  = $this->session->userdata('cpt_pseudo');
            $CPT_MOTDEPASSE  = hash('sha256',$this->input->post('CPT_MOTDEPASSE').$salt);
            $CPT_CONFMOTDEPASSE  = hash('sha256',$this->input->post('CPT_CONFMOTDEPASSE').$salt);
            $CPT_NOM  = $this->input->post('CPT_NOM');
            $CPT_PRENOM  = $this->input->post('CPT_PRENOM');
            // check the matching of the passwords : if KO reload the form + display error
            if($CPT_MOTDEPASSE != $CPT_CONFMOTDEPASSE){
                $data['error'] = "Mot de passe non identiques.";
                $this->load->view('backend/formateurs/inc/header');
                $this->load->view('backend/formateurs/form_update_Fuser');
                $this->load->view('backend/formateurs/inc/footer');
            }
            // make the array 
            $user_info = array($CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM);
            // insert T_COMPTE_CPT where cpt_pseudo == input cpt_pseudo
            $upAuser = $this->Formateurs_model->update_Fuser($CPT_PSEUDO,$CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM);
            // get the number of rows found by the previous query
            $row = $upAuser->num_rows();
            // if $row > 1 then send an error message , else...
            if(count($row) > 1){
                $data['error']="<h3 style='color:red'>CPT_PSEUDO doesn't exists</h3>";
                redirect('formateurs/display_form_update_Fuser');
            } else {                                
                redirect('formateurs/display_Fuser');
            }
            
        // }
    }

/*********************************************** UPDATE METHODS *****************************  ***/
}