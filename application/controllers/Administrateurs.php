<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrateurs extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        // if session is not started already , go back to login page which redirect to the appropriate page
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('login');
        }
        $this->load->model('Administrateurs_model');
    }
    /*********************************************** DISPLAY METHODS *****************************  ***/
    // function to display the default  page
    public function index(){
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/administrateurs/inc/'.$header);
        $this->load->view('backend/administrateurs/home');
        $this->load->view('backend/administrateurs/inc/'.$footer);
        
    }
    // function to display the default admin page whenn logged in
    public function home(){
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/administrateurs/inc/'.$header);
        $this->load->view('backend/administrateurs/home');
        $this->load->view('backend/administrateurs/inc/'.$footer);
    }
    // function to display the logged in admin info
    public function display_Auser(){
        $cpt_pseudo = $this->session->userdata('cpt_pseudo');
        $result = $this->Administrateurs_model->get_Auser($cpt_pseudo);
        $data['users']  = $result->result_array();
        // print the data to see if it contain the expected result
        // print_r($data['users']);
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/administrateurs/inc/'.$header);
        $this->load->view('backend/administrateurs/display_Auser',$data);
        $this->load->view('backend/administrateurs/inc/'.$footer);
    }
    // function to display all admins info
    public function display_Ausers(){
        $cpt_type = $this->session->userdata('cpt_type');
        $result = $this->Administrateurs_model->get_Ausers($cpt_type);
        $data['users']  = $result->result_array();
        // print the data to see if it contain the expected result
        //  print_r($data['users']);
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/administrateurs/inc/'.$header);
        $this->load->view('backend/administrateurs/display_Ausers',$data);
        $this->load->view('backend/administrateurs/inc/'.$footer);
    }
    // function to display update form 'form_update_Auser'
    public function display_form_update_Auser(){
        $cpt_pseudo = $this->session->userdata('cpt_pseudo');
        $result = $this->Administrateurs_model->get_Auser($cpt_pseudo);
        $data['users']  = $result->result_array();
        // send the data to the form_update_Auser for display (then update)
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/administrateurs/inc/'.$header);
        $this->load->view('backend/administrateurs/form_update_Auser',$data);
        $this->load->view('backend/administrateurs/inc/'.$footer);
    }
    /*********************************************** END DISPLAY METHODS *****************************  ***/
    
    /*********************************************** ADD METHODS *****************************  ***/
    // load the view that creates a new administrateur
    public function add_Auser() {
        $header = 'header';
        $footer = 'footer';
        $this->load->view('backend/administrateurs/inc/'.$header);
        $this->load->view('backend/administrateurs/add_Auser',$data);
        $this->load->view('backend/administrateurs/inc/'.$footer);
    }
    /*********************************************** END ADD METHODS *****************************  ***/
    
    /*********************************************** UPDATE METHODS *****************************  ***/
    // update a userAdministrateur -> to Model Comptes
    public function update_Auser(){
        // if the button having name 'save_administrateur' is selected
        if($this->input->post('update_Auser')){
            // make the salt
            $salt = "Ilyade5chose5-en-ce-monde-quil-vaut-mieux_ignorer";
            // make and array of data from the form 'create_formateur'
            $CPT_PSEUDO  = $this->input->post('CPT_PSEUDO');
            $CPT_MOTDEPASSE  = hash('sha256',$this->input->post('CPT_MOTDEPASSE').$salt);
            $CPT_CONFMOTDEPASSE  = hash('sha256',$this->input->post('CPT_CONFMOTDEPASSE').$salt);
            $CPT_NOM  = $this->input->post('CPT_NOM');
            $CPT_PRENOM  = $this->input->post('CPT_PRENOM');
            // check the matching of the passwords : if KO reload the form + display error
            if($CPT_MOTDEPASSE != $CPT_CONFMOTDEPASSE){
                $data['error'] = "Mot de passe non identiques.";
                $this->load->view('backend/administrateurs/inc/header');
                $this->load->view('backend/administrateurs/form_update_Auser');
                $this->load->view('backend/administrateurs/inc/footer');
            }
            // make the array 
            $user_info = array($CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM);
            // insert T_COMPTE_CPT where cpt_pseudo == input cpt_pseudo
            $upAuser = $this->Administrateurs_model->update_Auser($CPT_PSEUDO,$CPT_MOTDEPASSE,$CPT_NOM,$CPT_PRENOM);
            // get the number of rows found by the previous query
            $row = $upAuser->num_rows();
            // if $row > 1 then send an error message , else...
            if(count($row) > 1){
                $data['error']="<h3 style='color:red'>CPT_PSEUDO doesn't exists</h3>";
                redirect('administrateurs/display_form_update_Auser');
            } else {                                
                redirect('administrateurs/display_Auser');
            }
            
        }
    }
    /*********************************************** OTHER METHODS ******************************/
    // display the logged in user if he cancels the update of his form
    public function cancel_update_Auser(){
        redirect('administrateurs/display_Auser');
    }
    /*********************************************** END OTHER METHODS *****************************/
}    